<div class="row">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="card-body">
    <h6 class="card-title">Modifier l'image</h6>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        var_dump($id);
        $query = 'SELECT img FROM product WHERE id=:id';
        $req = $bdd->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch();
    }
    ?>

    <form class="forms-sample" method="POST" action="admin.php?page=11&&id=<?php echo $_GET['id'] ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="img">Image</label>
            <img src="./assets/upload/<?php echo htmlspecialchars($data['img']) ?>" class="updateIMG">
            <input type="file" class="form-control" id="img" name="img" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-secondary mr-2" href="admin.php?page=4">Modifier</button>
        <button class="btn btn-light">Annuler</button>
    </form>
</div>