<?php require_once 'header.admin.php';
require_once '../includes/init.inc.php'; ?>
<div class="background" style="font-size: 20px;">
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
        <form action="add_prod.php" method="POST" enctype="multipart/form-data">
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="text" id="nom" name="nom" placeholder="Nom">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="number" id="prix" name="prix" placeholder="Prix">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" type="number" id="quantite" name="quantite" placeholder="Quantité">
            </div>
            <div class="app-form-group">
              <label for="select_departement">Departement :</label>
              <select  id="select_departement" name="dep">
              <option selected="selected" value="">--Selectionner--</option>
                <option value="homme">HOMME</option>
                <option value="femme">FEMME</option>
                <option value="enfant">ENFANT</option>
                <option value="electronique">ELECTRONIQUE</option>
              </select>
            </div>
            <div class="app-form-group">
              <label for="select_cat">Catégorie :</label>
              <select  id="select_cat" name="cat">
              <option selected="selected" value=''>--Selectionner--</option>
                <option value="2">T-shirt</option>
                <option value="3">Pontalon</option>
                <option value="4">Chaussures</option>
                <option value="5">Montre</option>
              </select>
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button" type="submit" name="submit" id="add_product">AJOUTER</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div><br>
    <div ><?php if (isset($_GET['error'])) {
      echo'<div class="alert alert-danger" role="alert">
            Il faut Saisir tous les champs!!
          </div>';
     
    } ?></div>
  </div>
</div>

<div class="container" id="products">
  <h1 class="text-center">Tous les produits</h1><br>
  <?php 
  
  tous_produits();
  ?>
</div>

<?php require_once 'footer.admin.php'; ?>




