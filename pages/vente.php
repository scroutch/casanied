<?php

// var_dump($_POST);
if ($_POST) {
    $ville = ucfirst($_POST['ville']);
    $price = $_POST['price'];
    $surface = $_POST['surface'];
    $nb_bedroom = $_POST['nb_bedroom'];
    if (in_array("maison", $_POST['type_product'])) {
        $maison = "maison";
    } else {
        $maison = "";
    }

    if (in_array("appartement", $_POST['type_product'])) {
        $appartement = "appartement";
    } else {
        $appartement = "";
    }

    if (in_array("terrain", $_POST['type_product'])) {
        $terrain = "terrain";
    } else {
        $terrain = "";
    }

    if (in_array("immeuble", $_POST['type_product'])) {
        $immeuble = "immeuble";
    } else {
        $immeuble = "";
    }
    // var_dump($_POST['type_product']);
    // var_dump($maison, $appartement, $terrain, $immeuble);

    $query = 'SELECT * FROM product WHERE ville = :ville AND
    (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) OR
    (:price BETWEEN price - 10000 AND price + 10000) OR (:surface BETWEEN surface - 10 AND surface + 10) OR nb_bedroom = :nb_bedroom
    AND category_id = 2';
    $req = $bdd->prepare($query);
    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':price', $price, PDO::PARAM_STR);
    $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->execute();

?>
    <h2>Résultat de votre recherche</h2>
    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php
        while ($data = $req->fetch()) {
            // var_dump($data);
        ?>
            <div class="card m-2">
                <img class="card-img-top" src="<?php echo $data['img'] ?>" alt="Card image cap">
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
                    <i class="fa-regular fa-envelope p-2"></i>
                    <i class="fa-regular fa-heart p-2"></i>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
} else {
    $queryVentes = 'SELECT * FROM product WHERE category_id = 2';
    $req2 = $bdd->prepare($queryVentes);
    $req2->execute();
?>
    <h2>Nos dernières ventes</h2>
    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php

        while ($data = $req2->fetch()) {
        ?>
            <div class="card m-2">
                <img class="card-img-top" src="<?php echo $data['img'] ?>" alt="Card image cap">
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
                    <i class="fa-regular fa-envelope p-2"></i>
                    <i class="fa-regular fa-heart p-2"></i>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
