<!DOCTYPE html>
<html lang="en" class="no-js">
	
	<?php include('header.php') ?>
	<body class="all">

		<div class="logo-wrap">
			<div class="container text-center">
				<h1 class="title1 ">MYI BATTLE</h1>
				<h2 class="title2">FEATURES</h2>
			</div>
		</div>

		<?php include('menu.php') ?>
		
		
		<div class="site-main-container">

			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<div class="latest-post-wrap">
								<h4 class="cat-title">Features</h4>

								<?php include('views/v-cards-post.php') ?>
								
							</div>
						</div>
						
						<div class="col-lg-4">
							<div class="sidebars-area">
								
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Related</h6>
									<?php for ($i=0; $i < 5; $i++) { ?>
									<div class="single-list flex-row d-flex">
										<div class="thumb align-self-center">
											<a href="post.php"><img class="imgthumb" src="assets/img/post/1.jpeg" alt=""></a>
										</div>
										<div class="details">
											<a href="post.php">
												<h6>Introducing Hearthstone Masters</h6>
											</a>
											<ul class="meta">
												<li><span class="fa fa-calendar mr-10"></span>03 April, 2018</li>
												<li><span class="fa fa-comments mr-10"></span>06</li>
											</ul>
										</div>
									</div>
									<?php } ?>
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