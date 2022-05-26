<?php
define("nom_site","e-commerce");
define('servername','localhost');
define('username','root');
define('password','');
define('dbname','ecommerce');

$conn=new mysqli(servername,username,password,dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

?>
