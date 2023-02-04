<?php

require '../models/bdd.php';
require '../models/functions.php';

if (
    (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) &&
    (isset($_POST['name']) && !empty($_POST['name'])) &&
    (isset($_POST['firstName']) && !empty($_POST['firstName'])) &&
    (isset($_POST['tel']) && !empty($_POST['tel'])) &&
    (isset($_POST['mail']) && !empty($_POST['mail'])) &&
    (isset($_POST['message']) && !empty($_POST['message']))
) {
    // $secretKey = '6LdOR78iAAAAANzrXjIRZapF6g54jv3MlH2x0DQx';
    // $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LdOR78iAAAAANzrXjIRZapF6g54jv3MlH2x0DQx&response=$response";
    $file = file_get_contents($url);
    $name = htmlspecialchars($_POST['name']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $tel = htmlspecialchars($_POST['tel']);
    $mail = htmlspecialchars($_POST['mail']);
    $message = htmlspecialchars($_POST['message']);
    // $message = str_replace("\n.", "\n..", $message);
    // $objet = "message reçu de " . $firstName . " " . $name;

    contact($bdd, $name, $firstName, $tel, $mail, $message);
    // mail("cecile.devweb@gmail.com", $objet, $message);


    $_SESSION['errorMess'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre message a bien été envoyé.</div>';
    header('Location: ../public/index.php?page=4');
} else {
    $_SESSION['errorMess'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-triangle-exclamation me-3"></i>Votre message n\'a pas pu être envoyé.</div>';
    header('Location: ../public/index.php?page=4');
}
