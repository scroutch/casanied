<?php

require '../models/bdd.php';
require '../models/functions.php';

if (
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $table = "membre";
    $result = connectMember($bdd, $table, $email);

    if (!empty($result)) {
        if (password_verify($password, $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['role'] = $result['role_id'];
            $_SESSION['firstName'] = $result['firstName'];

            if (isset($_SESSION['id'])) {
                if ($_SESSION['role'] == 1) {
                    header('Location: ../BO_Project/public/admin.php?page=1');
                } else {
                    header('Location: ../public/index.php?page=1');
                }
            }
        } else {
            $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre mot de passe est mauvais.</div>';
            header('Location= ../public/index.php?page=5');
        }
    } else {
        $_SESSION['errorMess'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre email est mauvais.</div>';
        header('Location= ../public/index.php?page=5');
    }
}
