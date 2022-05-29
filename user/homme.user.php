<?php
require_once 'header.user.php';
 ?>
<div class="container"> 
    <div class="row">
        <img src="../image_site/banner_homme.jpg" class="img-responsive" alt="banner" id="banner_home">
    </div>

</div>

<?php 
require_once '../includes/init.inc.php';

for ($i=0; $i < count($cat); $i++) { 
    getproduct_user('homme',$cat[$i],'#5EB1BF');
}


require_once 'footer.user.php';
?>
      