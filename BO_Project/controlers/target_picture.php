<?php
require '../models/bdd.php';
require '../models/functions.php';

if (isset($_FILES)) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $table = "product";
        $infos = pathinfo($_FILES['img']['name']);
        $ext_up = strtolower($infos['extension']);
        if ($ext_up != 'jpg' && $ext_up != 'jpeg' && $ext_up != 'png' && $ext_up != 'bmp' && $ext_up != 'gif') {
            $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le fichier selectionné n\'est pas une image.</div>';
            header('Location: ../public/admin.php?page=4');
        } else {
            $imgDir = '../public/assets/upload/';
            $filename = 'prod-' . time();
            $picture = $imgDir . $filename . '.' . $ext_up;
            $tmp_file = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_file, $picture);
            $picture = $filename . '.' . $ext_up;
            updatePic($bdd, $table, $picture, $id);
            $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été modifié</div>';
            header('Location: ../public/admin.php?page=4');
        }
    }
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    header('Location: ../public/admin.php?page=4');
}
