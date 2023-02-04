<header>
    <div class="button-menu">
        <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
            <span class="line l1"></span>
            <span class="line l2"></span>
            <span class="line l3"></span>
        </button>
    </div>
    <div class="img">
        <img src="../public/assets/img/logo_header.png" alt="">
    </div>
    <nav>
        <ul id="menu-navigation" class="itemsmenu">
            <li class="menu-item"><a href="index.php?page=1">Accueil</a></li>
            <li class="menu-item"><a href="index.php?page=2&category=1">Locations</a></li>
            <li class="menu-item"><a href="index.php?page=2&category=2">Ventes</a></li>
            <!-- <li class="menu-item"><a href="index.php?page=3">Estimation</a></li> -->
            <li class="menu-item"><a href="index.php?page=4">Contact</a></li>
        </ul>
    </nav>
    <div class="secondary-menu">
        <div class="dropdown" id="langage">
            <!-- <img src="../public/assets/img/icons/germanFlag.png" alt="icone de l'allemagne" class="germanFlag active">
        <img src="../public/assets/img/icons/frenchFlag.png" alt="icone de la france" class="frenchFlag"> -->
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-tie"></i>
            </button>
            <ul class="dropdown-menu">
                <?php if (isset($_SESSION['id'])) { ?>
                    <li><?php
                        if (isset($_SESSION['firstName'])) {
                            echo '<strong>Bonjour, ' . $_SESSION['firstName'] . '</strong>';
                        } ?></li>
                    <li><a class="dropdown-item" href="index.php?page=5">Mes favoris</a></li>
                    <li><a class="dropdown-item" href="../controlers/logout.php">Se déconnecter</a></li>
                <?php } else { ?>
                    <li><a class="dropdown-item" href="index.php?page=5">Connexion</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>