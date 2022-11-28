<?php

include('bdd.php');

var_dump($_POST);

if ((isset($_POST['title']) && !empty($_POST['title'])) &&
    (isset($_POST['img']) && !empty($_POST['img'])) &&
    (isset($_POST['rue']) && !empty($_POST['rue'])) &&
    (isset($_POST['cp']) && !empty($_POST['cp'])) &&
    (isset($_POST['ville']) && !empty($_POST['ville'])) &&
    (isset($_POST['nb_bedroom']) && !empty($_POST['nb_bedroom'])) &&
    (isset($_POST['nb_bathroom']) && !empty($_POST['nb_bathroom'])) &&
    (isset($_POST['surface']) && !empty($_POST['surface'])) &&
    (isset($_POST['type_product']) && !empty($_POST['type_product'])) &&
    (isset($_POST['price']) && !empty($_POST['price'])) &&
    (isset($_POST['category']) && !empty($_POST['category'])) &&
) {
    if (isset($_FILES['img']['tmp_name'])) {
        $retour = copy($_FILES['img']['tmp_name'], $_FILES['img']['name']);
        if ($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_FILES['img']['name'] . '">';
        }
    }

    $title = htmlspecialchars($_POST['title']);
    $rue = htmlspecialchars($_POST['rue']);
    $cp = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars($_POST['ville']);
    $nb_bedroom = htmlspecialchars($_POST['nb_bedroom']);
    $nb_bathroom = htmlspecialchars($_POST['nb_bathroom']);
    $surface = htmlspecialchars($_POST['surface']);
    $type_product = htmlspecialchars($_POST['type_product']);
    $price = htmlspecialchars($_POST['price']);
    $category = htmlspecialchars($_POST['category']);

    $query = 'INSERT INTO product (name, firstName, email, password) VALUES (:name, :firstName, :email, :password)';
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->bindValue(':password', $password, PDO::PARAM_STR);
    $req->execute();

    $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le collaborateur a bien été ajouté</div>';
    header('Location: ../admin.php?page=5');
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
    header('Location: ../admin.php?page=5');
}
