<?php

include('bdd.php');

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = strip_tags($_POST['id']);
    $sql = "DELETE FROM admin WHERE id=:id;";
    $query = $bdd->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $_SESSION['error'] = '<div class="alert alert-success text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le collaborateur a bien été supprimé</div>';
} else {
    $_SESSION['error'] = '<div class="alert alert-danger text-center" role="alert"><i class="fa-solid fa-check me-3"></i>Le collaborateur n\'a pas pu être supprimé</div>';
}

header('Location: ../admin.php?page=5');
