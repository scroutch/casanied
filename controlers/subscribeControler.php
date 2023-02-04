<?php

require '../models/bdd.php';
require '../models/functions.php';

if ((isset($_POST['name']) && !empty($_POST['name'])) &&
    (isset($_POST['firstName']) && !empty($_POST['firstName'])) &&
    (isset($_POST['email']) && !empty($_POST['email'])) &&
    (isset($_POST['password']) && !empty($_POST['password'])) &&
    (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']))
) {
    if ($_POST['password'] == $_POST['confirmPassword']) {
        $name = htmlspecialchars($_POST['name']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $email = htmlspecialchars($_POST['email']);
        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $role = 2;
        $table = "membre";

        $data = checkEmail($bdd, $table, $email);

        if ($data) {
            $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Vous possédez déjà un compte.</div>';
            header('Location: ../public/index.php?page=5');
        } else {
            subscribe($bdd, $table, $name, $firstName, $email, $hash, $role);
            $_SESSION['errorMess'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Bienvenue</div>';
            header('Location: ../public/index.php?page=5');
        }
    } else {
        $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Les mots de passe ne correspondent pas.</div>';
        header('Location: ../public/index.php?page=6');
    }
}
