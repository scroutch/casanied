<?php

require '../models/bdd.php';
require '../models/functions.php';

// if ((isset($_POST['name']) && !empty($_POST['name'])) &&
//     (isset($_POST['firstName']) && !empty($_POST['firstName'])) &&
//     (isset($_POST['email']) && !empty($_POST['email'])) &&
//     (isset($_POST['password']) && !empty($_POST['password']))
// ) {

//     $name = htmlspecialchars($_POST['name']);
//     $firstName = htmlspecialchars($_POST['firstName']);
//     $email = htmlspecialchars($_POST['email']);
//     $table = "admin";

//     if ($_POST['password'] == $_POST['confirmPassword']) {
//         $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
//     } else {
//         $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Les mots de passe ne correspondent pas</div>';
//         header('Location: ../public/admin.php?page=6');
//     }

//     addAdmin($bdd, $table, $name, $firstName, $email, $password);

//     $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le collaborateur a bien été ajouté</div>';
//     header('Location: ../public/admin.php?page=5');
// } else {
//     $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Une erreur est survenue. Veuillez recommencer !</div>';
//     header('Location: ../public/admin.php?page=6');
// }

if (isset($_POST['submit'])) {
    if ((isset($_POST['name']) && !empty($_POST['name'])) &&
        (isset($_POST['firstName']) && !empty($_POST['firstName'])) &&
        (isset($_POST['email']) && !empty($_POST['email'])) &&
        (isset($_POST['password']) && !empty($_POST['password'])) &&
        (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword']))
    ) {
        $name = htmlspecialchars($_POST['name']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $email = htmlspecialchars($_POST['email']);
        $role = 1;
        $table = "membre";
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $confirmPass = $_POST['confirmPassword'];

        if (preg_match('/^[a-zA-Zàâéèëêïîôùüûç -]{2,60}$/', $name)) {
            if (preg_match('/^[a-zA-Zàâéèëêïîôùüûç -]{2,60}$/', $firstName)) {
                if (preg_match('/^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$/', $email)) {
                    if ((strlen($password) >= 8) && (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password))) {
                        if ($password == $confirmPass) {
                            $data = checkEmail($bdd, $table, $email);
                            if ($data) {
                                $_SESSION['errorMess'] = '<div class="alert alert-danger text-center mt-5" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Vous possédez déjà un compte.</div>';
                                header('Location: ../public/admin.php?page=5');
                            } else {
                                subscribe($bdd, $table, $name, $firstName, $email, $hash, $role);
                                $_SESSION['errorMess'] = '<div class="alert alert-success text-center mt-5" role="alert"></i>Bienvenue</div>';
                                header('Location: ../public/admin.php?page=5');
                            }
                        } else {
                            $_SESSION['error_confirPassword'] = '* Les mots de passe ne correspondent pas.';
                            header('Location: ../public/admin.php?page=6');
                        }
                    } else {
                        $_SESSION['error_password'] = '* Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un caractère spécial.';
                        header('Location: ../public/admin.php?page=6');
                    }
                } else {
                    $_SESSION['error_email'] = "*Format d'email incorrect";
                    header('Location: ../public/admin.php?page=6');
                }
            } else {
                $_SESSION['error_firstName'] = '*Format de prénom incorrect';
                header('Location: ../public/admin.php?page=6');
            }
        } else {
            $_SESSION['error_name'] = '*Format de nom incorrect';
            header('Location: ../public/admin.php?page=6');
        }
    } else {
        $_SESSION['error_empty'] = '* Tous les champs doivent être remplis.';
        header('Location: ../public/admin.php?page=6');
    }
}
