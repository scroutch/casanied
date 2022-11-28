<div class="row">


</div>
<div class="page-content">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Collaborateurs</h6>
                <a href="admin.php?page=6">
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Date d'ajout</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $query = 'SELECT * FROM admin ORDER BY date_ajout DESC';
                            $req = $bdd->prepare($query);
                            $req->execute();

                            while ($data = $req->fetch()) {


                            ?>


                                <tr>
                                    <th><?php echo htmlspecialchars($data['id']) ?></th>
                                    <td><?php echo htmlspecialchars($data['name']) ?></td>
                                    <td><?php echo htmlspecialchars($data['firstName']) ?></td>
                                    <td><?php echo htmlspecialchars($data['email']) ?></td>
                                    <td><?php echo htmlspecialchars($data['date_ajout']) ?></td>
                                    <?php if ($data['email'] != "greg@casanied.com") { ?>
                                        <td>
                                            <a href="admin.php?page=7&id=<?php echo htmlspecialchars($data['id']) ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                                    <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                    <line x1="18" y1="9" x2="12" y2="15"></line>
                                                    <line x1="12" y1="9" x2="18" y2="15"></line>
                                                </svg>
                                            </a>
                                        </td>
                                    <?php } ?>
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