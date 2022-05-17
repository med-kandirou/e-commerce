<?php
require_once '../init.inc.php';

if (!isset($_SESSION['id_user'])) 
{
    echo 'non-connect';
}
else
{
    echo 'connect';
}

?>