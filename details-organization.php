<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-60 splr">
		            	<div class="cover" style="background-image: url('assets/img/carousel/1.JPG'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
						</div>
				     </div> 

				     <div class="container-fluid sect">
		            	<div class="row details">
                    		<div class="col-lg-1 col-md-2 col-sm-2 col-2 text-center user align-self-center">
                    			<a href="#">
                        			<img src="assets/img/users/1.jpg" class="img-user rounded-circle" alt="">
                        		</a>
                    		</div>

                    		<div class="col-lg-8 col-md-7 col-sm-7 col-10 user align-self-center">
                    			<a href=""><h2 class="nameuser">MYI Entertaiment</h2></a>
                        		<a href="" class="btn btn-sm btn-light btn-three">Follow</a>
                        		<span class="span1 ml-10">4600 Followers</span>
                    		</div>

                    		<div class="col-lg-3 col-md-3 col-sm-3 col-12 user align-self-center alimov2">
                    			<a href="#modal-manage-organization" class="btn btn-sm btn-light btn-three f-14" data-toggle="modal"><i class="fa fa-cog mr-10"></i>Manage</a>
                    		</div>
                    	</div>

						<div>
							<p class="spanp4 d-block text-justify">Welcome to Infinity Edge highest quality E-Sports, We are providing you with fair brackets " Pre-mades teams Vs Pre-mades teams " " Free agents " Vs " Free Agents " For the Free Agents : you are allowed to play with your friends, Just leave your in game name and your friends's as well on the discord premade channel, then the organizer will put you together. Join our discord to be a part of our weakly giveaways and to speak with the admins direct</p>

							<ul class="sharer mt-0 mb-0">
								<li><a href="mailto:" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Email"><i class="fa fa-envelope"></i></a></li>

								<li><a href="" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Web Site"><i class="fas fa-globe"></i></a></li>

								<li><a href="" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>

								<li><a href="" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>

								<li><a href="" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Discord"><i class="fab fa-discord"></i></a></li>
							</ul>


							
							<div class="input-group mtb-20">
							  <input type="search" class="form-control input-one" placeholder="&#xf002; Search" id="search">
							  <div class="input-group-append">
							    <button class="btn btn-light btn-three" type="button" onclick="viewlist()"><i class="fas fa-th-list"></i></button>
							  </div>
							  <div class="input-group-append">
							    <button class="btn btn-light btn-three" type="button" onclick="viewgrid()"><i class="fas fa-th-large"></i></button>
							  </div>
							  <div class="input-group-append">
							    <button class="btn btn-light btn-three" type="button"  data-toggle="collapse" data-target="#user-collapse" aria-expanded="false" aria-controls="user-collapse"><i class="fa fa-user"></i></button>
							  </div>
							</div>
						</div>

						<div class="collapse" id="user-collapse">
		  					<div class="card card-body bg-dark box1">
		  						<label class="titleh4 mb-10">Staff</label>
		  						<div class="row">

		  							<?php for ($i=0; $i < 6 ; $i++) { ?>
		  								
				  					<div class="col-lg-2 col-md-3 col-sm-6 col-12">
				  						<div class="border1 text-center mb-20">
				  							<a href="#modalonly" data-toggle="modal">
					  					 	<div class="avatar3">
						                      <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1-3"><!--  head -->

						                      <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2-3"><!-- face -->

						                      <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3-3"><!-- body -->
						                 	</div>
						                  <span class="spanp d-block mb-10">NameUser</span>
					                 	</a>
				  						</div>
				  					</div>
		  							<?php } ?>
					  			</div>
		  					</div>
		  				</div>

		  				<!-- <div class="box-no padlr-30">
								<span class="title4">You don't have any tournaments scheduled!</span>
								<br>
								<span class="span1">Grow your organization with regular competitions and build a loyal playerbase!</span>
								<br>

								<a href="create-tournament.php" class="btn btn-sm btn-light btn-one mtb-20 f-16">Create my tournament</a>
						</div> -->


						<div class="mtb-30 " id="viewlist">
							<h4 class="titleh4 mb-20">UPCOMING TOURNAMENTS</h4>

							<div class="table-wrap mb-30">
								<div class="table-responsive">
									<table id="tablelist" class="table  display mb-30">
										<thead>
											<tr>
												<th>GAME</th>
												<th>NAME</th>
												<th>TYPE</th>
												<th>DATE</th>
												<th>PARTICIPANTS</th>
												<th>STATUS</th>
											</tr>
										</thead>

										<tbody>
											<?php for ($i=0; $i < 5 ; $i++) { ?>
												
											<tr>
												<td class="text-center"><img class="imgtable" src="assets/img/users/1.jpg" alt=""></td>
												<td>IE's Aram Teams&Free Agents[All Random]#A24/11:30AM</td>
												<td>Pre-Mades & Free Agents</td>
												<td class="text-justify">April 24, 2019 @ 2:30 am PDT</td>
												<td class="text-center">0 Teams</td>
												<td class="text-left">
													<span class="label-success">Registration Open</span>
												</td>
											</tr>
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>	

							<h4 class="titleh4 mb-20">PAST TOURNAMENTS</h4>

							<div class="table-wrap mb-30">
								<div class="table-responsive">
									<table id="tablelist2" class="table display mb-30">
										<thead>
											<tr>
												<th>GAME</th>
												<th>NAME</th>
												<th>TYPE</th>
												<th>DATE</th>
												<th>PARTICIPANTS</th>
												<th>STATUS</th>
											</tr>
										</thead>

										<tbody>
											<?php for ($i=0; $i < 5 ; $i++) { ?>
												
											<tr>
												<td class="text-center"><img class="imgtable" src="assets/img/users/1.jpg" alt=""></td>
												<td>IE's Aram Teams&Free Agents[All Random]#A24/11:30AM</td>
												<td>Pre-Mades & Free Agents</td>
												<td class="text-justify">April 24, 2019 @ 2:30 am PDT</td>
												<td class="text-center">0 Teams</td>
												<td class="text-left">
													<span class="label-success">Registration Open</span>
												</td>
											</tr>
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>	
						</div>

						<div class="mtb-30" id="viewgrid">
							<h4 class="titleh4 mb-20">UPCOMING TOURNAMENTS</h4>
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
				                        <a href="details-organization.php">
				                        	<div class="user align-self-center">
				                        		<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;"></div>
				                        		<h4 class="nameuser text-left">MYI Entertaiment</h4>
				                        	</div>
				                    	</a>
					      			</div>
				      			<?php } ?>	
				      		</div>
							<div class="text-right">
								<nav aria-label="Page navigation example">
								  <ul class="pagination justify-content-end">
								    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">Next</a></li>
								  </ul>
								</nav>
							</div>
				      		


							<h4 class="titleh4 mb-20">PAST TOURNAMENTS</h4>
							<div class="row">
				      			<?php for ($i=0; $i < 3 ; $i++) { ?>
					      			<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					      				<a href="details-organization.php">
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
				                        <a href="details-tournament.php">
				                        	<div class="user align-self-center">
				                        		<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;"></div>
				                        		<h4 class="nameuser text-left">MYI Entertaiment</h4>
				                        	</div>
				                    	</a>
					      			</div>
				      			<?php } ?>	
				      		</div>
	
				      		<div class="text-right">
								<nav aria-label="Page navigation example">
								  <ul class="pagination justify-content-end">
								    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item"><a class="page-link" href="#">2</a></li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">Next</a></li>
								  </ul>
								</nav>
							</div>
						</div>


				     </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

		<script>
			$('#tablelist').DataTable( {
    
		    dom: 'Bfrtip',
		        buttons: [
		            // 'pageLength'
		        ],
		        "searching": false,
		        "order": [[ 2, "desc" ]],
		    } );

		    $('#tablelist2').DataTable( {
    
		    dom: 'Bfrtip',
		        buttons: [
		            // 'pageLength'
		        ],
		        "searching": false,
		        "order": [[ 2, "desc" ]],

		    } );



		    $(document).ready(function() {

				$('#viewgrid').addClass('hiddenl');

				 var table1 = $('#tablelist').DataTable();
			     
			    $('#tablelist tbody').on('click', 'tr', function () {
			        var data = table1.row( this ).data();
			         url = 'details-tournament.php';
			         window.location=url;
			    } );

			     var table2 = $('#tablelist2').DataTable();
			     
			    $('#tablelist2 tbody').on('click', 'tr', function () {
			        var data = table2.row( this ).data();
			         url = 'details-tournament.php';
			         window.location=url;
			    } );
			});


			function viewlist() {
				$('#viewlist').removeClass('hiddenl');
				$('#viewlist').addClass('showl');
				$('#viewgrid').addClass('hiddenl');
				$('#viewgrid').removeClass('showl');
			}

			function viewgrid() {
				$('#viewgrid').removeClass('hiddenl');
				$('#viewgrid').addClass('showl');
				$('#viewlist').addClass('hiddenl');
				$('#viewlist').removeClass('showl');
			}
		</script>

	</body>
</html>


