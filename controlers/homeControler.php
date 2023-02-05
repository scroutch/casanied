<?php

require '../models/bdd.php';
require '../models/function_search.php';

if ((isset($_POST['ville']) && $_POST['ville'] != null) &&
    (isset($_POST['type_product']) && $_POST['type_product'] != null) &&
    (isset($_POST['nb_bedroom']) && $_POST['nb_bedroom'] != null)
) {
    $category = $_GET['category'];
    $ville = htmlspecialchars($_POST['ville']);
    $ville = ucfirst($ville);
    $nb_bedroom = htmlspecialchars($_POST['nb_bedroom']);

    if (in_array("maison", $_POST['type_product'])) {
        $maison = "maison";
    } else {
        $maison = "";
    }

    if (in_array("appartement", $_POST['type_product'])) {
        $appartement = "appartement";
    } else {
        $appartement = "";
    }

    if (in_array("terrain", $_POST['type_product'])) {
        $terrain = "terrain";
    } else {
        $terrain = "";
    }

    if (in_array("immeuble", $_POST['type_product'])) {
        $immeuble = "immeuble";
    } else {
        $immeuble = "";
    }

    if ((isset($_POST['price']) && $_POST['price'] != null) &&
        (isset($_POST['surface']) && $_POST['surface'] != null)
    ) {
        $price = htmlspecialchars($_POST['price']);
        $surface = htmlspecialchars($_POST['surface']);
        $dataSearch = searchByPriceSurface($bdd, $price, $surface, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category);
    } else if ((isset($_POST['price'])) && $_POST['price'] != null) {
        $price = htmlspecialchars($_POST['price']);
        $dataSearch = searchByPrice($bdd, $price, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category);
    } else if ((isset($_POST['surface'])) && $_POST['surface']) {
        $surface = htmlspecialchars($_POST['surface']);
        $dataSearch = searchBySurface($bdd, $surface, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category);
    } else {
        $dataSearch = search($bdd, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category);
    }
} else {
    $dataProduct = recupProduct($bdd);
}
