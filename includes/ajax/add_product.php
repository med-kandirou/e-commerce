<?php

require_once '../init.inc.php';


$file=$_POST['file'];
$nom=secure($_POST['nom']);
$prix= secure($_POST['prix']);
$desc=secure($_POST['desc']);
$dep=secure($_POST['dep']);
$quatite=secure($_POST['quatite']);
$cat=secure($_POST['cat']);


$sql = "INSERT INTO `produit`(`nom_prod`, `prix`, `description`, `image`, `quantité_stock`, `departement`, `id_cat`) VALUES ('".$nom."',".$prix.",'".$desc."','".$file."',".$quatite.",'".$dep."',".$cat.")";
if ($conn->query($sql) === TRUE) {
    echo "added";
} else {
    echo "failed";
}


?>