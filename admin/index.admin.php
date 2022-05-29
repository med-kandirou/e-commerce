<?php
require_once '../includes/init.inc.php';
if (!isset($_SESSION['id_user'])) {
  header('location:../index.php');
  exit();
}
else{
	if ($_SESSION['role']==1) {
		header('location:../404.html');
		exit();
	}
	else
	{
		require_once 'header.admin.php';
	
?>

<link rel="stylesheet" href="../style/acceuilstyle/owl.carousel.min.css">
<link rel="stylesheet" href="../style/acceuilstyle/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="../style/acceuilstyle/style.css">
<link rel="stylesheet" href="../style/acceuilstyle/styleAcceuil2.css">


<div class="container-fluid" id="img-banner">
	<div class="row">
		<div class="col-md-7">
			<img src="../image_site/electro.png" alt="logo" height="400px">
		</div>
		<div class="col-md-5" id="txts">
			<p id="txt-exc">Exclusively availible on kandirou store</p>
			<p id="txt-life"><b>life is short buy something</b></p>
		</div>
	</div>
</div>

		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="featured-carousel owl-carousel">
							<div class="item">
								<div class="work-wrap d-md-flex">
									<div class="img order-md-last" style="background-image: url(../image_site/work-1.jpg);"></div>
									<div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
										<div class="desc w-100">
											<h2 class="mb-4">Define <br> Your Budget</h2>
											<p class="h5">Call: 0123 456 78901</p>
											<p class="h5 mb-4">Email Address: email@info.com</p>
											<div class="row justify-content-end">
												<div class="col-xl-8">
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
											<p>
												<button type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Shop the collection Outline</button>
												<button type="button" class="btn btn-dark mb-2 py-3 px-4">Learn More</button>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work-wrap d-md-flex">
									<div class="img order-md-last" style="background-image: url(../image_site/work-2.jpg);"></div>
									<div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
										<div class="py-md-5">
											<h2 class="mb-4">Kids <br> Collection</h2>
											<p class="h5">Call: 0123 456 78901</p>
											<p class="h5 mb-4">Email Address: email@info.com</p>
											<div class="row justify-content-end">
												<div class="col-xl-8">
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
											<p>
												<button type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Shop the collection Outline</button>
												<button type="button" class="btn btn-dark mb-2 py-3 px-4">Learn More</button>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work-wrap d-md-flex">
									<div class="img order-md-last" style="background-image: url(../image_site/work-3.jpg);"></div>
									<div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
										<div class="py-md-5">
											<h2 class="mb-4">Ladies <br> Collection</h2>
											<p class="h5">Call: 0123 456 78901</p>
											<p class="h5 mb-4">Email Address: email@info.com</p>
											<div class="row justify-content-end">
												<div class="col-xl-8">
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
											<p>
												<button type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Shop the collection Outline</button>
												<button type="button" class="btn btn-dark mb-2 py-3 px-4">Learn More</button>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work-wrap d-md-flex" >
									<div class="img order-md-last" style="background-image: url(../image_site/work-4.jpg);"></div>
									<div class="text text-left text-lg-right p-4 px-xl-5 d-flex align-items-center">
										<div class="py-md-5">
											<h2 class="mb-4">Ladies <br> Collection</h2>
											<p class="h5">Call: 0123 456 78901</p>
											<p class="h5 mb-4">Email Address: email@info.com</p>
											<div class="row justify-content-end">
												<div class="col-xl-8">
													<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
											<p>
												<button type="button" class="btn btn-outline-dark mb-2 py-3 px-4">Shop the collection Outline</button>
												<button type="button" class="btn btn-dark mb-2 py-3 px-4">Learn More</button>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


	<h1 id="caract">Nos Caractéristiques</h1>
		<section class="caracteristiques">
			<div class="container">
				<div class="row">
						<div class="col-md-6" >
							<img src="../image_site/qualite.png" id="qualite">
						</div>
						<div class="col-md-6">
							<h3 id="titlequal">Qualité</h3>
							<p id="txt_cach">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi rerum voluptas deleniti dicta dolore magni quae amet cumque facere. Accusamus obcaecati autem, voluptatum atque quas eius magni animi sequi architecto! </p>
						</div>
				</div>
				<div class="row" style="margin-top: 90px;">
					<div class="col-md-6"  >
						<h3 id="titlecach">Cash On delivery</h3>
						<p id="txt_del">Le cash on delivery est un moyen de paiement proposé éventuellement dans le cadre de l'activité e-commerce et par lequel le paiement des articles commandés est réalisé auprès du livreur. Au sens strict du terme, le cash on delivery induit la réalisation d'un paiement en espèces (cash).</p>
					</div>
					<div class="col-md-6">
						<img src="../image_site/cash-on-selivery.png" id="cash">
					</div>
				</div>

				<div class="row" style="margin-top: 90px;">
					<div class="col-md-6" >
							<img src="../image_site/livraison.png" id="liv" >
						</div>
						<div class="col-md-6">
							<h3 id="titleliv">Livraison Gratuite</h3>
							<p id="liv_txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi rerum voluptas deleniti dicta dolore magni quae amet cumque facere. Accusamus obcaecati autem, voluptatum atque quas eius magni animi sequi architecto! </p>
						</div>
				</div>

			
			</div>
		</section>
<?php  require_once 'footer.admin.php'; }}?>

  
  



