<?php

// select all product by category

function product($bdd, $cat)
{
    $queryVentes = 'SELECT * FROM product WHERE category_id = :cat';
    $req = $bdd->prepare($queryVentes);
    $req->bindValue(':cat', $cat, PDO::PARAM_STR);
    $req->execute();
    $dataProd = $req->fetchAll();
    return $dataProd;
}

//add message in BDD

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

//count number of product by category

function countProductByCategory($bdd, $category)
{
    $query = 'SELECT COUNT(*) FROM product WHERE category_id=:category_id';
    $req = $bdd->prepare($query);
    $req->bindValue(':category_id', $category, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch();
    return $data;
}

//select all the elements members with this email

function connectMember($bdd, $table, $email)
{
    $query = "SELECT * FROM $table where email = :email";
    $req = $bdd->prepare($query);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->execute();
    $result = $req->fetch();
    return $result;
}

//function to subscribe on website

function subscribe($bdd, $table, $name, $firstName, $email, $hash, $role)
{
    $query = "insert into $table (name, firstName, email, password, role_id) values (:name, :firstName, :email, :password, :role_id)";
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->bindValue(':password', $hash, PDO::PARAM_STR);
    $req->bindValue(':role_id', $role, PDO::PARAM_INT);
    $req->execute();
}

//function to check if email doesn't exists in BDD

function checkEmail($bdd, $table, $email)
{
    $query = "SELECT email FROM $table WHERE email LIKE :email";
    $query = $bdd->prepare($query);
    $query->bindValue('email', $email, PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch();
    return $data;
}
