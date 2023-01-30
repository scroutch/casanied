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
        <div class="mb-3">
            <label for="name" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">Votre prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Votre mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirmation de votre mot de passe</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="text-center mt-3">
        <a href="index.php?page=5">Déjà inscrit? Connectez-vous !</a>
    </div>
</div>