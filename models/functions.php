<?php

function product($bdd, $cat)
{
    $queryVentes = 'SELECT * FROM product WHERE category_id = :cat';
    $req = $bdd->prepare($queryVentes);
    $req->bindValue(':cat', $cat, PDO::PARAM_STR);
    $req->execute();
    $dataProd = $req->fetchAll();
    return $dataProd;
}
