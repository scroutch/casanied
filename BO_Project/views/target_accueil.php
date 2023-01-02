<?php
$query = 'SELECT COUNT(*) FROM product WHERE category_id=1';
$req = $bdd->prepare($query);
$req->execute();
$data = $req->fetch();
