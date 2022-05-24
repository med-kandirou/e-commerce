<?php

require_once '../init.inc.php';


$id=secure($_POST['id']);
$tele=secure($_POST['tele']);
$quantité=secure($_POST['quantité']);
$adress=secure($_POST['adress']);
$code=secure($_POST['code']);
$mydate=date("Y/m/d");
$sql = "INSERT INTO `commande`(`id_user`, `id_produit`, `date_demmande`, `quantité`, `numero`, `adresse`, `code_postal`) VALUES
                              (".$_SESSION['id_user'].",".$id.",'".$mydate."',".$quantité.",'".$tele."','".$adress."',".$code.")";

if ($conn->query($sql)===TRUE) {
    echo "added";
}
else
{
    echo 'fail';
}


?>