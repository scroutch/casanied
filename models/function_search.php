<?php

//fonction pour récupèrer les resultats de la recherche prix et surface inclus

function searchByPriceSurface($bdd, $price, $surface, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category)
{
    $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND
        (:price BETWEEN price - 10000 AND price + 10000) AND (:surface BETWEEN surface - 10 AND surface + 10) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

    $req = $bdd->prepare($query);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
    $dataSearch = $req->fetchAll();
    return $dataSearch;
}

//fonction pour récupèrer les resultats de la recherche prix inclus

function searchByPrice($bdd, $price, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category)
{
    $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND
        (:price BETWEEN price - 10000 AND price + 10000) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

    $req = $bdd->prepare($query);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
    $dataSearch = $req->fetchAll();
    return $dataSearch;
}

//fonction pour récupèrer les resultats de la recherche surface inclus

function searchBySurface($bdd, $surface, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category)
{
    $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND (:surface BETWEEN surface - 10 AND surface + 10) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

    $req = $bdd->prepare($query);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
    $dataSearch = $req->fetchAll();
    return $dataSearch;
}

//fonction pour récupèrer les resultats de la recherche prix et surface non inclus

function search($bdd, $ville, $nb_bedroom, $maison, $appartement, $terrain, $immeuble, $category)
{
    $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
    (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

    $req = $bdd->prepare($query);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
    $dataSearch = $req->fetchAll();
    return $dataSearch;
}

//fonction pour récupérer tous les élèments ajoutés en BDD

function recupProduct($bdd)
{
    $query = 'SELECT * FROM product';
    $req = $bdd->prepare($query);
    $req->execute();
    $dataProduct = $req->fetchAll();
    return $dataProduct;
}
