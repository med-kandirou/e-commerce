<?php
    require_once '../includes/init.inc.php';
    
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $nom='';
        $prix=0;
        $result=$conn->query('SELECT `nom_prod`,`prix` FROM `produit` WHERE `id_produit`='.$id.'');
        if ($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
            $nom=$row["nom_prod"];
            $prix=$row["prix"];
            }
        } 
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../style/bootstrap_achete.css">
    <link rel="stylesheet" href="../style/style_achete.css">
    <title>Poursuivre la demmande</title>
  </head>
  <body>
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Les informations</h3>
              <p>Pour une meilleure livraison ,entrez vos informations d'une façon correct avec prudent et merci</p>
              <p><img src="../image_site/logo_site.png" alt="Image" class="img-fluid"></p>
            </div>
            <div class="col-md-6">
              <form class="mb-5" method="post" >
                <div class="row">
                  <div class="col-md-12 form-group">
                  <label class="label" for="adress">Nom produit</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $nom ?>" disabled >
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <label class="label" for="adress">Prix</label>
                    <input type="text" class="form-control" id="prix" value="<?php echo $prix.' MAD' ?>" disabled>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                  <label class="label" for="adress">Téléphone</label>
                    <input type="text" class="form-control" id="tele" placeholder="06XXXXXXXX">
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="label" for="adress">Adresse</label>
                        <input type="text" class="form-control" id="adress" placeholder="ex:Maroc, Casablanca" > 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="label" for="quantite">Qauntité</label>
                        <input type="number" class="form-control" id="quantite"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="label" for="password">Code Postal</label>
                        <input type="number" class="form-control" id="code" placeholder="ex:35 000">
                    </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="button" id="btn_acheter" class="btn btn-primary rounded-0 py-2 px-4" value="<?php echo $id ?>">Acheter</button><br><br>
                  </div><br>
                  <div class="col-12">
                    <div class="alert alert-success" id="alert-achete" role="alert">Produit acheté avec succés !</div>
                  </div>
                  <div class="col-12">
                    <div class="alert alert-danger" id="alert-champ-vide" role="alert">Il faut saisir tous les champs</div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/acceuil_js/achete.js"></script>
</html>