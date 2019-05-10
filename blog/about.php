<!DOCTYPE html>
<html lang="en" class="no-js">
	
	<?php include('header.php') ?>
	<body class="all">

		<div class="logo-wrap">
			<div class="container text-center">
				<h1 class="title1 ">MYI BATTLE</h1>
				<h2 class="title2">ABOUT</h2>
			</div>
		</div>

		<?php include('menu.php') ?>
		
		
		<div class="site-main-container">

			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12 post-list">

							<div class="about">
								<p class="p2">MYI Battle is the simplest way to start, manage, and find esports tournaments. This is our official blog.</p>

								<p class="p2 mt-30">Oficial Site: <a href="">www.myibattle.com</a></p>
								
							</div>

							<h6 class="title mt-30">Writers</h6>

							<div class="row">
								<?php for ($i=0; $i < 6; $i++) { ?>
								<div class="col-md-4 col-sm-6 col-12 mb-15">

									<div class="card-editor">
										<a href="author.php">
											<div class="imgautor2 align-self-center" style="background-image: url('assets/img/author/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
											</div>
										</a>
										<a href="author.php"><h3 class="nameautor">Name Author</h3></a>
										<a href="" class="btn btn-two"><i class="fab fa-twitter mr-10"></i>Follow</a>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>					
					</div>
				</div>
			</section>

		</div>
		
	<?php include('footer.php') ?>

	<?php include('scripts.php') ?>

	</body>
</html>