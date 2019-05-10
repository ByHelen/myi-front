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
		            		<h3 class="titleh3 mt-20">Browse Tournaments</h3>
		            		<label class="span1">Choose your Game</label>

		            		<div class="text-right">
		            			<a href="" class="btn btn-sm btn-light btn-three" data-target="#modal-more-games" data-toggle="modal">More Games</a>
		            		</div>

		            		<ul class="gamesbrows">
		            			<?php for ($i=0; $i < 14; $i++) { ?>
		            			<li>
		            				<a href="">
		            					<div class="img-games" style="background-image: url('assets/img/games/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
																
										</div>
		            				</a>
		            			</li>
		            			<?php } ?>
		            		</ul>


		            		<div class="text-right">
		            			<button class="btn btn-light btn-three mb-10" type="button"  data-toggle="collapse" data-target="#filter-collapse" aria-expanded="false" aria-controls="filter-collapse"><i class="fa fa-filter mr-10"></i>Filters</button>

		            			<button class="btn btn-light btn-three mb-10" type="button"  data-toggle="collapse" data-target="#custom-range-collapse" aria-expanded="false" aria-controls="custom-range-collapse"><i class="fa fa-calendar mr-10"></i>Custom Range</button>
		            			
		            		</div>

		            		<div class="collapse" id="filter-collapse">
			  					<div class="card card-body bg-dark box1">
			  						<label class="titleh4 mb-10">Filters</label>

			  						<div class="row">
			  							<div class="col-md-4">
			  								<span class="span1">REGION</span>

											<select class="custom-select mtb-15" id="">
										        <option value="">Global</option>
										       <option value=""></option>
												<option value=""></option>
										    </select>
											    
			  							</div>
			  							<div class="col-md-4">
			  								<span class="span1">PLATFORM</span>

											<select class="custom-select mtb-15" id="">
										        <option value="">ANY PLATFORM</option>
										       <option value=""></option>
												<option value=""></option>
										    </select>
			  							</div>
			  							<div class="col-md-4">
			  								<span class="span1">ANY FORMAT</span>

											<select class="custom-select mtb-15" id="">
										        <option value="">ANY FORMAT</option>
										       <option value=""></option>
												<option value=""></option>
											</select>
											    
			  							</div>
			  						</div>		  						
			  					</div>
			  				</div>

			  				<div class="collapse" id="custom-range-collapse">
			  					<div class="card card-body bg-dark box1">
			  						<label class="titleh4 mb-10">Custom Range</label>

			  						<div class="row">
			  							<div class="col-md-4">
			  								<span class="span1">FROM</span>
			  								<input type="date" class="form-control input-one mb-10" placeholder="" id="datefrom" name="datefrom">
			  							</div>
			  							<div class="col-md-4">
			  								<span class="span1">TO</span>
			  								<input type="date" class="form-control input-one mb-10" placeholder=""  id="dateto" name="dateto">
			  							</div>
			  							 
			  						</div>
			  					</div>
			  				</div>


			  				<ul class="nav nav-pills det-1 nav-justified mt-30" id="filters-tab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="today-tab" data-toggle="pill" href="#today" role="tab" aria-controls="today" aria-selected="true">today</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="this-week-tab" data-toggle="pill" href="#this-week" role="tab" aria-controls="this-weeks" aria-selected="false">this week</a>
							  </li>

							   <li class="nav-item">
							    <a class="nav-link" id="this-weekend-tab" data-toggle="pill" href="this-weekend" role="tab" aria-controls="this-weekend" aria-selected="false">this weekend</a>
							  </li>
					 
							</ul>

							<div class="tab-content" id="filters-tabContent">
				  				<div class="tab-pane fade show active  cont-tab2" id="today" role="tabpanel" aria-labelledby="today-tab">

				  					<!-- <div class="box-no">
				  						<span class="span1">Whoops! We can't find any tournaments based on your current settings. Please use the filters above to expand your search.</span>
				  					</div> -->

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

				  				<div class="tab-pane fade  cont-tab2" id="this-week" role="tabpanel" aria-labelledby="this-week-tab">

				  					<div class="box-no">
				  						<span class="span1">Whoops! We can't find any tournaments based on your current settings. Please use the filters above to expand your search.</span>
				  					</div>
				  				</div>

				  				<div class="tab-pane fade  cont-tab2" id="this-weekend" role="tabpanel" aria-labelledby="this-weekend-tab">

				  					<div class="box-no">
				  						<span class="span1">Whoops! We can't find any tournaments based on your current settings. Please use the filters above to expand your search.</span>
				  					</div>
				  				</div>
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
