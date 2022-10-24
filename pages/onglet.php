<div class="container-fluid d-flex justify-content-evenly align-items-center flex-wrap onglet">
    <div class="container-onglets">
        <div class="tab-header">
            <button class="tab-link active" data-ref="location">Location</button>
            <button class="tab-link" data-ref="vente">Vente</button>
            <button class="tab-link" data-ref="estimation">Estimation</button>
        </div>
        <form action="" method="post" class="tab-body active" data-id="location">
            <p>3500 biens à louer</p>
            <input type="text" class="lieu" name="lieu" placeholder="Quartier, Ville, code postal...">
            <div class="inputBudget">
                <input type="text" class="budget" name="price" placeholder="Budget max">
                <input type="text" class="budget" name="surface" placeholder="surface">
            </div>
            <div class="check">
                <div>
                    <input type="checkbox" name="type[]" id="maison" value="maison" checked>
                    <label for="maison">Maison</label>
                </div>
                <div>
                    <input type="checkbox" name="type[]" id="appartement" value="appartement">
                    <label for="appartement">Appartement</label>
                </div>
                <div>
                    <input type="checkbox" name="type[]" id="terrain" value="terrain">
                    <label for="terrain">Terrain</label>
                </div>
                <div>
                    <input type="checkbox" name="type[]" id="immeuble" value="immeuble">
                    <label for="immeuble">Immeuble</label>
                </div>
            </div>
            <div>
                <label for="nb-bedroom">Nombre de chambre</label>
                <select name="nb_bedroom" id="nb_bedroom">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
            </div>
            <input type="submit" value="CHERCHER">
        </form>
        <form action="index.php?page=1" method="post" class="tab-body" data-id="vente">
            <p>3500 biens à louer</p>
            <input type="text" class="lieu" name="ville" placeholder="Ville, ...">
            <div class="inputBudget">
                <input type="text" class="budget" name="price" placeholder="Budget max">
                <input type="text" class="budget" name="surface" placeholder="surface">
            </div>
            <div class="check">
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
            </div>
            <div>
                <label for="nb-bedroom">Nombre de chambre</label>
                <select name="nb_bedroom" id="nb_bedroom">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
            </div>
            <input type="submit" value="CHERCHER">
        </form>
        <form action="" method="post" class="tab-body" data-id="estimation">
            <p>3500 biens à louer</p>
            <input type="text" class="lieu" name="lieu" placeholder="Quartier, Ville, ...">
            <div class="inputBudget">
                <input type="text" class="budget" name="price" placeholder="Budget max">
                <input type="text" class="budget" name="surface" placeholder="surface">
            </div>
            <div class="check">
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
            </div>
            <div>
                <label for="nb-bedroom">Nombre de chambre</label>
                <input type="number" name="nb-bedroom" id="nb-bedroom" value="1">
            </div>
            <input type="submit" value="CHERCHER">
        </form>
    </div>
</div>