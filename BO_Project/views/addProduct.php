<?php

require '../models/bdd.php';
require '../models/functions.php';

?>
<div class="row">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="card-body">
    <h6 class="card-title"><?php echo isset($_POST['id']) ? "Modifier un bien" : "Ajouter un bien" ?></h6>
    <?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $table = "product";
        $data = selectProd($bdd, $table, $id);
    }
    ?>
    <form class="forms-sample" method="POST" action="../controlers/target_product.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Titre" value="<?php echo isset($id) ? $data['title'] : "" ?>" required>
        </div>
        <?php if (!isset($id)) { ?>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img" autocomplete="off" value="" required>
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="rue">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" autocomplete="off" placeholder="description" rows=" 5" cols="33" required><?php echo isset($id) ? $data['description'] : "" ?></textarea>
        </div>
        <div class=" form-group">
            <label for="rue">Rue</label>
            <input type="text" class="form-control" id="rue" name="rue" autocomplete="off" placeholder="Rue" value="<?php echo isset($id) ? $data['rue'] : "" ?>" required>
        </div>
        <div class="form-group">
            <label for="cp">Code postal</label>
            <input type="text" pattern="[0-9]{5}" class="form-control" id="cp" name="cp" placeholder="Code postal" value="<?php echo isset($id) ? $data['code_postal'] : "" ?>" required>
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" placeholder="Ville" value="<?php echo isset($id) ? $data['ville'] : "" ?>" required>
        </div>
        <div class="form-group">
            <label for="nb_bedroom">Nombre de chambre</label>
            <input type="number" pattern="[0-9]{1,2}" class="form-control" id="nb_bedroom" name="nb_bedroom" min="0" max="50" value="<?php echo isset($id) ? $data['nb_bedroom'] : "" ?>">

        </div>
        <div class="form-group">
            <label for="nb_bathroom">Nombre de salle de bain</label>
            <input type="number" pattern="[0-9]{1,2}" class="form-control" id="nb_bathroom" name="nb_bathroom" min="0" max="50" value="<?php echo isset($id) ? $data['nb_bathroom'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="Surface">Superficie</label>
            <input type="text" class="form-control" pattern="[0-9]{2,5}" id="Surface" name="Surface" autocomplete="off" placeholder="Superficie" value="<?php echo isset($id) ? $data['surface'] : "" ?>" required>
        </div>
        <div class="form-group">
            <label for="type_product">Type de bien</label>
            <select class="form-select" aria-label="Default select example" name="type_product" id="type_product" required>
                <option selected value="<?php echo isset($id) ? $data['type_product'] : "Choississez le type de bien" ?>"><?php echo isset($id) ? $data['type_product'] : "Choississez le type de bien" ?></option>
                <option value="Maison">Maison</option>
                <option value="Appartement">Appartement</option>
                <option value="Terrain">Terrain</option>
                <option value="Immeuble">Immeuble</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" pattern="[0-9]{1,10}" class="form-control" id="price" name="price" autocomplete="off" placeholder="Prix" value="<?php echo isset($id) ? $data['price'] : "" ?>" required>
        </div>
        <div class="form-group">
            <label for="category">Catégories</label>
            <select class="form-select" aria-label="Default select example" name="category" id="category" required>
                <option selected value="<?php echo isset($id) ? $data['category_id'] : "Choississez la catégorie" ?>">
                    <?php
                    if (isset($_POST['id'])) {
                        if ($data['category_id'] == 1) {
                            echo 'Locations';
                        } else if ($data['category_id'] == 2) {
                            echo 'Ventes';
                        } else {
                            echo 'Choississez la catégorie';
                        }
                    }
                    ?>
                </option>
                <option value="1">Locations</option>
                <option value="2">Ventes</option>
            </select>
        </div>
        <?php if (isset($_POST['id'])) { ?>
            <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <?php } ?>
        <button type="submit" class="btn btn-primary mr-2" href="../public/admin.php?page=4"><?php echo isset($_POST['id']) ? "Modifier" : "Ajouter" ?></button>
        <input type="text" class="btn btn-light" onclick="history.back()" value="annuler"></input>
    </form>
</div>