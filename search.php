<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-30">

		            	<div class="sect">
		            		<h3 class="titleh3 mtb-20">Showing Tournaments for "Mario Dash"</h3>

							<div class="row">
	  							<div class="col-md-4 mb-15 align-self-center">
	  								<span class="span1">For</span>

								    <select class="custom-select" id="">
								        <option value="" selected="" disabled="">Game</option>
								       <option value=""></option>
										<option value=""></option>
								    </select>
									   
	  							</div>

	  							<div class="col-md-4 mb-15 align-self-center">
	  								<span class="span1">From</span>

									<select class="custom-select" id="">
								        <option value="">Global</option>
								       <option value=""></option>
										<option value=""></option>
								    </select>
									    
	  							</div>
	  							<div class="col-md-4 mb-15 align-self-center">

	  								<span class="span1">on</span>
	  								<select class="custom-select" id="">
								        <option value="">Any Platform</option>
								       <option value=""></option>
										<option value=""></option>
								    </select>
									    
	  							</div>
	  						</div>	

	  						<div class="col-md-12 mb-30">
								<div class="custom-control custom-checkbox mtb-10 ">
								    <input type="checkbox" class="custom-control-input" id="oldtournaments">
								    <label class="custom-control-label" for="oldtournaments">Show Old Tournaments</label>
							  	</div>
	  						</div>
  								

	  						<div class="row">
				      			<?php for ($i=0; $i < 6 ; $i++) { ?>
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
				                        <a href="details-organization.php">
				                        	<div class="user align-self-center">
				                        		<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;"></div>
				                        		<h4 class="nameuser text-left">MYI Entertaiment</h4>
				                        	</div>
				                    	</a>
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


<div class="modal hide fade modalcustom" id="modal-more-games" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
         <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
         </button>

      <div class="modal-header">
        <h2 class="modal-title">More Games</h2>  
      </div>
      <div class="modal-body">
      	<form action="">
      		
  	      <input type="search" class="form-control input-one mtb-20" placeholder="&#xf002; Search" id="search">        
      	</form>


		<!-- <div class="box-no">
			<span class="span1">No Result Found!</span>
		</div> -->

      	<ul class="gamesbrows2">
			<?php for ($i=0; $i < 5; $i++) { ?>
			<li>
				<a href="">
					<div class="img-games2" style="background-image: url('assets/img/games/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
											
					</div>
				</a>
			</li>
			<?php } ?>
		</ul>
      </div>
    </div>
  </div>
</div>
