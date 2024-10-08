<?php

require '../models/bdd.php';
require '../models/functions.php';

?>

<div class="row">
    <?php

    $table = "product";
    $table2 = "category";
    $table3 = "contact";
    $champ = "category_id";
    $champ2 = "id";
    $data = countFromCat($bdd, $table2);

    for ($i = 1; $i <= $data[0]; $i++) {
        $dataCount = countProd($bdd, $table, $champ, $i);
        $res = cat($bdd, $table2, $champ2, $i);
    ?>
        <div class="col-xl-12 col-md-6 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <a href="admin.php?page=4">
                                    <h6 class="card-title mb-0"><?php echo "Nombre de biens en " . $res['name']; ?></h6>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2"><?php echo $dataCount[0]; ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<div class="col-xl-12 col-md-6 stretch-card visible">
    <div class="row flex-grow">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <a href="admin.php?page=5">
                            <h6 class="card-title mb-0">Accès aux membres administrateurs</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MESSAGE CONTACT -->

<div class="row">
    <div class="col-lg-6 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <?php
        $dataContact = listMessage($bdd, $table3);
        foreach ($dataContact as $data) {
            include('modalMess.php');
        ?>
            <div class="card m-2">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Inbox</h6>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal<?php echo $data['id'] ?>" class="d-flex align-items-center border-bottom pb-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2"><?php echo $data['name'] . " " . $data['firstName']; ?></h6>
                                    <p class="text-muted tx-12"><?php echo $data['date_envoi']; ?></p>
                                </div>
                                <p class="text-muted tx-13"><?php echo $data['message']; ?></p>
                            </div>
                        </a>
                    </div>
                <?php
            }
                ?>
                </div>
            </div>
    </div>
</div>

<!-- retour au site -->
<div class="row">
    <div class="col-xs-12">
        <a class="btn btn-outline-dark" href="../../public/index.php?page=1">Revenir sur le site</a>
    </div>
</div>