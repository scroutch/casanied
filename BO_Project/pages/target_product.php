<?php
include('bdd.php');
// var_dump($_POST);
if ((isset($_POST['title']) && !empty($_POST['title'])) &&
    (isset($_POST['description']) && !empty($_POST['description'])) &&
    (isset($_POST['rue']) && !empty($_POST['rue'])) &&
    (isset($_POST['cp']) && !empty($_POST['cp'])) &&
    (isset($_POST['ville']) && !empty($_POST['ville'])) &&
    (isset($_POST['nb_bedroom']) && !empty($_POST['nb_bedroom'])) &&
    (isset($_POST['nb_bathroom']) && !empty($_POST['nb_bathroom'])) &&
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

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = 'UPDATE product SET title=:title, description=:description, rue=:rue, code_postal=:code_postal, ville=:ville, nb_bedroom=:nb_bedroom, nb_bathroom=:nb_bathroom, surface=:surface, type_product=:type_product, price=:price, category_id=:category WHERE id=:id';
        $req = $bdd->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
    } else {
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
            $query = 'INSERT INTO product (title, description, rue, code_postal, ville, nb_bedroom, nb_bathroom, surface, type_product, price, category_id, img) VALUES (:title, :description,:rue, :code_postal, :ville, :nb_bedroom, :nb_bathroom, :surface, :type_product, :price, :category, :img)';
            $req = $bdd->prepare($query);
            $req->bindValue(':img', $picture, PDO::PARAM_STR);
        }
    }
    $req->bindValue(':title', $title, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':rue', $rue, PDO::PARAM_STR);
    $req->bindValue(':code_postal', $cp, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':nb_bathroom', $nb_bathroom, PDO::PARAM_STR);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':type_product', $type_product, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();

    isset($id) ? $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été modifié</div>' : $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été ajouté</div>';
    header('Location: admin.php?page=4');
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    header('Location: admin.php?page=4');
}
