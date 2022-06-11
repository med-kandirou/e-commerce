<?php
require_once '../init.inc.php';

$id_user=secure($_POST["id"]);
if ($conn->query("DELETE FROM `user` WHERE id_user=".$id_user."")===true) 
{
    echo 'success';
}

?>