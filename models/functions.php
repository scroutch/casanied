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

function contact($bdd, $name, $firstName, $tel, $mail, $message)
{
    $query = 'INSERT INTO contact (name, firstName, tel, mail, message) VALUES ( :name, :firstName, :tel, :mail, :message)';
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $req->bindValue(':tel', $tel, PDO::PARAM_STR);
    $req->bindValue(':mail', $mail, PDO::PARAM_STR);
    $req->bindValue(':message', $message, PDO::PARAM_STR);
    $req->execute();
}

function countProductByCategory($bdd, $category)
{
    $query = 'SELECT COUNT(*) FROM product WHERE category_id=:category_id';
    $req = $bdd->prepare($query);
    $req->bindValue(':category_id', $category, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch();
    return $data;
}
