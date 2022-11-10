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
                                <h6 class="card-title mb-0"><?php echo "Nombre de " . $res['name']; ?></h6>
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
<div class="row">
    <div class="col-6 col-xl-6 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">ok</h6>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">ok</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MESSAGE CONTACT -->



<div class="row">
    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Inbox</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                            <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm mr-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm mr-2">
                                    <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                    <rect x="6" y="14" width="12" height="8"></rect>
                                </svg> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm mr-2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="7 10 12 15 17 10"></polyline>
                                    <line x1="12" y1="15" x2="12" y2="3"></line>
                                </svg> <span class="">Download</span></a>
                        </div>
                    </div>
                </div>
                <?php

                $queryContact = "SELECT * FROM contact";
                $reqContact = $bdd->prepare($queryContact);
                $reqContact->execute();
                while ($dataContact = $reqContact->fetch()) {
                ?>
                    <div class="d-flex flex-column">
                        <a href="#" class="d-flex align-items-center border-bottom pb-3">
                            <div class="mr-3">
                                <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
                            </div>
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