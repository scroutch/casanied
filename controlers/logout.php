<?php

require '../models/bdd.php';

session_unset();
header('Location: ../public/index.php?page=1');
exit;
