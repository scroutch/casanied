<?php

require '../models/bdd.php';
require '../models/functions.php';

?>

<div class="container py-5 d-flex justify-content-center">
    <div class="row">
        <?php
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
        ?>
            <form action="<?php echo $_SESSION['link'] ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <p>Etes vous sur de vouloir supprimer ?</p>
                <input type="text" class="btn btn-secondary" onclick="history.back()" value="annuler"></input>
                <input type="submit" class="btn btn-danger" value="delete"></input>
            </form>
        <?php
        }
        ?>
    </div>
</div>