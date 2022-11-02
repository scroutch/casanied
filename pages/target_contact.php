<?php
include('bdd.php');

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
    // echo $file;
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];
    var_dump($_POST);
    $query = 'INSERT INTO contact (name, firstName, tel, mail, message) VALUES ( :name, :firstName, :tel, :mail, :message)';
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $req->bindValue(':tel', $tel, PDO::PARAM_STR);
    $req->bindValue(':mail', $mail, PDO::PARAM_STR);
    $req->bindValue(':message', $message, PDO::PARAM_STR);
    $req->execute();
}
