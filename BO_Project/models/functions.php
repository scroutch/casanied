<?php

function countFromCat($bdd, $table)
{
    $queryCount = "SELECT COUNT(*) FROM $table";
    $reqCount = $bdd->prepare($queryCount);
    $reqCount->execute();
    $data = $reqCount->fetch();
    return $data;
}

function countProd($bdd, $table, $id, $i)
{
    $queryCount = "SELECT COUNT(*) FROM $table WHERE $id=$i";
    $reqCount = $bdd->prepare($queryCount);
    $reqCount->execute();
    $dataCount = $reqCount->fetch();
    return $dataCount;
}

function cat($bdd, $table, $id, $i)
{
    $query = "SELECT * FROM $table WHERE $id=$i";
    $req = $bdd->prepare($query);
    $req->execute();
    $res = $req->fetch();
    return $res;
}

function listMessage($bdd, $table)
{
    $queryContact = "SELECT * FROM $table";
    $reqContact = $bdd->prepare($queryContact);
    $reqContact->execute();
    $dataContact = $reqContact->fetchAll();
    return $dataContact;
}
