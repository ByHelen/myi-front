<!DOCTYPE html>
<html lang="en" class="no-js">
	
	<?php include('header.php') ?>
	<body class="all">

		<div class="logo-wrap">
			<div class="container text-center">
				<h1 class="title1 ">MYI BATTLE</h1>
				<div class="imgautor2 align-self-center" style="background-image: url('assets/img/author/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
				</div>
				<h2 class="title2">Name Author</h2>
			</div>
		</div>

		<?php include('menu.php') ?>
		
		
		<div class="site-main-container">

			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<div class="latest-post-wrap">
								<h4 class="cat-title">Stories for Name Autor</h4>

								<?php include('views/v-cards-post.php') ?>

							</div>
						</div>

						<div class="col-lg-4">
							<div class="sidebars-area">
								
								<div class="single-sidebar-widget most-popular-widget">
									<div class="single-list">
										<div class="details pl-0">
											<h6 class="mb-20 h6-1">Name Author</h6>
											<p class="text-justify">MYI Battle is the simplest way to start, manage, and find esports tournaments. This is our official blog.</p>
											<a href="" class="btn btn-two"><i class="fab fa-twitter mr-10"></i>Follow</a>
										</div>
									</div>
								</div>

								<?php include('views/v-bar-right.php') ?>
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