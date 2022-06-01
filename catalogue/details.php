<?php
    require_once '../includes/init.inc.php';

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $img='';
        $nom='';
        $prix=0;
        $quantité=0;
        $departement='';
        $desc='';

        $result=$conn->query("SELECT `id_produit`, `nom_prod`,`description`,`prix`,`image`, `quantité_stock`,`departement` FROM `produit` WHERE `id_produit`=".$id."");
        if ($result->num_rows>0) {
            while($row = $result->fetch_assoc()) {
            $img=$row["image"];
            $nom=$row["nom_prod"];
            $prix=$row["prix"];
            $quantité=$row["quantité_stock"];
            $departement=$row["departement"];
            $desc=$row['description'];
            }
        } 
    }

?>
<html lang="en">

<head>
  <title><?php echo nom_site ?></title>
  <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../style/acceuilstyle/details.css">
</head>
<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="<?php echo '../image_prod/'.$img.'';?>" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1><?php echo $nom ?></h1>
        <h2>Catégorie:<?php echo $departement ?></h2>
        <p><?php echo $desc ?></p><br>
        
        <p>Qantité :<span><?php echo $prix ?></span>pièces</p>
      </div><br>
      <div class="product-price-btn">
        <p><span><?php echo $quantité ?></span>MAD</p>
        <br><br>
        <button type="button" id="poursuivre" value="<?php echo $id ?>">Acheter <i class="bi bi-box-arrow-right"></i></button>
        <br>
      </div>
    </div>
  </div>
</body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/acceuil_js/achete.js"></script>

</html>
