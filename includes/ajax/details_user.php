<?php
require_once '../init.inc.php';

$id_user=secure($_POST["id"]);

$result = $conn->query("SELECT `id_user`, `nom`, `prenom`, `email` FROM `user` WHERE id_user=".$id_user."");

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "Numéro: " . $row["id_user"]. "\n".
            "Nom: ".$row["nom"]. "\n".
            "Prenom: ".$row["prenom"]. "\n".
            "Email: ".$row["email"]."\n";  
    }
  } 












?>