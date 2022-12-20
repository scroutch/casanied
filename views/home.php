<?php

require '../models/bdd.php';
require '../controlers/homeControler.php';

include('onglet.php');

?>


<?php
if (isset($dataSearch) && $dataSearch != NULL) {
?>
    <h2>Résultat de votre recherche</h2>
    <div class="row">
        <?php
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
    </div>

    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php
        foreach ($dataSearch as $result) {
        ?>
            <div class="card m-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $result['id'] ?>"><img class="card-img-top" src="../BO_Project/assets/upload/<?php echo $result['img'] ?>" alt="Card image cap"></a>
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title d-flex justify-content-between"><?php echo $result['title'] ?><span><?php echo $result['price'] ?> €</span></h5>
                    <p class="card-text d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $result['rue'] ?>, <?php echo $result['ville'] ?></span></p>
                    <p class="card-text d-flex justify-content-around">
                        <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $result['nb_bedroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $result['nb_bathroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $result['surface'] ?> m²</span></span>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="pages/ficheProduit.php">En savoir plus</a>
                    <a href="index.php?page=5"><i class="fa-regular fa-envelope p-2"></i></a>
                    <!-- <i class="fa-regular fa-heart p-2"></i> -->
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
} else {
?>
    <h2>Nos dernières offres</h2>
    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php
        foreach ($dataProduct as $item) {
        ?>
            <div class="card m-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $item['id'] ?>"><img class="card-img-top" src="../BO_Project/assets/upload/<?php echo $item['img'] ?>" alt="Card image cap"></a>
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title d-flex justify-content-between"><?php echo $item['title'] ?><span><?php echo $item['price'] ?> €</span></h5>
                    <p class="card-text d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $item['rue'] ?>, <?php echo $item['ville'] ?></span></p>
                    <p class="card-text d-flex justify-content-around">
                        <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $item['nb_bedroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $item['nb_bathroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $item['surface'] ?> m²</span></span>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="pages/ficheProduit.php">En savoir plus</a>
                    <a href="index.php?page=5"><i class="fa-regular fa-envelope p-2"></i></a>
                    <!-- <i class="fa-regular fa-heart p-2"></i> -->
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
?>