<!DOCTYPE html>
<html lang="en" class="no-js">
	
	<?php include('header.php') ?>
	<body class="all">

		<div class="logo-wrap">
			<div class="container text-center">
				<h1 class="title1 ">MYI BATTLE</h1>
				<h2 class="title2">ARCHIVE</h2>
			</div>
		</div>

		<?php include('menu.php') ?>
		
		
		<div class="site-main-container">

			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<div class="latest-post-wrap">
								<h4 class="cat-title">Top Stories Published</h4>
								<div class="row mt-30">
									<div class="col-md-4">
										<div class="select mb-15">
										    <select>
										        <option value="" selected="" disabled="">Year</option>
										       <option value="">2018</option>
												<option value="">2019</option>
										    </select>
										    <div class="select_arrow">
										    </div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="select mb-15">
										    <select>
										        <option value="" selected="" disabled="">Month</option>
										       <option value="">January</option>
												<option value="">February</option>
										    </select>
										    <div class="select_arrow">
										    </div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="select mb-15">
										    <select>
										        <option value="" selected="" disabled="">Sorted by</option>
										       <option value="">Most Read</option>
												<option value="">Oldest</option>
												<option value="">Latest</option>
										    </select>
										    <div class="select_arrow">
										    </div>
										</div>
									</div>
									
								</div>

								<?php include('views/v-cards-post.php') ?>
							</div>

						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title">Tags</h6>
									<ul class="tags-archive">
										<li><a href="">Tags1</a></li>
										<li><a href="">Tags2</a></li>
										<li><a href="">Tags3</a></li>
									</ul>
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