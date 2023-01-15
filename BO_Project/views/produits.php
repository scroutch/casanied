<?php

require '../models/bdd.php';
require '../models/functions.php';

?>
<div class="row">
    <?php
    $_SESSION['link'] = '../controlers/deleteProduct.php';
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
</div>
<div class="page-content">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Biens</h6>
                <a href="admin.php?page=8" title="Ajouter un bien">
                    <p class="card-description">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        Ajouter
                    </p>
                </a>
                <div class="table-responsive">
                    <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTableExample_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search" aria-controls="dataTableExample"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="dataTableExample" class="table dataTable no-footer" role="grid" aria-describedby="dataTableExample_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 266.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">#</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 266.8px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Categorie</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 408.367px;" aria-label="Position: activate to sort column ascending">image</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 195.383px;" aria-label="Office: activate to sort column ascending">intitulé</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 96.9667px;" aria-label="Age: activate to sort column ascending">rue</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 192.483px;" aria-label="Start date: activate to sort column ascending">code postal</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">ville</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Chambres</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Salle de bain</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Superficie</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">prix</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">date d'ajout</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $table = "product";
                                        $champ = "created_date";
                                        $data = listElement($bdd, $table, $champ);
                                        foreach ($data as $product) {
                                        ?>
                                            <tr>
                                                <th><?php echo htmlspecialchars($product['id']) ?></th>
                                                <?php if (htmlspecialchars($product['category_id']) == 1) { ?>
                                                    <th><?php echo 'location' ?></th>
                                                <?php } else { ?>
                                                    <th><?php echo 'vente' ?></th>
                                                <?php } ?>
                                                <td>
                                                    <form action="../public/admin.php?page=10" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                                        <img src="../public/assets/upload/<?php echo htmlspecialchars($product['img']) ?>">
                                                        <button type="submit" class="btn btn-transparent btn-update-img" name="submit">
                                                            <i class="fa-solid fa-pen"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td><?php echo htmlspecialchars($product['title']) ?></td>
                                                <td><?php echo htmlspecialchars($product['rue']) ?></td>
                                                <td><?php echo htmlspecialchars($product['code_postal']) ?></td>
                                                <td><?php echo htmlspecialchars($product['ville']) ?></td>
                                                <td><?php echo htmlspecialchars($product['nb_bedroom']) ?></td>
                                                <td><?php echo htmlspecialchars($product['nb_bathroom']) ?></td>
                                                <td><?php echo htmlspecialchars($product['surface']) . ' m²' ?></td>
                                                <td><?php echo htmlspecialchars($product['type_product']) ?></td>
                                                <td><?php echo htmlspecialchars($product['price']) . ' €' ?></td>
                                                <td><?php echo htmlspecialchars($product['created_date']) ?></td>
                                                <td>
                                                    <form action="../public/admin.php?page=8" method="post">
                                                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                                                        <button type="submit" class="btn btn-dark" value="update" name="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="../public/admin.php?page=7" method="post">
                                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']) ?>">
                                                        <button type="submit" class="btn btn-dark" value="delete" name="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                                                <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                                <line x1="18" y1="9" x2="12" y2="15"></line>
                                                                <line x1="12" y1="9" x2="18" y2="15"></line>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>