<div class="row">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="card-body">
    <h6 class="card-title">Ajouter un callaborateur</h6>
    <form class="forms-sample" method="POST" action="./pages/target_collab.php">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" autocomplete="off" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label for="firstName">Prenom</label>
            <input type="text" class="form-control" id="firstName" name="firstName" autocomplete="off" placeholder="Prénom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirmer le mot de passe</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" autocomplete="off" placeholder="confirmer le mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
        <button class="btn btn-light">Annuler</button>
    </form>
</div>