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
                    <p class="card-text d-flex justify-content-center p-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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