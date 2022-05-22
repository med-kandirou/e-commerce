
<div class="background">
  <div class="conteneur">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>AJOUTER</span>
            <span>PRODUIT</span>
          </div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input type="file" id="file_name" accept=".png, .jpg, .jpeg">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" id="nom" placeholder="Nom">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="number" id="prix" placeholder="Prix">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" id="desc" placeholder="Description">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="number" id="quantite" placeholder="Quantité">
            </div>
            <div class="app-form-group">
              <label for="select_departement">Departement :</label>
              <select  id="select_departement">
              <option selected="selected" value="">--Selectionner--</option>
                <option value="homme">HOMME</option>
                <option value="femme">FEMME</option>
                <option value="enfant">ENFANT</option>
                <option value="electronique">ELECTRONIQUE</option>
              </select>
            </div>
            <div class="app-form-group">
              <label for="select_cat">Catégorie :</label>
              <select  id="select_cat">
              <option selected="selected" value=''>--Selectionner--</option>
                <option value="2">T-shirt</option>
                <option value="3">Pontalon</option>
                <option value="4">Chaussures</option>
                <option value="5">Montre</option>
              </select>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button" id="add_product">AJOUTER</button>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div  id="feed_back"></div>
  </div>
</div>

<div class="container" id="products">
  <h1 class="text-center">Tous les produits</h1><br>
  <?php 
  tous_produits();
  ?>
</div>





