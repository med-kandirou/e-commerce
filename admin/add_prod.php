<?php

require_once '../includes/init.inc.php';

if (isset($_POST['submit'])) {
    $file=$_FILES['file']['name'];
    $nom=secure($_POST['nom']);
    $desc=secure($_POST['desc']);
    $prix= secure($_POST['prix']);
    $dep=secure($_POST['dep']);
    $quatite=secure($_POST['quantite']);
    $cat=secure($_POST['cat']);



    if($file=='' || $nom=='' || $desc==''|| $prix==''||$dep==''|| $quatite==''||$cat=='')
    {
        header('location:../admin/produit.admin.php?error=champ');
        exit();
    }
$sql = "INSERT INTO `produit`(`nom_prod`, `prix`,`description`, `image`, `quantité_stock`, `departement`, `id_cat`) VALUES ('".$nom."',".$prix.",'".$desc."','".$file."',".$quatite.",'".$dep."',".$cat.")";
if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES['file']['tmp_name'],"../image_prod/$file");
    header('location:../admin/produit.admin.php?succes=ajouter');
    exit();
} else {
    echo'<script>alert("Ressayez");</script>';
}
    
}




?>