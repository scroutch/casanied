<?php

include('pages/bdd.php');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script defer src="./assets/fontawesome-free-6.2.0/js/all.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo.png">
    <title>Casanied</title>
</head>

<body>
    <?php

    include('pages/header.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 1) {
            include('pages/home.php');
        } else if ($page == 2) {
            include('pages/location.php');
        } else if ($page == 3) {
            include('pages/vente.php');
        } else if ($page == 4) {
            include('pages/estimation.php');
        } else if ($page == 5) {
            include('pages/contact.php');
        } else if ($page == 6) {
            include('pages/home.php');
        } else if ($page == 7) {
            include('pages/home.php');
        }
    } else {
        include('pages/home.php');
    }

    include('pages/footer.php');
    ?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./assets/bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="assets/js/menuBurger.js"></script>
    <script src="assets/js/langage.js"></script>
</body>

</html>