<?php

include('bdd.php');

session_unset();
header('Location: ../index.php?page=1');
exit;
