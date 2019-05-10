<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="home">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid splr">
				      	<div class="homenavmov">
				      		<div id="carouselhome" class="carousel slide" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselhome" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselhome" data-slide-to="1"></li>
							    <li data-target="#carouselhome" data-slide-to="2"></li>
							    <li data-target="#carouselhome" data-slide-to="3"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <a href=""><img src="assets/img/carousel/1.JPG" class="d-block w-100" alt="..."></a>
							    </div>
							    <div class="carousel-item">
							      <a href=""><img src="assets/img/carousel/1.JPG" class="d-block w-100" alt="..."></a>
							    </div>
							    <div class="carousel-item">
							      <a href=""><img src="assets/img/carousel/1.JPG" class="d-block w-100" alt="..."></a>
							    </div>
							    <div class="carousel-item">
							      <a href=""><img src="assets/img/carousel/1.JPG" class="d-block w-100" alt="..."></a>
							    </div>
							  </div>
							</div>
				      	</div>

				      	<div class="sect">
							<a href="" class="category">Recents</a>

				      		<div class="row">
				      			<?php for ($i=0; $i < 3 ; $i++) { ?>
					      			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
<!-- 					      				<a href="#" data-toggle="popover" aria-haspopup="true" data-placement="bottom" aria-expanded="false" data-trigger="hover" data-content="

					      				<div class='container mtb-20'>
					      					<h3 class='plight mb-20'>Liga Competitiva Free Fire</h3>
					      					<img class='img-fluid mtb-10' src='assets/img/products/1.png' alt=''>
											<ul class='filters'>

													<li class='item-filter fil-active''><a href=''>Overwiews</a>
													</li>

													
												</ul>
					      				</div>	"> -->

					      				<a href="details-tournament.php">
						      				<div class="card-products">
				                                <div class="products-thumbnail">
				                                    <div class="products-img">
				                                        <div class="etiqueta">
				                                            <span class="featured">in 5 hours</span>
				                                        </div>
				                                        <div class="imgproducts d-block " style="background-image: url('assets/img/products/1.png'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
				                                        </div>
				                                    </div>
				                                </div>
				                            
					                            <div class="detalles">
					                                <h3 class="title">Liga Competitiva Free Fire | <span class="cant">2500 Diamantes</span></h3>
					                            </div>

					                        </div>
				                        </a>

				                        <a href="details-organization.php">
				                        	<div class="user align-self-center">
				                        		<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;"></div>
				                        		<h4 class="nameuser text-left">MYI Entertaiment</h4>
				                        	</div>
				                    	</a>
					      			</div>
				      			<?php } ?>	
				      		</div>

				      		<img class="img-fluid2" src="assets/img/separator.png" alt="separator">

				      	</div>

				  
				      	<div class="sect">
							<a href="" class="category">Actives</a>

				      		<div class="row">
				      			<?php for ($i=0; $i < 3 ; $i++) { ?>
					      			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					      				<a href="details-tournament.php">
						      				<div class="card-products">
				                                <div class="products-thumbnail">
				                                    <div class="products-img">
				                                        <div class="etiqueta">
				                                            <span class="featured">in 5 hours</span>
				                                        </div>
				                                        <div class="imgproducts d-block " style="background-image: url('assets/img/products/1.png'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
				                                        </div>
				                                    </div>
				                                </div>
				                            
					                            <div class="detalles">
					                                <h3 class="title">Liga Competitiva Free Fire | <span class="cant">2500 Diamantes</span></h3>
					                            </div>

					                        </div>
				                        </a>
				                        <a href="details-user2.php">
				                        	<div class="user align-self-center">
				                        		<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;"></div>
				                        		<h4 class="nameuser text-left">MYI Entertaiment</h4>
				                        	</div>
				                    	</a>
					      			</div>
				      			<?php } ?>	
				      		</div>
				      		<img class="img-fluid2" src="assets/img/separator.png" alt="separator">
				      	</div>
				  

				      	<div class="sect">
							<a href="" class="category">Top Games</a>

				      		<div class="row">
				      			<?php for ($i=0; $i < 9 ; $i++) { ?>
					      			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					      				<a href="#">
						      				<div class="img-top d-block" style="background-image: url('assets/img/products/1.png'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
				                            </div>
				                        </a>
					      			</div>
				      			<?php } ?>	
				      		</div>
				      		<img class="img-fluid2" src="assets/img/separator.png" alt="separator">
				      	</div>
				 
				      	<div class="sect4 text-center">
				      		<h3 class="title3 text-center">Looking for more??</h3>
				      		<h4 class="title4 text-center">We have daily recommendations for your favourite titles.</h4>
				      	</div>


				      	<div class="sect5">
				      		<div class="row">
				      			<?php for ($i=0; $i < 16 ; $i++) { ?>
					      			<div class="col-lg-3 col-md-4 col-sm-4 col-12">
					      				<div class="img-logo d-block" style="background-image: url('assets/img/clients/1.JPG'); background-repeat:no-repeat;  background-size: contain; background-position: center center;">
				                        </div>
					      			</div>
				      			<?php } ?>	
				      		</div>
				      	</div>
				    </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

	</body>
</html>


