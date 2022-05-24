<?php
    require_once '../includes/init.inc.php';

    

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $img='';
        $nom='';
        $prix=0;
        $quantité=0;
        $result=$conn->query("SELECT `id_produit`, `nom_prod`, `prix`,`image`, `quantité_stock` FROM `produit` WHERE `id_produit`=".$id."");
        if ($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
            $img=$row["image"];
            $nom=$row["nom_prod"];
            $prix=$row["prix"];
            $quantité=$row["quantité_stock"];
            }
        } 
    }

?>
<!doctype html>
<html lang="en">
  <head>
  	<title><?php echo nom_site ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style/connecter/style.css">

	</head>
	<body>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Poursuivre la demmande</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('<?php echo '../image_prod/'.$img.'';?>');">
			      </div>
                  
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Les informations</h3>
			      		</div>
								
			      	</div>
						<form  class="signin-form">
                        <div class="form-group mb-3">
                                <label class="label" for="id">Numero de produit</label>
                                <input type="text" class="form-control" id="id" value="<?php echo $id ?>" disabled >
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" >Nom Produits</label>
                                <input type="text" class="form-control" value="<?php echo $nom ?>" disabled >
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" >Prix</label>
                                <input type="text" class="form-control" value="<?php echo $prix ?>" disabled >
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" >Téléphone</label>
                                <input type="text" class="form-control" id="tele" placeholder="ex:06......" >
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="adress">Adresse </label>
                                <input type="text" class="form-control" id="adress" placeholder="ex:Maroc, Casablanca" >

                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="quantite">Qauntité</label>
                                <input type="number" class="form-control" id="quantite"> 
                            </div>
                            <div class="form-group mb-3">
                                <label class="label" for="password">Code Postal</label>
                                <input type="number" class="form-control" id="code" placeholder="ex:35 000">
                            </div>
                            <div class="form-group">
                                <button type="button" class="form-control btn btn-primary rounded submit px-3" id="btn_acheter">Acheter</button>
                            </div>
							<div class="alert alert-success" id="alert-achete" role="alert">
  								Produit acheté avec succés !
							</div>
                            <div class="alert alert-danger" id="alert-champ-vide" role="alert">
  								Il faut saisir tous les champs
							</div>
		                </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/acceuil_js/achete.js"></script>

	</body>
</html>