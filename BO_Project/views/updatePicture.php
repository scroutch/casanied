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
    <h6 class="card-title">Modifier l'image</h6>
    <?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $element = "img";
        $table = "product";
        $data = selectPic($bdd, $element, $table, $id);
    }
    ?>

    <form class="forms-sample" method="POST" action="../controlers/target_picture.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="img">Image</label>
            <img src="./assets/upload/<?php echo htmlspecialchars($data['img']) ?>" class="updateIMG">
            <input type="file" class="form-control" id="img" name="img" autocomplete="off">
        </div>
        <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
        <button type="submit" class="btn btn-secondary mr-2">Modifier</button>
        <button class="btn btn-light">Annuler</button>
    </form>
</div>