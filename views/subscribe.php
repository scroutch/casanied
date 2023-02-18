<?php
require '../controlers/subscribeControler.php';
?>
<div class="container-fluid col-xl-6 col-md-12 mx-auto mt-5" id="subscribe">
    <div class="row">
        <?php

        if (isset($_SESSION['errorMess'])) {
            echo $_SESSION['errorMess'];
            unset($_SESSION['errorMess']);
        }
        ?>
    </div>
    <form method="POST" action="../controlers/subscribeControler.php">
        <small class="text-danger"><?php if (isset($_SESSION['error_empty'])) {
                                        echo $_SESSION['error_empty'];
                                        unset($_SESSION['error_empty']);
                                    } ?></small>
        <div class="mb-3">
            <label for="name" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo (isset($_SESSION['name'])) ?  $_SESSION['name'] : "" ?>">
            <small class="text-danger"><?php if (isset($_SESSION['error_name'])) {
                                            echo $_SESSION['error_name'];
                                            unset($_SESSION['error_name']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">Votre prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo (isset($_SESSION['firstName'])) ?  $_SESSION['firstName'] : "" ?>">
            <small class="text-danger"><?php if (isset($_SESSION['error_firstName'])) {
                                            echo $_SESSION['error_firstName'];
                                            unset($_SESSION['error_firstName']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo (isset($_SESSION['email'])) ?  $_SESSION['email'] : "" ?>">
            <small class="text-danger"><?php if (isset($_SESSION['error_email'])) {
                                            echo $_SESSION['error_email'];
                                            unset($_SESSION['error_email']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Votre mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="text-danger"><?php if (isset($_SESSION['error_password'])) {
                                            echo $_SESSION['error_password'];
                                            unset($_SESSION['error_password']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmation de votre mot de passe</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
            <small class="text-danger"><?php if (isset($_SESSION['error_confirPassword'])) {
                                            echo $_SESSION['error_confirPassword'];
                                            unset($_SESSION['error_confirPassword']);
                                        } ?></small>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="S'inscrire"></input>
    </form>
    <div class="text-center mt-3">
        <a href="index.php?page=5">Déjà inscrit? Connectez-vous !</a>
    </div>
</div>