<?php

// require '../models/bdd.php';

?>

<div class="container-fluid col-xl-12 col-md-12 mx-auto mt-5" id="contact">
    <div class="row">
        <?php

        if (isset($_SESSION['errorMess'])) {
            echo $_SESSION['errorMess'];
            unset($_SESSION['errorMess']);
        }
        ?>
    </div>
    <h2>Nous contacter</h2>
    <form action="../controlers/contactControler.php" method="POST" class="container-fluid d-flex flex-column justify-content-evenly flex-wrap">
        <div class="perso d-flex justify-content-between">
            <input type="text" name="name" id="name" placeholder="Entrez votre nom" required>
            <input type="text" name="firstName" id="firstName" placeholder="Entrez votre prénom" required>
        </div>
        <div class="perso d-flex justify-content-between">
            <input type="tel" name="tel" id="tel" placeholder="Entrez votre tel" required>
            <input type="email" name="mail" id="mail" placeholder="Entrez votre email" required>
        </div>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Entrez votre message" required></textarea>
        <div class="captcha d-flex justify-content-center align-items-center">
            <div class="g-recaptcha" data-sitekey="6LdOR78iAAAAAAHd2WHsNRc-CavtNBo5TCjJJYuQ"></div>
        </div>
        <p>En envoyant ce formulaire, j’accepte que mes informations soient enregistrées puis utilisées par notre agence afin de répondre à ma demande. Consultez notre politique de confidentialité pour connaître vos droits.</p>
        <input type="submit" value="ENVOYER">
    </form>
    <h2>Où nous-trouver?</h2>
    <div id="map"></div>
</div>