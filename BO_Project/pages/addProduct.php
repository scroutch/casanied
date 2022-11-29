<div class="row">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="card-body">
    <h6 class="card-title"><?php echo isset($_GET['id']) ? "Modifier un bien" : "Ajouter un bien" ?></h6>
    <?php
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM product WHERE id=:id';
        $id = $_GET['id'];
        $req = $bdd->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();

        while ($data = $req->fetch()) {



    ?>
            <form class="forms-sample" method="POST" action="./pages/target_product.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Titre" value="<?php echo $data['title'] ?>">
                </div>
                <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" class="form-control" id="img" name="img" autocomplete="off" placeholder="Titre">
                </div>
                <div class="form-group">
                    <label for="rue">Rue</label>
                    <input type="text" class="form-control" id="rue" name="rue" autocomplete="off" placeholder="<?php echo $data['rue'] ?>">
                </div>
                <div class="form-group">
                    <label for="cp">Code postale</label>
                    <input type="text" class="form-control" id="cp" name="cp" placeholder="<?php echo $data['code_postal'] ?>">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" placeholder="<?php echo $data['ville'] ?>">
                </div>
                <div class="form-group">
                    <label for="nb_bedroom">Nombre de chambre</label>
                    <input type="number" class="form-control" id="nb_bedroom" name="nb_bedroom" autocomplete="off" value="<?php echo $data['nb_bedroom'] ?>">
                </div>
                <div class="form-group">
                    <label for="nb_bathroom">Nombre de salle de bain</label>
                    <input type="number" class="form-control" id="nb_bathroom" name="nb_bathroom" autocomplete="off" value="<?php echo $data['nb_bathroom'] ?>">
                </div>
                <div class="form-group">
                    <label for="Surface">Superficie</label>
                    <input type="text" class="form-control" id="Surface" name="Surface" autocomplete="off" placeholder="<?php echo $data['surface'] ?>">
                </div>
                <div class="form-group">
                    <label for="type_product">Type de bien</label>
                    <select class="form-select" aria-label="Default select example" name="type_product" id="type_product">
                        <option selected value="Maison">Maison</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Terrain">Terrain</option>
                        <option value="Immeuble">Immeuble</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="<?php echo $data['price'] ?>">
                </div>
                <div class="form-group">
                    <label for="category">Catégories</label>
                    <select class="form-select" aria-label="Default select example" name="category" id="category">
                        <option selected value="1">locations</option>
                        <option value="2">ventes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                <button class="btn btn-light">Annuler</button>
            </form>
</div>
<?php
        }
    } else {
?>
<form class="forms-sample" method="POST" action="./pages/target_product.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="titre" ?>">
    </div>
    <div class="form-group">
        <label for="img">Image</label>
        <input type="file" class="form-control" id="img" name="img" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="rue">Rue</label>
        <input type="text" class="form-control" id="rue" name="rue" autocomplete="off" placeholder="Rue">
    </div>
    <div class="form-group">
        <label for="cp">Code postale</label>
        <input type="text" class="form-control" id="cp" name="cp" placeholder="code postal">
    </div>
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" placeholder="Ville">
    </div>
    <div class="form-group">
        <label for="nb_bedroom">Nombre de chambre</label>
        <input type="number" class="form-control" id="nb_bedroom" name="nb_bedroom" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="nb_bathroom">Nombre de salle de bain</label>
        <input type="number" class="form-control" id="nb_bathroom" name="nb_bathroom" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="Surface">Superficie</label>
        <input type="text" class="form-control" id="Surface" name="Surface" autocomplete="off" placeholder="Superficie">
    </div>
    <div class="form-group">
        <label for="type_product">Type de bien</label>
        <select class="form-select" aria-label="Default select example" name="type_product" id="type_product">
            <option selected value="Maison">Maison</option>
            <option value="Appartement">Appartement</option>
            <option value="Terrain">Terrain</option>
            <option value="Immeuble">Immeuble</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="prix">
    </div>
    <div class="form-group">
        <label for="category">Catégories</label>
        <select class="form-select" aria-label="Default select example" name="category" id="category">
            <option selected value="1">locations</option>
            <option value="2">ventes</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
    <button class="btn btn-light">Annuler</button>
</form>
</div>
<?php
    }
