<div class="row">
    <?php
    $_SESSION['link'] = './pages/deleteProduct.php';
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
                <a href="admin.php?page=8">
                    <p class="card-description">Ajouter
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <line x1="20" y1="8" x2="20" y2="14"></line>
                            <line x1="23" y1="11" x2="17" y2="11"></line>
                        </svg>
                    </p>
                </a>
                <div class="table-responsive">
                    <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTableExample_length"><label>Show <select name="dataTableExample_length" aria-controls="dataTableExample" class="custom-select custom-select-sm form-control">
                                            <option value="10">10</option>
                                            <option value="30">30</option>
                                            <option value="50">50</option>
                                            <option value="-1">All</option>
                                        </select> entries</label></div>
                            </div>
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
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Nombre de chambres</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Nombre de salle de bain</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Superficie</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">prix</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTableExample" rowspan="1" colspan="1" style="width: 150px;" aria-label="Salary: activate to sort column ascending">date d'ajout</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $query = 'SELECT * FROM product ORDER BY created_date DESC';
                                        $req = $bdd->prepare($query);
                                        $req->execute();

                                        while ($data = $req->fetch()) {


                                        ?>


                                            <tr>
                                                <th><?php echo htmlspecialchars($data['id']) ?></th>
                                                <?php if (htmlspecialchars($data['category_id']) == 1) { ?>
                                                    <th><?php echo 'location' ?></th>
                                                <?php } else { ?>
                                                    <th><?php echo 'vente' ?></th>
                                                <?php } ?>
                                                <td><img src="./assets/upload/<?php echo htmlspecialchars($data['img']) ?>"></td>
                                                <td><?php echo htmlspecialchars($data['title']) ?></td>
                                                <td><?php echo htmlspecialchars($data['rue']) ?></td>
                                                <td><?php echo htmlspecialchars($data['code_postal']) ?></td>
                                                <td><?php echo htmlspecialchars($data['ville']) ?></td>
                                                <td><?php echo htmlspecialchars($data['nb_bedroom']) ?></td>
                                                <td><?php echo htmlspecialchars($data['nb_bathroom']) ?></td>
                                                <td><?php echo htmlspecialchars($data['surface']) . ' m²' ?></td>
                                                <td><?php echo htmlspecialchars($data['type_product']) ?></td>
                                                <td><?php echo htmlspecialchars($data['price']) . ' €' ?></td>
                                                <td><?php echo htmlspecialchars($data['created_date']) ?></td>
                                                <td>
                                                    <a href="admin.php?page=8&id=<?php echo htmlspecialchars($data['id']) ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                        </svg>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="admin.php?page=7&id=<?php echo htmlspecialchars($data['id']) ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                                            <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                            <line x1="18" y1="9" x2="12" y2="15"></line>
                                                            <line x1="12" y1="9" x2="18" y2="15"></line>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTableExample_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTableExample_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTableExample_previous"><a href="#" aria-controls="dataTableExample" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="dataTableExample" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTableExample" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item next" id="dataTableExample_next"><a href="#" aria-controls="dataTableExample" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>