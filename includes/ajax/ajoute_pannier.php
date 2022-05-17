<?php
require_once '../init.inc.php';

if (!isset($_SESSION['id_user'])) 
{
    echo 'connect';
}
else
{
    $id_product=secure($_POST["id"]);
    $conn->query("INSERT INTO `pannier`(`id_user`, `id_prod`)VALUES(".$_SESSION['id_user'].",".$id_product.")");
    echo 'succes';
        
}



?>