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
    <h6 class="card-title">Ajouter un collaborateur</h6>
    <form class="forms-sample" method="POST" action="../controlers/target_collab.php">
        <small class="text-danger"><?php if (isset($_SESSION['error_empty'])) {
                                        echo $_SESSION['error_empty'];
                                        unset($_SESSION['error_empty']);
                                    } ?></small>
        <div class="mb-3">
            <label for="name" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="name" name="name">
            <small class="text-danger"><?php if (isset($_SESSION['error_name'])) {
                                            echo $_SESSION['error_name'];
                                            unset($_SESSION['error_name']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">Votre prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            <small class="text-danger"><?php if (isset($_SESSION['error_firstName'])) {
                                            echo $_SESSION['error_firstName'];
                                            unset($_SESSION['error_firstName']);
                                        } ?></small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
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
        <button type="submit" class="btn btn-primary mr-2" name="submit">Ajouter</button>
        <input type="text" class="btn btn-secondary" onclick="history.back()" value="annuler"></input>
    </form>
</div>