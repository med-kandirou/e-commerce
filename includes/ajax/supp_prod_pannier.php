<?php
require_once '../init.inc.php';

$id_product=secure($_POST["id"]);

if ($conn->query("DELETE FROM `pannier` WHERE id_user=".$_SESSION['id_user']." AND id_prod=".$id_product."")===true) 
{
    echo 'success';
}

