<div class="container py-5 d-flex justify-content-center">
    <div class="row">
        <form action="<?php echo $_SESSION['link'] ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <p>Etes vous sur de vouloir supprimer ?</p>
            <input type="text" class="btn btn-secondary" onclick="history.back()" value="annuler"></input>
            <a href="admin.php?page=5"><input type="submit" class="btn btn-danger" value="supprimer"></input></a>
        </form>
    </div>
</div>