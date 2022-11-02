<div class="container-fluid" id="contact">
    <h2>Nous contacter</h2>
    <form action="pages/target_contact.php" method="POST" class="container-fluid d-flex flex-column justify-content-evenly flex-wrap">
        <div class="perso d-flex justify-content-between">
            <input type="text" name="name" id="name" placeholder="Entrez votre nom" required>
            <input type="text" name="firstName" id="firstName" placeholder="Entrez votre prénom" required>
        </div>
        <div class="perso d-flex justify-content-between">
            <input type="tel" name="tel" id="tel" placeholder="Entrez votre tel" required>
            <input type="email" name="mail" id="mail" placeholder="Entrez votre email" required>
        </div>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Entrez votre message" required></textarea>
        <div class="g-recaptcha" data-sitekey="6LdOR78iAAAAAAHd2WHsNRc-CavtNBo5TCjJJYuQ"></div>
        <input type="submit" value="ENVOYER">
    </form>
</div>