<div class="container-fluid col-xl-6 col-md-12 mx-auto mt-5" id="connect">
    <div class="row">
        <?php

        if (isset($_SESSION['errorMess'])) {
            echo $_SESSION['errorMess'];
            unset($_SESSION['errorMess']);
        }
        ?>
    </div>
    <form method="POST" action="../controlers/connectControler.php">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <input type="submit" class="btn btn-primary" value="Se connecter"></input>
    </form>
    <div class="text-center mt-3">
        <a href="index.php?page=6">Pas encore inscrit? Cliquez-ici !</a>
    </div>
</div>