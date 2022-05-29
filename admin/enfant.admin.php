<?php require_once 'header.admin.php'; ?>
<div class="container"> 
    <div class="row" style="margin-top: 90px;">
        <img src="../image_site/kids_banner.jpg" class="img-responsive" alt="banner" id="kids_banner"> 
    </div>

</div>

<?php 
require_once '../includes/init.inc.php';

for ($i=0; $i < count($cat); $i++) { 
    getproduct_user('enfant',$cat[$i],'#78C0E0');
}

require_once 'footer.admin.php';

?>