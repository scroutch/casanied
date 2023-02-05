<div class="modal" tabindex="-1" id="modal<?php echo $data['id'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <h5 class="modal-title"><?php echo $data['name'] . " " . $data['firstName'] ?></h5>
                <span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </span>
            </div>
            <div class="modal-body">
                <div class="card-body d-flex flex-column justify-content-around">
                    <p class="card-text d-flex justify-content-center p-3"><?php echo $data['date_envoi'] ?></p>
                    <p class="card-text d-flex justify-content-center p-3"><?php echo $data['message'] ?></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>