<?php
require_once '../init.inc.php';
$id_product=secure($_POST["id"]);

// $img='';
// $result = $conn->query("SELECT `image` FROM produit WHERE id_produit=".$id_product."");
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     $img=$row["image"];
//   }
// } 

if ($conn->query("DELETE FROM `produit` WHERE id_produit=".$id_product."")===true) 
{
    //unlink('../image_prod/'.$img.'');
    echo 'success';
}

?>