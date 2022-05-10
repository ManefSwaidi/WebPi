

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Equipes</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Preloader-->
	
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
								Modifier Equipe
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="badge bg-primary text-wrap fs-4" style="width: 5rem;">						<?php echo $_GET['id_voy']; ?>
  </div>
			<div class="contact-page-form-wrapper">
				<form action="modifier-voy1.php" method="post">
					<div class="row">

						
								<div class="col-md-6">
							<input type="text" placeholder="Nom De Equipe" name="depart" value="<?php echo $_GET['depart']; ?>">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Nom de Reservation" name="destination" value="<?php echo $_GET['destination']; ?>">
						</div>
												<div class="col-md-6">
Date de Debut De Reservation
						</div>
						<div class="col-md-6">
							Date de Fin De Reservation
						
						</div>

						<div class="col-md-6">
  <input type="datetime-local" id="date_sortie" name="date_sortie" value="<?php echo $_GET['date_sortie']; ?>">

						</div>
						<div class="col-md-6">
  <input type="datetime-local" id="date_retour" name="date_retour" value="<?php echo $_GET['date_retour']; ?>">

						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Membres Total" name="prix" value="<?php echo $_GET['prix']; ?>">
						</div>
						<div class="col-md-12">
							<textarea  placeholder="Description" name="description" > <?php echo $_GET['description']; ?>"</textarea>
						</div>
						<div class="contact-page-form-btn text-center">
							<button type="submit">Envoyer</button>
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
