<?php
require_once '../init.inc.php';

$id_commande=secure($_POST["id"]);
if ($conn->query("UPDATE `commande` SET `etat`='en cours' WHERE id_commande=".$id_commande."")===true) 
{
    echo 'success';
}

?>