<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-85 sect">
		            	<div class="box1">
							<div class="row">
								<div class="col-md-2 col-sm-12 col-12 text-center align-self-center">
									<h3 class="titleh3 text-center">NameUser</h3>

									<div class="avatar1">
						              <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1"><!--  head -->

				                      <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2"><!-- face -->

				                      <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3"><!-- body -->
				                  	</div>

				                  	<a href="" class="alink"  role="button" id="sharer2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
				            		<div class="dropdown-menu drowsharer" aria-labelledby="sharer2">
									    <a class="dropdown-item" href="#"><i class="fab fa-facebook-f"></i></a>
									    <a class="dropdown-item" href="#"><i class="fab fa-google-plus-g"></i></a>
									    <a class="dropdown-item" href="#"><i class="fab fa-discord"></i></a></a>
									  </div>
								</div>

								<div class="col-md-10 col-sm-12 col-12">	            		
									<div class="box9" id="previaimg" style="background-image: url('assets/img/no-back.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
					                	<div class="box-content">
					                		<div class="text-right end">
						                		<label class="label1 c-1">Playing on MYI BATTLE Since <br> 04/19/2019 </label>
					                		</div>
					                	</div>
					            	</div>
								</div>
							</div>
			      		</div>
		            	

							<div class="input-group mtb-20">
							  <input type="search" class="form-control input-one" placeholder="&#xf002; Search" id="search">
							  <div class="input-group-append">
							    <button class="btn btn-light btn-three" type="button" onclick="viewlist()"><i class="fas fa-th-list"></i></button>
							  </div>
							  <div class="input-group-append">
							    <button class="btn btn-light btn-three" type="button" onclick="viewgrid()"><i class="fas fa-th-large"></i></button>
							  </div>
							  
							</div>
						</div>
						
					<div class="container-fluid sect pt-0">

						<div class="mtb-30 " id="viewlist">
							<h4 class="titleh4 mb-20">REGISTERED TOURNAMENTS</h4>

							<div class="table-wrap mb-30">
								<div class="table-responsive">
									<table id="tablelist3" class="table  display mb-30">
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
											<?php } ?>

										</tbody>
									</table>
								</div>
							</div>	
						</div>

						<div class="mtb-30" id="viewgrid">
							<h4 class="titleh4 mb-20">REGISTERED TOURNAMENTS</h4>
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
						</div>
				     </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

		<script>
			$('#tablelist3').DataTable( {
    		    dom: 'Bfrtip',
		        buttons: [
		            // 'pageLength'
		        ],
		        "searching": false,
		        "order": [[ 2, "desc" ]],
		    } );



		    $(document).ready(function() {

				$('#viewgrid').addClass('hiddenl');

				 var table = $('#tablelist3').DataTable();
			     
			    $('#tablelist3 tbody').on('click', 'tr', function () {
			        var data = table.row( this ).data();
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


