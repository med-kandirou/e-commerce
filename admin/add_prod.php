<?php

require_once '../includes/init.inc.php';

if (isset($_POST['submit'])) {
    $file=$_FILES['file']['name'];
    $nom=secure($_POST['nom']);
    $prix= secure($_POST['prix']);
    $dep=secure($_POST['dep']);
    $quatite=secure($_POST['quantite']);
    $cat=secure($_POST['cat']);



$sql = "INSERT INTO `produit`(`nom_prod`, `prix`, `image`, `quantité_stock`, `departement`, `id_cat`) VALUES ('".$nom."',".$prix.",'".$file."',".$quatite.",'".$dep."',".$cat.")";
if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES['file']['tmp_name'],"../image_prod/$file");
    header('location:../admin/produit.admin.php');
    exit();
} else {
    echo'<script>alert("Ressayez");</script>';
}
    
}




?>