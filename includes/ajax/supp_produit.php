<?php
require_once '../init.inc.php';

$id_product=secure($_POST["id"]);
if ($conn->query("DELETE FROM `produit` WHERE id_produit=".$id_product."")===true) 
{
    echo 'success';
}

?>