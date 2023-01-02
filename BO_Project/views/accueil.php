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
        <div class="col-6 col-xl-6 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0"><?php echo "Nombre de biens en " . $res['name']; ?></h6>
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

<!-- MESSAGE CONTACT -->

<div class="row">
    <div class="col-lg-6 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Inbox</h6>
                </div>
                <?php

                $dataContact = listMessage($bdd, $table3);

                foreach ($dataContact as $data) {
                ?>
                    <div class="d-flex flex-column">
                        <a href="#" class="d-flex align-items-center border-bottom pb-3">
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