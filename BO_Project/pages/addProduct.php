<div class="row">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="card-body">
    <h6 class="card-title">Ajouter un bien</h6>
    <form class="forms-sample" method="POST" action="./pages/target_collab.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" autocomplete="off" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control" id="img" name="img" autocomplete="off" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label for="rue">Rue</label>
            <input type="text" class="form-control" id="rue" name="rue" autocomplete="off" placeholder="Rue" required>
        </div>
        <div class="form-group">
            <label for="cp">Code postale</label>
            <input type="text" class="form-control" id="cp" name="cp" placeholder="code postal" required>
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" placeholder="Ville" required>
        </div>
        <div class="form-group">
            <label for="nb_bedroom">Nombre de chambre</label>
            <input type="number" class="form-control" id="nb_bedroom" name="nb_bedroom" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="nb_bathroom">Nombre de salle de bain</label>
            <input type="number" class="form-control" id="nb_bathroom" name="nb_bathroom" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="Surface">Superficie</label>
            <input type="text" class="form-control" id="Surface" name="Surface" autocomplete="off" placeholder="Superficie" required>
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
            <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="prix" required>
        </div>
        <div class="form-group">
            <label for="category">Catégories</label>
            <select class="form-select" aria-label="Default select example" name="category" id="category">
                <option selected value="Location">Location</option>
                <option value="Vente">Vente</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
        <button class="btn btn-light">Annuler</button>
    </form>
</div>
<?php

?>