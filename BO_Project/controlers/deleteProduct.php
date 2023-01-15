<?php

require '../models/bdd.php';
require '../models/functions.php';

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $table = 'product';
    delete($bdd, $table, $id);
    $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit a bien été supprimé</div>';
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le produit n\'a pas pu être supprimé</div>';
}

header('Location: ../public/admin.php?page=4');
