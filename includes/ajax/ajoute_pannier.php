<?php
require_once '../init.inc.php';

if (!isset($_SESSION['id_user'])) 
{
    echo json_encode(array("statusCode"=>0));
}
else
{
    $id_product=secure($_POST["id"]);
    $sql = "INSERT INTO `pannier`(`id_user`, `id_prod`) VALUES (".$_SESSION['id_user'].",".$id_product.")";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("statusCode"=>1));
    }
}



?>