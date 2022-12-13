<?php
include('bdd.php');

if (isset($_FILES)) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $infos = pathinfo($_FILES['img']['name']);
        $ext_up = strtolower($infos['extension']);
        if ($ext_up != 'jpg' && $ext_up != 'jpeg' && $ext_up != 'png' && $ext_up != 'bmp' && $ext_up != 'gif') {
            $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le fichier selectionné n\'est pas une image.</div>';
            header('Location: admin.php?page=8');
        } else {
            $imgDir = 'assets/upload/';
            $filename = 'prod-' . time();
            $picture = $imgDir . $filename . '.' . $ext_up;
            $tmp_file = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_file, $picture);
            $picture = $filename . '.' . $ext_up;
            $query = 'UPDATE product SET img=:img WHERE id=:id';
            $req = $bdd->prepare($query);
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->bindValue(':img', $picture, PDO::PARAM_STR);
            $req->execute();
            $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été modifié</div>';
            header('Location: admin.php?page=4');
        }
    }
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    header('Location: admin.php?page=4');
}
