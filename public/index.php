<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.2.0/css/all.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script defer src="./assets/fontawesome-free-6.2.0/js/all.js"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/logo.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Casanied</title>
</head>

<body>
    <?php
    include('../views/header.php');

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 1) {
            include('../views/home.php');
        } else if ($page == 2) {
            include('../views/location.php');
        } else if ($page == 3) {
            include('../views/estimation.php');
        } else if ($page == 4) {
            include('../views/contact.php');
        }
    } else {
        include('../views//home.php');
    }

    include('../views/footer.php');
    ?>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./assets/bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script src="./assets/js/menuBurger.js"></script>
    <script src="./assets/js/langage.js"></script>
    <script src="./assets/js/onglet.js"></script>
    <script src="./assets/js/map.js"></script>
</body>

</html>