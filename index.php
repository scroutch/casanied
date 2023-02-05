<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https";
else
    $url = "http";

// Ajoutez // à l'URL.
$url .= "://";

// Ajoutez l'hôte (nom de domaine, ip) à l'URL.
$url .= $_SERVER['HTTP_HOST'];

// Ajouter l'emplacement de la ressource demandée à l'URL
$url .= $_SERVER['REQUEST_URI'];

// Création de l'url vers laquelle renvoyer si order.eddygillet.fr
$targetUrl = $url . "public";

// rediriger vers l'URL
if ($url == "https://stage.ceciledev.fr/" || $url == "http://stage.ceciledev.fr/") {
    echo "<script> window.location='" . $targetUrl . "'</script>";
} else {
    echo "<script> window.location='" . $url . "'</script>";
}
