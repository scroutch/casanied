<div class="row">

    <?php

    $queryCount = "SELECT COUNT(*) FROM category";
    $reqCount = $bdd->prepare($queryCount);
    $reqCount->execute();
    $dataCount = $reqCount->fetch();

    for ($i = 1; $i <= $dataCount[0]; $i++) {
        $query = "SELECT COUNT(*) FROM product WHERE category_id='{$i}'";
        $req = $bdd->prepare($query);
        $req->execute();
        $data = $req->fetch();
        $query2 = "SELECT * FROM category WHERE id='{$i}'";
        $req2 = $bdd->prepare($query2);
        $req2->execute();
        $res = $req2->fetch();
        // var_dump($data);
        // var_dump($res);
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
                                    <h3 class="mb-2"><?php echo $data[0]; ?></h3>
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

                $queryContact = "SELECT * FROM contact";
                $reqContact = $bdd->prepare($queryContact);
                $reqContact->execute();
                while ($dataContact = $reqContact->fetch()) {
                ?>
                    <div class="d-flex flex-column">
                        <a href="#" class="d-flex align-items-center border-bottom pb-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="text-body mb-2"><?php echo $dataContact['name'] . " " . $dataContact['firstName']; ?></h6>
                                    <p class="text-muted tx-12"><?php echo $dataContact['date_envoi']; ?></p>
                                </div>
                                <p class="text-muted tx-13"><?php echo $dataContact['message']; ?></p>
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