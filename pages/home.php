<?php
include('onglet.php');
// var_dump($_POST);
if ((isset($_POST['ville']) && $_POST['ville'] != null) &&
    (isset($_POST['type_product']) && $_POST['type_product'] != null) &&
    (isset($_POST['nb_bedroom']) && $_POST['nb_bedroom'] != null)
) {
    $category = $_GET['category'];
    $ville = ucfirst($_POST['ville']);
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

    if ((isset($_POST['price']) && $_POST['price'] != null) &&
        (isset($_POST['surface']) && $_POST['surface'] != null)
    ) {
        $price = $_POST['price'];
        $surface = $_POST['surface'];

        $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND
        (:price BETWEEN price - 10000 AND price + 10000) AND (:surface BETWEEN surface - 10 AND surface + 10) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

        $req = $bdd->prepare($query);
        $req->bindValue(':price', $price, PDO::PARAM_STR);
        $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    } else if ((isset($_POST['price'])) && $_POST['price'] != null) {
        $price = $_POST['price'];
        $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND
        (:price BETWEEN price - 10000 AND price + 10000) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

        $req = $bdd->prepare($query);
        $req->bindValue(':price', $price, PDO::PARAM_STR);
    } else if ((isset($_POST['surface'])) && $_POST['surface']) {
        $surface = $_POST['surface'];

        $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND (:surface BETWEEN surface - 10 AND surface + 10) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

        $req = $bdd->prepare($query);
        $req->bindValue(':surface', $surface, PDO::PARAM_STR);
    } else {
        $query = 'SELECT * FROM product WHERE category_id = :category AND ville = :ville AND
        (type_product = :maison OR type_product = :appartement OR type_product = :terrain OR type_product = :immeuble) AND (:nb_bedroom BETWEEN nb_bedroom - 0 AND nb_bedroom + 1)';

        $req = $bdd->prepare($query);
    }

    $req->bindValue(':ville', $ville, PDO::PARAM_STR);
    $req->bindValue(':nb_bedroom', $nb_bedroom, PDO::PARAM_STR);
    $req->bindValue(':maison', $maison, PDO::PARAM_STR);
    $req->bindValue(':appartement', $appartement, PDO::PARAM_STR);
    $req->bindValue(':terrain', $terrain, PDO::PARAM_STR);
    $req->bindValue(':immeuble', $immeuble, PDO::PARAM_STR);
    $req->bindValue(':category', $category, PDO::PARAM_INT);
    $req->execute();



    // var_dump($req);

?>
    <h2>Résultat de votre recherche</h2>

    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php
        while ($data = $req->fetch()) {
            // var_dump($data);
        ?>
            <a href="#">
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
            </a>
        <?php
        }
        ?>
    </div>

<?php
} else {
    $query = 'SELECT * FROM product';
    $query = $bdd->prepare($query);
    $query->execute();
?>
    <h2>Nos dernières offres</h2>
    <div class="container-fluid d-flex justify-content-evenly flex-wrap">
        <?php
        while ($data = $query->fetch()) {
        ?>
            <div class="card m-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $data['id'] ?>"><img class="card-img-top" src="./BO_Project/assets/upload/<?php echo $data['img'] ?>" alt="Card image cap"></a>
                <div class="card-body d-flex flex-column justify-content-around">
                    <h5 class="card-title d-flex justify-content-between"><?php echo $data['title'] ?><span><?php echo $data['price'] ?> €</span></h5>
                    <p class="card-text d-flex justify-content-center"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $data['rue'] ?>, <?php echo $data['ville'] ?></span></p>
                    <p class="card-text d-flex justify-content-around">
                        <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $data['nb_bedroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $data['nb_bathroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $data['surface'] ?> m²</span></span>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="pages/ficheProduit.php">En savoir plus</a>
                    <a href="index.php?page=5"><i class="fa-regular fa-envelope p-2"></i></a>
                    <!-- <i class="fa-regular fa-heart p-2"></i> -->
                </div>
            </div>
            <div class="modal" tabindex="-1" id="modal<?php echo $data['id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-between">
                            <h5 class="modal-title"><?php echo $data['title'] ?></h5>
                            <span><?php echo $data['price'] ?> €
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </span>
                        </div>
                        <div class="modal-body">
                            <img class="card-img-top" src="./BO_Project/assets/upload/<?php echo $data['img'] ?>" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-around">
                                <p class="card-text d-flex justify-content-center p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="card-text d-flex justify-content-center p-3"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $data['rue'] ?>, <?php echo $data['ville'] ?></span></p>
                                <p class="card-text d-flex justify-content-around">
                                    <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $data['nb_bedroom'] ?></span></span>
                                    <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $data['nb_bathroom'] ?></span></span>
                                    <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $data['surface'] ?> m²</span></span>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
<?php
}
?>