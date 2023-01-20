<div class="modal" tabindex="-1" id="modal<?php echo $product['id'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title"><?php echo $product['title'] ?></h5>
                <span><?php echo $product['price'] ?> €
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </span>
            </div>
            <div class="modal-body">
                <img class="card-img-top" src="../BO_Project/public/assets/upload/<?php echo $product['img'] ?>" alt="Card image cap">
                <div class="card-body d-flex flex-column justify-content-around">
                    <p class="card-text d-flex justify-content-center p-3"><?php echo $product['description'] ?></p>
                    <p class="card-text d-flex justify-content-center p-3"><i class="fa-solid fa-location-dot"></i><span class="ps-2"><?php echo $product['rue'] ?>, <?php echo $product['ville'] ?></span></p>
                    <p class="card-text d-flex justify-content-around">
                        <span class="p-2"><i class="fa-solid fa-bed"></i><span class="ps-2"><?php echo $product['nb_bedroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-bath"></i><span class="ps-2"><?php echo $product['nb_bathroom'] ?></span></span>
                        <span class="p-2"><i class="fa-solid fa-arrows-up-down-left-right"></i><span class="ps-2"><?php echo $product['surface'] ?> m²</span></span>
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>