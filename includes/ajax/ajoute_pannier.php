<?php
require_once '../init.inc.php';

$res='';
$id_product=secure($_POST["id"]);

$result = $conn->query("SELECT * FROM `pannier` WHERE `id_user`=".$_SESSION['id_user']." and `id_prod`=".$id_product."");
if ($result->num_rows>0) 
{
    $res='exist';
}
else
{
    $conn->query("INSERT INTO `pannier`(`id_user`,`id_prod`)VALUES(".$_SESSION['id_user'].",".$id_product.")");
    $res='succes';
}
echo $res;











?>