<?php
require_once 'includes/init.inc.php';
session_destroy();
header('location:index.php');
exit(); 
?> 