<div class="container-fluid d-flex justify-content-evenly align-items-center flex-wrap onglet">
    <div class="container-onglets">
        <div class="tab-header">
            <button class="tab-link active" data-ref="location">Location</button>
            <button class="tab-link" data-ref="vente">Vente</button>
            <button class="tab-link" data-ref="estimation">Estimation</button>
        </div>
        <form action="" method="post" class="tab-body active" data-id="location">
            <p>3500 biens à louer</p>
            <input type="text" name="lieu" placeholder="Quartier, Ville, ...">
            <input type="text" name="price" placeholder="Budget max">
            <input type="text" name="surface" placeholder="surface">
            <div>
                <input type="checkbox" name="type" id="maison" value="maison" checked>
                <label for="maison">Maison</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="appartement" value="appartement">
                <label for="appartement">Appartement</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="terrain" value="terrain">
                <label for="terrain">Terrain</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="immeuble" value="immeuble">
                <label for="immeuble">Immeuble</label>
            </div>
        </form>
        <form action="" method="post" class="tab-body" data-id="vente">
            <p>3500 biens à vendre</p>
            <input type="text" name="lieu" placeholder="Quartier, Ville, ...">
            <input type="text" name="price" placeholder="Budget max">
            <input type="text" name="surface" placeholder="surface">
            <div>
                <input type="checkbox" name="type" id="maison" value="maison" checked>
                <label for="maison">Maison</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="appartement" value="appartement">
                <label for="appartement">Appartement</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="terrain" value="terrain">
                <label for="terrain">Terrain</label>
            </div>
            <div>
                <input type="checkbox" name="type" id="immeuble" value="immeuble">
                <label for="immeuble">Immeuble</label>
            </div>
        </form>
        <form action="" method="post" class="tab-body" data-id="estimation"></form>
    </div>
</div>