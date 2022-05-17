<?php
require_once '../init.inc.php';

if (!isset($_SESSION['id_user'])) {
    echo 'connect';
}
else
{
    // header('location:../ajax/ajoute_pannier.php');
    $id_product=secure($_POST["id"]);
    $sql = "INSERT INTO `pannier`(`id_user`, `id_prod`) VALUES (".$_SESSION['id_user'].",".$id_product.")";
    if ($conn->query($sql) === TRUE) {
        echo "succes";
    }
}





?>