<?php

include('bdd.php');

// var_dump($_FILES);

// if (isset($_FILES['img']['tmp_name'])) {
//     $retour = copy($_FILES['img']['tmp_name'], $_FILES['img']['name']);
//     if ($retour) {
//         echo '<p>La photo a bien été envoyée.</p>';
//         echo '<img src="' . $_FILES['img']['name'] . '">';
//     }
// }

// var_dump($_POST);
// var_dump($_FILES);
// $infos = pathinfo($_FILES['img']['name']);
// $ext_up = strtolower($infos['extension']);
// $imgDir = '../upload/';
// $filename = 'prod-' . time();
// $picture = $imgDir . $filename . '.' . $ext_up;
// $tmp_file = $_FILES['img']['tmp_name'];
// move_uploaded_file($tmp_file, $picture);
// var_dump($tmp_file);
// var_dump($picture);

// if ((isset($_POST['title']) && !empty($_POST['title'])) &&
//     (isset($_POST['rue']) && !empty($_POST['rue'])) &&
//     (isset($_POST['cp']) && !empty($_POST['cp'])) &&
//     (isset($_POST['ville']) && !empty($_POST['ville'])) &&
//     (isset($_POST['nb_bedroom']) && !empty($_POST['nb_bedroom'])) &&
//     (isset($_POST['nb_bathroom']) && !empty($_POST['nb_bathroom'])) &&
//     (isset($_POST['surface']) && !empty($_POST['surface'])) &&
//     (isset($_POST['type_product']) && !empty($_POST['type_product'])) &&
//     (isset($_POST['price']) && !empty($_POST['price'])) &&
//     (isset($_POST['category']) && !empty($_POST['category']))
// ) {

var_dump($_POST);


$title = htmlspecialchars($_POST['title']);
$rue = htmlspecialchars($_POST['rue']);
$cp = htmlspecialchars($_POST['cp']);
$ville = htmlspecialchars($_POST['ville']);
$nb_bedroom = htmlspecialchars($_POST['nb_bedroom']);
$nb_bathroom = htmlspecialchars($_POST['nb_bathroom']);
$surface = htmlspecialchars($_POST['Surface']);
$type_product = htmlspecialchars($_POST['type_product']);
$price = htmlspecialchars($_POST['price']);
$category = htmlspecialchars($_POST['category']);
$infos = pathinfo($_FILES['img']['name']);
$ext_up = strtolower($infos['extension']);
if ($category == "location") {
    return 1;
} else {
    return 2;
}

if ($ext_up != 'jpg' && $ext_up != 'jpeg' && $ext_up != 'png' && $ext_up != 'bmp' && $ext_up != 'gif') {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le fichier selectionné n\'est pas une image.</div>';
} else {
    $imgDir = '../upload/';
    $filename = 'prod-' . time();
    $picture = $imgDir . $filename . '.' . $ext_up;
    var_dump($picture);
    $tmp_file = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp_file, $picture);
    $query = 'INSERT INTO product (title, img, rue, code_postal, ville, nb_bedroom, nb_bathroom, surface, type_product, price, category_id) VALUES (:title, :img, :rue, :code_postal, :ville, :nb_bedroom, :nb_bathroom, :surface, :type_product, :price, :category)';
    $req = $bdd->prepare($query);
    $req->bindValue(':title', $title, PDO::PARAM_STR);
    $req->bindValue(':img', $picture, PDO::PARAM_STR);
    $req->bindValue(':rue', $rue, PDO::PARAM_STR);
    $req->bindValue(':code_postal', $cp, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_INT);
    $req->bindValue(':nb_bathroom', $nb_bathroom, PDO::PARAM_INT);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':type_product', $type_product, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();

    //     $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été ajouté</div>';
    //     header('Location: ../admin.php?page=4');
    // }
    // } else {
    //     $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    //     header('Location: ../admin.php?page=4');
}
// }
