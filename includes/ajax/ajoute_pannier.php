<?php
require_once '../init.inc.php';

$id_product=secure($_POST["id"]);
if ($conn->query("INSERT INTO `pannier`(`id_user`,`id_prod`)VALUES(".$_SESSION['id_user'].",".$id_product.")")===true) 
{
    echo 'succes';
}








?>