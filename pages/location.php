<?php
include('onglet.php');

$queryVentes = 'SELECT * FROM product WHERE category_id = 1';
$req2 = $bdd->prepare($queryVentes);
// $req2->bindValue(':category', $category, PDO::PARAM_INT);
$req2->execute();
// var_dump($req2);

?>
<h2>Nos dernières locations</h2>
<div class="container-fluid d-flex justify-content-evenly flex-wrap">
    <?php

    while ($data = $req2->fetch()) {
    ?>
        <div class="card m-2">
            <img class="card-img-top" src="./BO_Project/assets/upload/<?php echo $data['img'] ?>" alt="Card image cap">
            <div class="card-body d-flex flex-column justify-content-around">
                <h5 class="card-title d-flex justify-content-between"><?php echo $data['title'] ?><span><?php echo $data['price'] ?> €</span></h5>
                <p class="card-text d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $data['ville'] ?></span></p>
                <p class="card-text d-flex justify-content-around">
                    <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $data['nb_bedroom'] ?></span></span>
                    <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $data['nb_bathroom'] ?></span></span>
                    <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $data['surface'] ?> m²</span></span>
                </p>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a href="index.php?page=5"><i class="fa-regular fa-envelope p-2"></i></a>
                <!-- <i class="fa-regular fa-heart p-2"></i> -->
            </div>
        </div>
    <?php
    }
    ?>
</div>