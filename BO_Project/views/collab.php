<?php

require '../models/bdd.php';
require '../models/functions.php';

?>
<div class="row">
    <?php
    $_SESSION['link'] = '../controlers/deleteCollab.php';
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
                            $table = "membre";
                            $champ = "date_ajout";
                            $data = listElement($bdd, $table, $champ);
                            foreach ($data as $admin) {
                            ?>
                                <tr>
                                    <th><?php echo htmlspecialchars($admin['id']) ?></th>
                                    <td><?php echo htmlspecialchars($admin['name']) ?></td>
                                    <td><?php echo htmlspecialchars($admin['firstName']) ?></td>
                                    <td><?php echo htmlspecialchars($admin['email']) ?></td>
                                    <td><?php echo htmlspecialchars($admin['date_ajout']) ?></td>
                                    <?php if ($admin['email'] != "greg@test.com") { ?>
                                        <td>
                                            <form action="../public/admin.php?page=7" method="post">
                                                <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">
                                                <button type="submit" class="btn btn-dark" value="delete" name="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete">
                                                        <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                                        <line x1="18" y1="9" x2="12" y2="15"></line>
                                                        <line x1="12" y1="9" x2="18" y2="15"></line>
                                                    </svg>
                                                </button>
                                            </form>
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