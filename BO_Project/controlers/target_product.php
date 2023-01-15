<?php
require '../models/bdd.php';
require '../models/functions.php';

var_dump($_POST);

if ((isset($_POST['title']) && !empty($_POST['title'])) &&
    (isset($_POST['description']) && !empty($_POST['description'])) &&
    (isset($_POST['rue']) && !empty($_POST['rue'])) &&
    (isset($_POST['cp']) && !empty($_POST['cp'])) &&
    (isset($_POST['ville']) && !empty($_POST['ville'])) &&
    (isset($_POST['nb_bedroom']) && $_POST['nb_bedroom'] != null) &&
    (isset($_POST['nb_bathroom']) && $_POST['nb_bathroom'] != null) &&
    (isset($_POST['Surface']) && !empty($_POST['Surface'])) &&
    (isset($_POST['type_product']) && !empty($_POST['type_product'])) &&
    (isset($_POST['price']) && !empty($_POST['price'])) &&
    (isset($_POST['category']) && !empty($_POST['category']))
) {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $rue = htmlspecialchars($_POST['rue']);
    $cp = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars($_POST['ville']);
    $nb_bedroom = htmlspecialchars($_POST['nb_bedroom']);
    $nb_bathroom = htmlspecialchars($_POST['nb_bathroom']);
    $surface = htmlspecialchars($_POST['Surface']);
    $type_product = htmlspecialchars($_POST['type_product']);
    $price = htmlspecialchars($_POST['price']);
    $category = htmlspecialchars($_POST['category']);
    $category = (int)$category;
    $table = "product";

    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        updateProd($bdd, $table, $title, $description, $rue, $cp, $ville, $nb_bedroom, $nb_bathroom, $surface, $type_product, $price, $category, $id);
    } else {
        $infos = pathinfo($_FILES['img']['name']);
        $ext_up = strtolower($infos['extension']);
        if ($ext_up != 'jpg' && $ext_up != 'jpeg' && $ext_up != 'png' && $ext_up != 'bmp' && $ext_up != 'gif') {
            $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le fichier selectionné n\'est pas une image.</div>';
            header('Location: ../public/admin.php?page=8');
        } else {
            $imgDir = '../public/assets/upload/';
            $filename = 'prod-' . time();
            $img = $imgDir . $filename . '.' . $ext_up;
            $tmp_file = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_file, $img);
            $img = $filename . '.' . $ext_up;
            addProd($bdd, $table, $title, $description, $rue, $cp, $ville, $nb_bedroom, $nb_bathroom, $surface, $type_product, $price, $category, $img);
        }
    }
    isset($id) ? $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été modifié</div>' : $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été ajouté</div>';
    header('Location: ../public/admin.php?page=4');
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    header('Location: ../public/admin.php?page=4');
}
