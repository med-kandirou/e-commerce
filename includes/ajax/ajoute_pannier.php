<?php
require_once '../config.inc.php';


if (!isset($_SESSION['id_user'])) {
    echo 'connect';
}
else
{
    $id_product=secure($_POST['id']);
    $sql = "INSERT INTO `pannier`(`id_user`, `id_prod`) VALUES (".$_Session['id'].",".$id_product.")";
    if ($conn->query($sql) === TRUE) {
        echo "succes";
    } else {
        echo "failed";
    }
}




?>