<?php

include('onglet.php');

$categorie = $_GET['category'];

if ($categorie == 1) {
?>
    <h2>Nos dernières locations</h2>
<?php
    include_once('products.php');
} else if ($categorie == 2) {
?>
    <h2>Nos dernières ventes</h2>
<?php
    include_once('products.php');
} else {
    echo 'Une erreur est survenue. Veuillez réessayer ultérieurement.';
    header('Location: index.php?page=1');
}

?>