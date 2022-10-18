<?php

$query = 'SELECT * FROM product';
$query = $bdd->prepare($query);
$query->execute();

while ($data = $query->fetch()) {
?>
    <div class="container-fluid">
        <p>Bienvenue</p>
        <?php
        var_dump($data);
        ?>
    </div>
<?php
}
?>