<?php

//Count number of elements that contains a table

function countFromCat($bdd, $table)
{
    $queryCount = "SELECT COUNT(*) FROM $table";
    $reqCount = $bdd->prepare($queryCount);
    $reqCount->execute();
    $data = $reqCount->fetch();
    return $data;
}

//Count number of elements that contains a spécific table (by id)

function countProd($bdd, $table, $id, $i)
{
    $queryCount = "SELECT COUNT(*) FROM $table WHERE $id=$i";
    $reqCount = $bdd->prepare($queryCount);
    $reqCount->execute();
    $dataCount = $reqCount->fetch();
    return $dataCount;
}

//Select all element from a specific table (by id)

function cat($bdd, $table, $id, $i)
{
    $query = "SELECT * FROM $table WHERE $id=$i";
    $req = $bdd->prepare($query);
    $req->execute();
    $res = $req->fetch();
    return $res;
}

//Select all elements from a table

function listMessage($bdd, $table)
{
    $queryContact = "SELECT * FROM $table";
    $reqContact = $bdd->prepare($queryContact);
    $reqContact->execute();
    $dataContact = $reqContact->fetchAll();
    return $dataContact;
}

//Delete elements from a table by id

function delete($bdd, $table, $id)
{
    $sql = "DELETE FROM $table WHERE id=:id";
    $query = $bdd->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}

//list elements by conditions

function listElement($bdd, $table, $champ)
{
    $query = "SELECT * FROM $table ORDER BY $champ DESC";
    $req = $bdd->prepare($query);
    $req->execute();
    $data = $req->fetchAll();
    return $data;
}

//update product in BDD

function updateProd($bdd, $table, $title, $description, $rue, $cp, $ville, $nb_bedroom, $nb_bathroom, $surface, $type_product, $price, $category, $id)
{
    $query = "UPDATE $table SET title=:title, description=:description, rue=:rue, code_postal=:code_postal, ville=:ville, nb_bedroom=:nb_bedroom, nb_bathroom=:nb_bathroom, surface=:surface, type_product=:type_product, price=:price, category_id=:category WHERE id=:id";
    $req = $bdd->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':title', $title, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':rue', $rue, PDO::PARAM_STR);
    $req->bindValue(':code_postal', $cp, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':nb_bathroom', $nb_bathroom, PDO::PARAM_STR);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':type_product', $type_product, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
}

//add product in BDD

function addProd($bdd, $table, $title, $description, $rue, $cp, $ville, $nb_bedroom, $nb_bathroom, $surface, $type_product, $price, $category, $img)
{
    $query = "INSERT INTO $table (title, description, rue, code_postal, ville, nb_bedroom, nb_bathroom, surface, type_product, price, category_id, img) VALUES (:title, :description,:rue, :code_postal, :ville, :nb_bedroom, :nb_bathroom, :surface, :type_product, :price, :category, :img)";
    $req = $bdd->prepare($query);
    $req->bindValue(':img', $img, PDO::PARAM_STR);
    $req->bindValue(':title', $title, PDO::PARAM_STR);
    $req->bindValue(':description', $description, PDO::PARAM_STR);
    $req->bindValue(':rue', $rue, PDO::PARAM_STR);
    $req->bindValue(':code_postal', $cp, PDO::PARAM_STR);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':nb_bathroom', $nb_bathroom, PDO::PARAM_STR);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':type_product', $type_product, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();
}

//select one product by its id

function selectProd($bdd, $table, $id)
{
    $query = "SELECT * FROM $table WHERE id=:id";
    $req = $bdd->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch();
    return $data;
}

//Add admin in BDD

function addAdmin($bdd, $table, $name, $firstName, $email, $password)
{
    $query = "INSERT INTO $table (name, firstName, email, password) VALUES (:name, :firstName, :email, :password)";
    $req = $bdd->prepare($query);
    $req->bindValue(':name', $name, PDO::PARAM_STR);
    $req->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $req->bindValue(':email', $email, PDO::PARAM_STR);
    $req->bindValue(':password', $password, PDO::PARAM_STR);
    $req->execute();
}

//update picture for product

function updatePic($bdd, $table, $picture, $id)
{
    $query = "UPDATE $table SET img=:img WHERE id=:id";
    $req = $bdd->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->bindValue(':img', $picture, PDO::PARAM_STR);
    $req->execute();
}

//select one picture by its id

function selectPic($bdd, $element, $table, $id)
{
    $query = "SELECT $element FROM $table WHERE id=:id";
    $req = $bdd->prepare($query);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $data = $req->fetch();
    return $data;
}
