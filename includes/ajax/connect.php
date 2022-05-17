<?php

require_once '../init.inc.php';

$email=secure($_POST['email']);
$pass=secure($_POST['pass']);

if(is_true_pass($email,$pass)==1) 
{
    echo '1';
} 
else if(is_true_pass($email,$pass)==2)
{
    echo '2';
}
else
{
    echo 'false';
}

?>