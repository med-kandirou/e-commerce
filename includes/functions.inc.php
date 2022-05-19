<?php
require_once 'init.inc.php';

function secure($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function exist_Email($email)
{
  $conn=new mysqli(servername,username,password,dbname);  
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
function getproduct_anonyme($departement,$categorie,$icon,$color)
{
  $conn=new mysqli(servername,username,password,dbname); 
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
          '.$icon.'
          <b>'.$categorie.'</b>
        </div></br>
            <div class="row">';
    while($row = $res->fetch_assoc()) 
    {
      echo '<div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="./image_site/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'$</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary add-pannier1">ajouter au pannier</button></br>
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
function getproduct_user($departement,$categorie,$icon,$color)
{
  $conn=new mysqli(servername,username,password,dbname); 
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
          '.$icon.'
          <b>'.$categorie.'</b>
        </div></br>
            <div class="row">';
    while($row = $res->fetch_assoc()) 
    {
      echo '<div class="col-sm-3">
      <div class="thumb-wrapper">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
        <div class="img-box">
          <img src="./image_site/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'$</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary add-pannier2">ajouter au pannier</button></br>
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
  $conn=new mysqli(servername,username,password,dbname); 
  $res=$conn->query("SELECT pr.id_produit, pr.nom_prod,pr.prix, pr.quantité_stock ,pr.image
  from produit pr ,pannier p,user u where pr.id_produit=p.id_prod and p.id_user=".$id_user.";"); 
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
          <img src="./image_site/'.$row['image'].'" class="img-fluid" alt="">									
        </div>
        <div class="thumb-content">
          <h4>'.$row['nom_prod'].'</h4>									
          <p class="item-price"><b>'.$row['prix'].'$</b></p>
          <button type="button" value='.$row['id_produit'].' class="btn btn-primary ">Acheter</button></br>
          <button type="button" value='.$row['id_produit'].' class="btn btn-danger ">Supprimer</button></br>
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



?>