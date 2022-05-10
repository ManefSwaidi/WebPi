<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Location Terrain</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Preloader-->
	<div class="loading-preloader">
		<div id="loading-preloader">
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
			<div class="line_shape"></div>
		</div>
	</div>
	<!-- Preloader End -->
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>





<!-- Start of contact form section
	============================================= -->
	<section id="contact-page-form" class="contact-page-form-section">
		<div class="container">
			<div class="pr-section-title headline text-center middle-align pera-content pr-text-in">
				<h3 class="title-tag d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								Miracle
							</span>
						</span>
					</span>
				</h3>
				<h2>
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								Ajouter Terrain
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="contact-page-form-wrapper">
				<form action="Controller/ajoutHebergement.php" method="post">
					<div class="row">						
								<div class="col-md-6">
							<input type="text" placeholder="Nom De Votre Terrain" name="titre">
						</div>
						<div class="col-md-6">
						</div>
												<div class="col-md-6">
Date Et Temps Disponible
						</div>
						<div class="col-md-6">
							Date Et Temps Non Disponible						
						</div>

						<div class="col-md-6">
  <input type="datetime-local" id="date_dispo" name="date_dispo">

						</div>
						<div class="col-md-6">
  <input type="datetime-local" id="date_nondispo" name="date_nondispo">

						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Prix Par Personne(Dt)" name="prix">
						</div>
						<div class="col-md-5">
							<input type="file" placeholder="Image" name="image">
						</div>
						<div class="col-md-12">
							<textarea  placeholder="Description De Terrain" name="description" ></textarea>
						</div>
						<div class="contact-page-form-btn text-center">
							<button type="submit" name="btn_insert">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<!-- End of contact form section
	============================================= -->				



	<!-- For Js Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/slick.js"></script>
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/script.js"></script>
	
</body>

<!-- Mirrored from html.themexriver.com/prysm/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 09:56:53 GMT -->
</html>		
