<?php

require_once '../init.inc.php';

$nom=secure($_POST['nom']);
$prenom= secure($_POST['prenom']);
$email=secure($_POST['email']);
$pass=password_hash(secure($_POST['pass']),PASSWORD_DEFAULT);

    if(exist_Email($email)==true)
    {
        echo 'exist';
        exit;
    }
    $sql = "INSERT INTO `user`(`nom`, `prenom`, `email`, `password`,`recup`,`role`) VALUES ('".$nom."','".$prenom."','".$email."','".$pass."',".rand().",1)";
    if ($conn->query($sql) === TRUE) {
        echo "succes";
    } else {
        echo "failed";
    }


?>