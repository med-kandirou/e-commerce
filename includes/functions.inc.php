<?php
require_once 'init.inc.php';



//stocker les categorie dand un array
$cat = array();
$res=$conn->query("select * from categorie"); 
if ($res->num_rows>0){
  while($row = $res->fetch_assoc()) 
  {
    array_push($cat,$row['nom_cat']);
  }
}
//genereate random color


//
function secure($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function exist_Email($email)
{
  global $conn;
  $sql = "select * from user where email='".$email."'";
  $res=$conn->query($sql) ;
  if ($res->num_rows > 0) {
    return true;
  } 
  else{
    return false;
  }
}
function is_true_pass($email,$password)
{
  $conn=new mysqli(servername,username,password,dbname); 
  $sql = "select * from user where email='".$email."'";
  $res=$conn->query($sql);
  if ($res->num_rows>0){
    while($row = $res->fetch_assoc()) 
    {
      if(password_verify($password,$row["password"]))
      {
        $_SESSION['id_user']=$row['id_user'];
        $_SESSION['nom']=$row['nom'];
        $_SESSION['prenom']=$row['prenom'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['role']=$row['role'];


        return $row['role'];
      }
      else
      {
        return false;
      }
    }
  } 
  else 
  {
    return false;
  }
}

//function for get product for anonyme user
function getproduct_anonyme($departement,$categorie,$color)
{
  global $conn;
  $res=$conn->query("select p.id_produit,p.nom_prod,p.prix,p.image,p.quantité_stock,c.nom_cat from produit p ,categorie c where p.departement='".$departement."' and p.id_cat=c.id_cat and nom_cat='".$categorie."'"); 
  if ($res->num_rows>0){
    echo '
    <div class="container-fluid" id="product_slide">
	    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
        <div class="carousel-inner">
          <div class="item carousel-item active">
          <div class="w3-bar w3-border w3-light-grey header" style="background-color:'.$color.';" >
          
          <b>'.$categorie.'</b>
        </div></br>
            <div class="row">';
    while($row = $res->fetch_assoc()) 
    {
      echo '<div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="../image_prod/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'MAD</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary add-pannier1">ajouter au pannier</button></br>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary acheter1">Acheter</button></br>
          '.$row['quantité_stock'].' articles restants</br>
          <progress id="progress" value='.$row['quantité_stock'].' max="100">quantité_stock</progress></br>
        </div>						
      </div></br>	
    </div>';
  }
  echo '</div>		
		</div>	
	</div>
</div>
</div></div>
</div>';
}
}
//function for get product for user connected
function getproduct_user($departement,$categorie,$color)
{
  global $conn;
  $res=$conn->query("select p.id_produit,p.nom_prod,p.prix,p.image,p.quantité_stock,c.nom_cat from produit p ,categorie c where p.departement='".$departement."' and p.id_cat=c.id_cat and nom_cat='".$categorie."'"); 
  if ($res->num_rows>0){
    echo '
    <div class="container-fluid " id="product_slide">
	    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
        <div class="carousel-inner">
          <div class="item carousel-item active">
          <div class="w3-bar w3-border w3-light-grey header" style="background-color:'.$color.';" >
          <b>'.$categorie.'</b>
        </div></br>
            <div class="row">';
    while($row = $res->fetch_assoc()) 
    {
      echo '<div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="../image_prod/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'MAD</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary add-pannier2">ajouter au pannier</button></br>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary acheter2">Acheter</button></br>
          '.$row['quantité_stock'].' articles restants</br>
          <progress id="progress" value='.$row['quantité_stock'].' max="100">quantité_stock</progress></br>
        </div>						
      </div></br>	
    </div>';
  }
  echo '</div>		
		</div>	
	</div>
</div>
</div></div>
</div>';
}
}

function mes_produits($id_user)
{
  global $conn;
  $res=$conn->query("SELECT pr.id_produit, pr.nom_prod,pr.prix, pr.quantité_stock ,pr.image from produit pr ,pannier p where pr.id_produit=p.id_prod and pr.id_produit in (SELECT id_prod from pannier where id_user=".$id_user.");"); 
  if ($res->num_rows>0){
    echo '
    <div class="container-fluid " id="product_slide">
	    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
        <div class="carousel-inner">
          <div class="item carousel-item active">
            <div class="row">';
    while($row = $res->fetch_assoc()) 
    {
      echo '<div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="../image_prod/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'MAD</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary acheter3">Acheter</button></br>
          <button type="button" value='.$row['id_produit'].' class="btn btn-danger supprimer">Supprimer</button></br>
          '.$row['quantité_stock'].' articles restants</br>
          <progress id="progress" value='.$row['quantité_stock'].' max="100">quantité_stock</progress></br>
        </div>						
      </div></br>	
    </div>';
  }
  echo '</div>		
		</div>	
	</div>
</div>
</div></div>
</div>';
}
else
{
  echo'<img id="empty_card" src="../image_site/empty-cart.png">';
}
}

function tous_produits()
{
  global $conn;
  $res=$conn->query("SELECT produit.id_produit,produit.nom_prod,produit.prix,produit.image,produit.quantité_stock,produit.departement,categorie.nom_cat FROM produit,categorie WHERE produit.id_cat=categorie.id_cat"); 
  if ($res->num_rows>0){

    echo'
    <table class="table table-hover" style="font-size: 20px;">
    <thead>
      <tr>
        <th>Image</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quatité de stock</th>
        <th>Departement</th>
        <th>Catégorie</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $res->fetch_assoc()) 
    {
      echo'
      <tr>
      <td style="height:40px;width:40px;"><img src="../image_prod/'.$row['image'].'" class="img-fluid"></td>
        <td>'.$row['nom_prod'].'</td>
        <td>'.$row['prix'].'</td>
        <td>'.$row['quantité_stock'].'</td>
        <td>'.$row['departement'].'</td>
        <td>'.$row['nom_cat'].'</td>
        <td><button type="button"  value='.$row['id_produit'].' class="btn btn-danger supp_prod">Supprimer</button></td>
      </tr>
    ';

    }
    echo'</tbody>
    </table>';
}
else
{
  echo '<h1> aucun produit dans le market </h1>';
}
}


function tous_commandes()
{
  global $conn;
  $res=$conn->query("SELECT `id_commande`,`id_produit`, `date_demmande`, `quantité`, `numero`, `adresse`, `code_postal` FROM `commande`"); 
  if ($res->num_rows>0){

    echo'
    <table class="table table-hover" style="font-size: 20px;">
    <thead>
      <tr>
        <th>Numero produit</th>
        <th>Date</th>
        <th>quantité</th>
        <th>téléphone</th>
        <th>Adresse</th>
        <th>Code postal</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $res->fetch_assoc()) 
    {
      echo'
      <tr>
        <td>'.$row['id_produit'].'</td>
        <td>'.$row['date_demmande'].'</td>
        <td>'.$row['quantité'].'</td>
        <td>'.$row['numero'].'</td>
        <td>'.$row['adresse'].'</td>
        <td>'.$row['code_postal'].'</td>

        <td><button type="button" value='.$row['id_commande'].' class="btn btn-success valider_produit">Valider</button></td>
      </tr>
    ';

    }
    echo'</tbody>
    </table>';
}
else
{
  echo '<h2> aucune Commande </h2>';
}
}

function mes_commandes($id_user)
{
  global $conn;
  $res=$conn->query("SELECT `id_commande`,`id_produit`,`id_user`, `date_demmande`, `quantité`, `numero`, `adresse`, `code_postal`FROM `commande` where `id_user`=".$id_user.""); 
  if ($res->num_rows>0){
    echo'
    <table class="table table-hover" style="font-size: 20px;">
    <thead>
      <tr>
        <th>Numero produit</th>
        <th>Date</th>
        <th>quantité</th>
        <th>téléphone</th>
        <th>Adresse</th>
        <th>Code postal</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $res->fetch_assoc()) 
    {//adresse
      echo'
      <tr>
        <td>'.$row['id_produit'].'</td>
        <td>'.$row['date_demmande'].'</td>
        <td>'.$row['quantité'].'</td>
        <td>'.$row['numero'].'</td>
        <td>'.$row['adresse'].'</td>
        <td>'.$row['code_postal'].'</td>

        <td><button type="button" value='.$row['id_commande'].' class="btn btn-danger delete_commande">Supprimer</button></td>
      </tr>
    ';
    }
    echo'</tbody>
    </table>';
}
else
{
  echo '<h2> aucune Commande </h2>';
}
}




?>