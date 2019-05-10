<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>
		<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/select2-bootstrap.css">

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
	            	<div class="container-fluid sect pt-85">
                    	<div class="row details">
                    		<div class="col-lg-1 col-md-2 col-sm-2 col-2 text-center user align-self-center">
                    			<a href="#">
                        			<img src="assets/img/users/1.jpg" class="img-user rounded-circle" alt="">
                        		</a>
                    		</div>

                    		<div class="col-lg-8 col-md-7 col-sm-7 col-10 user align-self-center">
                    			<h2 class="nameuser">NameTeam</h2>
                        		<span class="span1 d-block">Description</span>
                        		<span class="p11">Call of Duty: Black Ops 4</span>
                    		</div>
                    		<div class="col-lg-3 col-md-3 col-sm-3 col-12 user align-self-center alimov2">
                    			
                    			<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-10" data-target="#modal-confirm-edit-team" data-toggle="modal">Edit Team</button>

                    			<button type="button" class="btn btn-sm btn-light btn-one f-14 mtb-10" data-target="#modal-invite-player" data-toggle="modal">Invite</button>
                    		</div>
                    	</div>

                    	<div class="">

                    		<div class="sponsor1 border1 mb-20" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
							</div>

                    		<div class="cover border1" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
							</div>
                    	</div>


                    	<div class="box1 mtb-20">
                    		 <ul class="nav nav-pills det-1 nav-justified mt-30" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="team-roster-tab" data-toggle="pill" href="#team-roster" role="tab" aria-controls="team-roster" aria-selected="true">TEAM ROSTER</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="media-team-tab" data-toggle="pill" href="#media-team" role="tab" aria-controls="media-team" aria-selected="false">media</a>
									</li>
									

								</ul>

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active cont-tab2" id="team-roster" role="tabpanel" aria-labelledby="team-roster-tab">

										<div class="row">
											<?php for ($i=0; $i < 6 ; $i++) { ?>
						  					<div class="col-lg-2 col-md-3 col-sm-6 col-12">
						  						<div class="border1 text-center mb-20">
						  							<a href="#modalonly" data-toggle="modal">
						  							<span class="spanp d-block mt-20">Captain</span>
							  					 	<div class="avatar3">
								                      <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1-3"><!--  head -->

								                      <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2-3"><!-- face -->

								                      <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3-3"><!-- body -->
								                 	</div>

								                  <span class="spanp d-block">NameUser</span>
								                  <span class="span1">Name Team</span>
							                 	</a>
						  						</div>
						  					</div>
						  					<?php } ?>
							  			</div>
									</div>
									<div class="tab-pane fade cont-tab2" id="media-team" role="tabpanel" aria-labelledby="media-team-tab">

										<h4 class="titleh4 mtb-10">MEDIA</h4>

										<div class="row m-0">
							      			<?php for ($i=0; $i < 4 ; $i++) { ?>
								      			<div class="col-lg-3 col-md-4 col-sm-4 col-12 ">
								      				<a href="assets/img/stats/1.JPG" data-toggle="lightbox" data-gallery="example-gallery">
								      					<div class="img-logo d-block" style="background-image: url('assets/img/stats/1.JPG'); background-repeat:no-repeat;  background-size: contain; background-position: center center;">
							                        </div>
							                    	</a>
								      			</div>
							      			<?php } ?>	
							      		</div>
									</div>
								</div>
                    	</div>
	            	</div>
				    
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>
		<script type="text/javascript" src="assets/js/select2.full.js"></script>
		<script src="assets/js/ekko-lightbox.min.js"></script>
		
		<script>
			 $(document).ready(function() {
	 		

				$.fn.select2.defaults.set( "theme", "bootstrap" );

				var placeholder = "";


				$( ".select2-single, .select2-multiple" ).select2( {
				    placeholder: placeholder,
				    width: null,
				    containerCssClass: ':all:'
				} );

				$('select:not(.normal)').each(function () {
	                $(this).select2({
	                    dropdownParent: $(this).parent()
	                });
	            });
            });
		</script>

	</body>
</html>