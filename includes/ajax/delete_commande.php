<?php
require_once '../init.inc.php';

$id_commande=secure($_POST["id"]);
if ($conn->query("DELETE FROM `commande` where id_commande=".$id_commande."")===true) 
{
    echo 'success';
}

?>