<?php 
require_once '../includes/init.inc.php'; 
require_once 'header.user.php';

$dep=$_GET['dep'];
$cat=$_GET['cat'];

if($dep=='homme')
{
    echo '
    <center><h1 style="margin-top:50px;">ESPACE DES HOMMES</h1></center>
    <div class="container"> 
            <div class="row">
                <img src="../image_site/banner_homme.jpg" class="img-responsive" alt="banner" id="banner_home">
            </div>
        </div>';
        getproduct_user($dep,$cat,"#1E1A1D");
}
else if($dep=='femme')
{
    echo '
    <center><h1 style="margin-top:50px;">ESPACE DES FEMMES</h1></center><div class="container"> 
            <div class="row">
                <img src="../image_site/femme_banner.jpg" class="img-responsive" alt="banner" id="banner_home">
            </div>
        </div>';
        getproduct_user($dep,$cat,"#F1558E");
}
else
{
    echo '
    <center><h1 style="margin-top:50px;">ESPACE DES ENFANTS</h1></center>
    <div class="container"> 
            <div class="row">
                <img src="../image_site/kids_banner.jpg" class="img-responsive" alt="banner" id="banner_home">
            </div>
        </div>';
        getproduct_user($dep,$cat,"#39BFD0");
}


require_once 'footer.user.php';
?>