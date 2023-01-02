<?php

include('bdd.php');

var_dump($_POST);

if ((isset($_POST['name']) && !empty($_POST['name'])) &&
    (isset($_POST['firstName']) && !empty($_POST['firstName'])) &&
    (isset($_POST['email']) && !empty($_POST['email'])) &&
    (isset($_POST['password']) && !empty($_POST['password']))
) {

    $name = htmlspecialchars($_POST['name']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $email = htmlspecialchars($_POST['email']);

    if ($_POST['password'] == $_POST['confirmPassword']) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
        $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Les mots de passe ne correspondent pas</div>';
        header('Location: ../admin.php?page=6');
    }

    $query = 'INSERT INTO admin (name, firstName, email, password) VALUES (:name, :firstName, :email, :password)';
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
    header('Location: ../admin.php?page=6');
}
