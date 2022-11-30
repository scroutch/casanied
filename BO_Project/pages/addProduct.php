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

        $data = $req->fetch();
    }
    ?>
    <form class="forms-sample" method="POST" action="admin.php?page=9<?php if (isset($_GET['id'])) {
                                                                            echo "&&id=" . $_GET['id'];
                                                                        } ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Titre" value="<?php echo isset($id) ? $data['title'] : "" ?>">
        </div>
        <?php if (!isset($id)) { ?>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" class="form-control" id="img" name="img" autocomplete="off" value="<?php echo isset($id) ? $data['img'] : "" ?>">
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="rue">Rue</label>
            <input type="text" class="form-control" id="rue" name="rue" autocomplete="off" placeholder="Rue" value="<?php echo isset($id) ? $data['rue'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="cp">Code postale</label>
            <input type="text" class="form-control" id="cp" name="cp" placeholder="Code postal" value="<?php echo isset($id) ? $data['code_postal'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" placeholder="Ville" value="<?php echo isset($id) ? $data['ville'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="nb_bedroom">Nombre de chambre</label>
            <input type="number" class="form-control" id="nb_bedroom" name="nb_bedroom" autocomplete="off" value="<?php echo isset($id) ? $data['nb_bedroom'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="nb_bathroom">Nombre de salle de bain</label>
            <input type="number" class="form-control" id="nb_bathroom" name="nb_bathroom" autocomplete="off" value="<?php echo isset($id) ? $data['nb_bathroom'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="Surface">Superficie</label>
            <input type="text" class="form-control" id="Surface" name="Surface" autocomplete="off" placeholder="Superficie" value="<?php echo isset($id) ? $data['surface'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="type_product">Type de bien</label>
            <select class="form-select" aria-label="Default select example" name="type_product" id="type_product">
                <option selected value="<?php echo isset($id) ? $data['type_product'] : "" ?>"><?php echo isset($id) ? $data['type_product'] : "" ?></option>
                <option value="Maison">Maison</option>
                <option value="Appartement">Appartement</option>
                <option value="Terrain">Terrain</option>
                <option value="Immeuble">Immeuble</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="Prix" value="<?php echo isset($id) ? $data['price'] : "" ?>">
        </div>
        <div class="form-group">
            <label for="category">Catégories</label>
            <select class="form-select" aria-label="Default select example" name="category" id="category">
                <option value="1">locations</option>
                <option value="2">ventes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2" href="admin.php?page=4"><?php echo isset($_GET['id']) ? "Modifier" : "Ajouter" ?></button>
        <button class="btn btn-light">Annuler</button>
    </form>
</div>