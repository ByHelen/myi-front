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
		            <div class="container-fluid pt-85">
		            	<div class="row">
			            	<div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12 sidebarprofile text-center profile bortm">
			            		<div class="row">
			            			<div class="col-lg-12 col-md-12 col-sm-6 col-6">
					            		<h4 class="titleh4 text-center">NameUser</h4>
					            		<div class="avatar1">
							              <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1"><!--  head -->

					                      <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2"><!-- face -->

					                      <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3"><!-- body -->
					                  	</div>
					            		<a href="" class="alink"  role="button" id="sharer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
					            		<div class="dropdown-menu drowsharer" aria-labelledby="sharer">
										    <a class="dropdown-item" href="#"><i class="fab fa-facebook-f"></i></a>
										    <a class="dropdown-item" href="#"><i class="fab fa-google-plus-g"></i></a>
										    <a class="dropdown-item" href="#"><i class="fab fa-discord"></i></a></a>
										  </div>
										<br>
					            		<a class="btn btn-sm btn-light btn-three f-14 mt-30" href="#modalcustomize" data-toggle="modal">Customize</a>
			            			</div>
			            			<div class="col-lg-12 col-md-12 col-sm-6 col-6">
			            				<div class="nav flex-column nav-pills mt-50" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									      <a class="nav-link active" id="dashboard-tab" data-toggle="pill" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
									       <a class="nav-link" id="wallet-tab" data-toggle="pill" href="#wallet" role="tab" aria-controls="wallet" aria-selected="false">Wallet <span class="fr-1 badge-pill badge-info">0 Coins</span></a>
									      <a class="nav-link" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
									      <a class="nav-link" id="connections-tab" data-toggle="pill" href="#connections" role="tab" aria-controls="connections" aria-selected="false">Connections</a>
									      <a class="nav-link" id="settings-tab" data-toggle="pill" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
									      <a class="nav-link" id="logout">Logout</a>
									    </div>
			            			</div>
			            		</div>
			            		
			            	</div>	
			            	<div class="col-xl-10 col-lg-9 col-md-9 col-sm-12 col-12 padlr-50 ">
			            		<div class="tab-content cont-tab2" id="v-pills-tabContent">
							      <div class="tab-pane fade  show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
							      	<div class="row">
							      		<div class="col-lg-3 align-self-center">
							      			<h3 class="titleh3">NameUser</h3>
							      			<label class="span1">0 XP</label>
							      		</div>
							      		<div class="col-lg-9">
							      			<div class="box1">
							      				<p class="text-center span1">COMPETE TO EARN MORE XP</p>
							      				<ul class="ullevel">
							      					<li><p class="title20 text-left">LEVEL1</p></li>
							      					<li><p class="title20 text-right">LEVEL2</p></li>
							      				</ul>

							      				<div class="progress pro-per">
												  <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												  </div>
												</div>

												<div class="text-center mt-5-1">
												  	<span class="span1">1000 / 5000 XP</span>
												</div>
							      			</div>
							      		</div>
							      	</div>

							      	 <ul class="nav nav-pills det-1 nav-justified mt-30" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="notifications-tab" data-toggle="pill" href="#notifications" role="tab" aria-controls="notifications" aria-selected="true">NOTIFICATIONS</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="tournaments-tab" data-toggle="pill" href="#tournaments" role="tab" aria-controls="tournaments" aria-selected="false">JOINED TOURNAMENTS</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="my-teams-tab" data-toggle="pill" href="#my-teams" role="tab" aria-controls="my-teams" aria-selected="false">MY TEAMS</a>
										</li>

									</ul>

									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade show active cont-tab2" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
										  
										    <div class="custom-control custom-checkbox mtb-15">
											    <input type="checkbox" class="custom-control-input" id="shownotif" >
											    <label class="custom-control-label" for="shownotif">Show critical notifications (past 7 days)</label>
											  </div>

										    <div class="box-no">
											    <p>When there are critical actions that you need to take for your active tournaments, we will always notify you here.</p>
											    <p>No critical notifications currently</p>
											</div>
										</div>

										<div class="tab-pane fade cont-tab2" id="tournaments" role="tabpanel" aria-labelledby="tournaments-tab">
											 
											  <div class="box-no">
											    <p>No joined tournaments</p>
											</div>
										</div>

										<div class="tab-pane fade cont-tab2" id="my-teams" role="tabpanel" aria-labelledby="my-teams-tab">
											<!-- <div class="box-no">
											    <p>No teams avaliable</p>
											</div> -->

											<div class="text-right">
												<button class="btn btn-sm btn-light btn-one" data-target="#modal-create-team" data-toggle="modal" >Create New Team</button>
											</div>

											<div class="row">
											<?php for ($i=0; $i < 4; $i++) { ?>

												<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
													<a href="details-team.php">
														<div class="card-part">
															<div class="head">
																<h5 class="titleh5">FamilyTokek</h5>
															</div>
															<div class="img-user mb-20" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
																
															</div>
														</div>
													</a>
												</div>
											<?php } ?>

										</div>
											<div class="text-center mtb-50">
												<button class="btn btn-sm btn-light btn-three f-14">Load More</button>
											</div>
											 
										</div>
									</div>

							      </div>
							       <div class="tab-pane fade " id="wallet" role="tabpanel" aria-labelledby="wallet-tab">
							       	
										<div class="box1">
											<div class="row">
												<div class="col-md-2 border-right1">
													<span class="span1">Select Your Currency</span>

													<div class="select mtb-15">
													    <select>
													        <option>Select</option>
													       <option value="">USD</option>
															<option value="">EUR</option>
													    </select>
													    <div class="select_arrow">
													    </div>
													</div>
												</div>

												<div class="col-md-10 ">
													<span class="span1">Select a Top Up</span>

													<div class="row">
														<div class="col-md-3 col-sm-6 col-12 text-center mt-15">
															<a href="" >
																<div class="box1 cardcoin card-coin-active">
																	<img src="assets/img/coin.png" alt="">
																<br>
																<label class="label1">650 Coins</label>
																<br>
																<span class="spanp">$4.00 USD</span>
																</div>
															</a>
														</div>
														
														<div class="col-md-3 col-sm-6 col-12 text-center mt-15">
															<a href="" >
																<div class="box1 cardcoin">
																	<img src="assets/img/coin.png" alt="">
																<br>
																<label class="label1">650 Coins</label>
																<br>
																<span class="spanp">$4.00 USD</span>
																</div>
															</a>
															
														</div>
														<div class="col-md-3 col-sm-6 col-12 text-center mt-15">
															<a href="" class="">
																<div class="box1 cardcoin">
																	<img src="assets/img/coin.png" alt="">
																<br>
																<label class="label1">650 Coins</label>
																<br>
																<span class="spanp">$4.00 USD</span>
																</div>
															</a>
															
														</div>
														<div class="col-md-3 col-sm-6 col-12 text-center mt-15">
															<a href="" class="">
																<div class="box1 cardcoin">
																	<img src="assets/img/coin.png" alt="">
																<br>
																<label class="label1">650 Coins</label>
																<br>
																<span class="spanp">$4.00 USD</span>
																</div>
															</a>
														</div>
													
													</div>

													<div class="mt-15 align-self-center">
														<span class="span1">Select a Payment Option</span>
														<br>

														<div class="row mt-15">
															<div class="col-md-6 text-center align-self-center mb-15">
																<a class="btn btn-sm btn-light btn-three f-14" data-toggle="collapse" href="#checkcc" role="button" aria-expanded="false" aria-controls="checkcc">Check Out With Credit Card</a>
															</div>

															<div class="col-md-6 text-center align-self-center mb-15">
																<img src="assets/img/paypal-button.png" style="width: 50%;" alt="">
															</div>
														</div>
												
													</div>
													
												</div>
											</div>
						      			</div>

	      								<div class="collapse" id="checkcc">
										  <div class="box1">
										 <form class="needs-validation" novalidate>
										  	<div class="row">

										  		<div class="col-7 col-md-7 col-sm-12 col-12 border-rmovn pr-25 order-lg-1 order-md-1 order-sm-2 order-2">
										  			<h4 class="titleh4 mb-20 text-left">Payment via Credit/Debit Cards</h4>
													<span class="span1">Card Number</span>
												   	<input type="text" class="form-control input-one" placeholder="&#xf09d; " required="" id="cardnumber" name="cardnumber">
												   	 <div class="invalid-feedback">
											        	Insert a Card Number
											   		 </div>
													
													<label class="span1 mt-20 mb-0">Expiration Date</label>

													<div class="form-group mb-0">
														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-10">
																<input type="text" class="form-control input-one" placeholder="MM" required="" id="mm" name="mm" maxlength="2">
																<div class="invalid-feedback">
														        	Insert a Card Month
														   		 </div>

															</div>
															<div class="col-lg-3 col-md-3 col-sm-3 col-6 mb-10">
																<input type="text" class="form-control input-one" placeholder="YY" required="" id="yy" name="yy" maxlength="2">
																<div class="invalid-feedback">
														        	Insert a Card Year
														   		 </div>
															</div>
														</div>											
													</div>
													<label class="span1 mt-10 mb-0">CVV2/CVC2</label>

													<div class="form-group mb-0">

														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-3 col-6">
																<input type="text" class="form-control input-one mb-10" placeholder="&#xf023;" required="" id="cvv" name="cvv" maxlength="3">
																<div class="invalid-feedback">
														        	Insert a CVV or CVC2
														   		 </div>
															</div>
															<div class="col-md-1 col-sm-1 col-1 align-self-center text-left">
																<i class="fa fa-question spaquest mb-10"
															data-toggle="popover" aria-haspopup="true" data-placement="bottom" aria-expanded="false" data-trigger="hover" data-content="<div class='container mtb-20'>
										      					 <span class='span1'>Where to find your Security Code</span>
										      					<img class='img-fluid mtb-10' src='assets/img/cvv.png' alt='cvv'></div>"></i>
															</div>
														</div>
                									</div>

											   		<div class="custom-control custom-checkbox mtb-15">
													    <input type="checkbox" class="custom-control-input" id="aceptarcard" >
													    <label class="custom-control-label" for="aceptarcard">Save this card for future payments</label>
												  	</div>

											  		<p class="p11 text-justify">By submitting payment information you acknowledge that you have read, understood and agree to be bound by Xsolla’s End-User License Agreement, Privacy Policy, and Refund Policy. Please note that the merchant name on your payment method statement will read as Xsolla (USA), Inc.</p>

											  		<div class="border-top text-right">
										  				<h4 class="titleh4 mt-20 text-right">Total $4.49</h4>
										  				<button type="submit" class="btn btn-sm btn-light btn-one mt-10 mb-10">Pay Now</button>
											  		</div>
											  	</div>
											  </form>


										  		<div class="col-lg-5 col-md-5 col-sm-12 col-12 pl-25 pr-25 mb-30 order-lg-2 order-md-2 order-sm-1 order-1">
													<h4 class="titleh4 mb-20">Order Summary</h4>

													<div class="row fila">
														<div class="col-md-9 col-sm-9 col-9">
															<span class="span1">650 coins</span>
														</div>
														<div class="col-md-3 col-sm-3 col-3 text-right">
															<span class="span1">$4.99</span>
														</div>
													</div>

													<div class="row fila">
														<div class="col-md-9 col-sm-9 col-9">
															<span class="span1">Subtotal</span>
														</div>
														<div class="col-md-3 col-sm-3 col-3 text-right">
															<span class="span1">$4.99</span>
														</div>
													</div>

													<div class="row fila">
														<div class="col-md-9 col-sm-9 col-9">
															<span class="label1">Total</span>
														</div>
														<div class="col-md-3 col-sm-3 col-3 text-right">
															<span class="label1">$4.99</span>
														</div>
													</div>

										  			
										  		</div>
										  	</div>

										  	
										  </div>
										</div>	



							       </div>
							      <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
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

											<div class="col-md-10 col-sm-12 col-12">	            		<div class="box9" id="previaimg" style="background-image: url('assets/img/no-back.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
								                	<div class="box-content">

								                		<div class="text-right ">
									                		<div class="fileupload btn btn-sm btn-light btn-three "><span><i class="ion-upload m-r-5"></i>Select Picture</span>
																<input type="file" name="imagenback" id="imagenback" class="upload " accept="image/*" onchange="loadFile(event)">
															</div>
								                		</div>

								                		<div class="text-right end">
									                		<label class="label1 c-1">Playing on MYI BATTLE Since <br> 04/19/2019 </label>
								                		</div>
								                	</div>
								            	</div>
												
												
											</div>
										</div>
						      		</div>
										<div class="box1 mt-30">
							      				<ul class="ullevel">
							      					<li><p class="title20 text-left">LEVEL1</p></li>
							      					<li><p class="text-center">COMPETE TO EARN MORE XP</p></li>
							      					<li><p class="title20 text-right">LEVEL2</p></li>
							      				</ul>

							      				<div class="progress pro-per">
												  <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
												  </div>
												</div>

												<div class="text-center mt-5-1">
												  	<span class="span1">1000 / 5000 XP</span>
												</div>
							      			</div>

							      		<!-- si no se ha registrado en torneo aparece -->

							      		<!-- <div class="box-no mt-20">
											<p class="titleh3 text-center mb-15i">You haven't joined any tournaments yet!</p>
											<a href="browse-tournaments.php" class="alink2">Find something to compete in on our discovery page!</a>
										</div> -->

										<!-- caso contrario aparece -->

										<div class="input-group mtb-20">
											  <input type="search" class="form-control input-one" placeholder="&#xf002; Search" id="search">
											  <div class="input-group-append">
											    <button class="btn btn-light btn-three" type="button" onclick="viewlist()"><i class="fas fa-th-list"></i></button>
											  </div>
											  <div class="input-group-append">
											    <button class="btn btn-light btn-three" type="button" onclick="viewgrid()"><i class="fas fa-th-large"></i></button>
											  </div>
											  
										</div>
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

							      </div>
							      <div class="tab-pane fade " id="connections" role="tabpanel" aria-labelledby="connections-tab">
							      	<h3 class="titleh3 mb-30">Connections</h3>
						      		<div class="row">
						      			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-10">
						      				<div class="box1">
												<div class="row ">
													<div class="col-lg-3 col-md-3 col-sm-12 col-6 align-self-center text-center">
														<img class="img-anon" src="assets/img/battlebot.png" alt="" >
													</div>
													<div class="col-lg-5 col-md-4 col-sm-12 col-6 align-self-center alinmov3 mtb-20">

														<h4 class="titleh4 alinmov3">Battle.net</h4>
														<span class="span1 mt-5-1">Not Connected</span>

													</div>
													<div class="col-lg-4 col-md-5 col-sm-12 col-12 align-self-center text-center">
														<button class="btn btn-sm btn-light btn-three">Connect</button>
													</div>
												</div>
											</div>
						      			</div>

						      			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-10">
						      				<div class="box1">
												<div class="row ">
													<div class="col-lg-3 col-md-3 col-sm-12 col-6 align-self-center text-center">
														<img class="img-anon" src="assets/img/battlebot.png" alt="" >
													</div>
													<div class="col-lg-5 col-md-4 col-sm-12 col-6 align-self-center alinmov3 mtb-20">

														<h4 class="titleh4 alinmov3">Battle.net</h4>
														<span class="span1 mt-5-1">Not Connected</span>

													</div>
													<div class="col-lg-4 col-md-5 col-sm-12 col-12 align-self-center text-center">
														<button class="btn btn-sm btn-light btn-three">Connect</button>
													</div>
												</div>
											</div>
						      			</div>
					      								
									</div>

								 </div>
							      	
							      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
							      	<h3 class="titleh3 mb-30">Settings</h3>
							      	
							      	 <ul class="nav nav-pills det-1 nav-justified mt-30" id="pills-tab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="account1-tab" data-toggle="pill" href="#account1" role="tab" aria-controls="account1" aria-selected="true">account</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="email-tab" data-toggle="pill" href="#email" role="tab" aria-controls="email" aria-selected="false">email</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="privacy-tab" data-toggle="pill" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false">privacy</a>
										</li>

									</ul>

									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane fade   show active  cont-tab2" id="account1" role="tabpanel" aria-labelledby="account1-tab">
											
										
											<div class="col-md-5 col-sm-8 col-12 mt-20">
											<form class="needs-validation" novalidate>
												<label class="titleh4">Username</label>
												<input type="text" class="form-control input-one mt-10" placeholder="Username" required="" id="username" name="username">
												 <div class="invalid-feedback">
								                    Please choose a Username
								                </div>
<!-- 								                <div class="valid-feedback">
								                    Username available
								               	</div> -->

												<label class="titleh4 mt-15">Timezone</label>
												<div class="select mt-10 mb-15">
												    <select required="">
											        	<option selected="" disabled="">Select</option>
												       <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
														<option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
														<option value="-10:00">(GMT -10:00) Hawaii</option>
														<option value="-09:50">(GMT -9:30) Taiohae</option>
														<option value="-09:00">(GMT -9:00) Alaska</option>
														<option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
														<option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
														<option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
														<option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
														<option value="-04:50">(GMT -4:30) Caracas</option>
														<option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
														<option value="-03:50">(GMT -3:30) Newfoundland</option>
														<option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
														<option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
														<option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
														<option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
														<option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
														<option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
														<option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
														<option value="+03:50">(GMT +3:30) Tehran</option>
														<option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
														<option value="+04:50">(GMT +4:30) Kabul</option>
														<option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
														<option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
														<option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
														<option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
														<option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
														<option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
														<option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
														<option value="+08:75">(GMT +8:45) Eucla</option>
														<option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
														<option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
														<option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
														<option value="+10:50">(GMT +10:30) Lord Howe Island</option>
														<option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
														<option value="+11:50">(GMT +11:30) Norfolk Island</option>
														<option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
														<option value="+12:75">(GMT +12:45) Chatham Islands</option>
														<option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
														<option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
												    </select>
												    <div class="select_arrow">
												    </div>
												</div>
												<span class="span1">Current Time is <strong>6:37 PM PDT</strong></span>

												<div class="row mt-30">
													<div class="col-md-6 text-center align-self-center mb-15">
														<button type="button" class="btn btn-light btn-three f-14">Revert</button>
													</div>

													<div class="col-md-6 text-center align-self-center mb-15">
														<button type="submit" class="btn btn-light btn-two">Save</button>
													</div>
												</div>
												
											</div>
												</form>		

										</div>

										<div class="tab-pane fade  cont-tab2" id="email" role="tabpanel" aria-labelledby="email-tab">
											<form class="needs-validation" novalidate>
												<div class="row">
													<div class="col-md-6 mt-20 border-right1">
														<label class="titleh4">Email</label>
														<span class="span1"> Your email address is:</span>
														<input type="email" class="form-control input-one mb-10" placeholder="Email" required="" id="emailaccount" name="emailaccount">
														 <div class="invalid-feedback">
									                    Please choose a Email
									               		 </div>
									               		 <!--  <div class="valid-feedback">
									                    	Email available
									               		 </div> -->

														<p class="spanp2 mt-15">Account security is important to us! With any account changes, we want to make sure it's really you. Make sure you verify your email address with us.</p>
														
														<p class="spanp2">To change the email associated with your account, please contact <a href="mailto:" class="alink2">support@myi.com</a></p>

													</div>
													<div class="col-md-6">
														<label class="titleh4 mb-15 mt-30">Mailing Preferences</label>
														<span class="span1"> I want to receive:</span>
	
												   		<div class="custom-control custom-checkbox mtb-15">
														    <input type="checkbox" class="custom-control-input" id="aceptarpro" >
														    <label class="custom-control-label" for="aceptarpro">Cool tournaments and promotional emails</label>
													  	</div>

												   		<button type="submit" class="btn btn-light btn-two mt-20">Save</button>
														
													</div>
													
												</div>
											</form>

										</div>

										<div class="tab-pane fade cont-tab2" id="privacy" role="tabpanel" aria-labelledby="privacy-tab">
											<div class="col-md-12 mt-20">

												<label class="titleh4 mb-30">Privacy</label>
												<p class="spanp2 text-justify">MYI BATTLE follow data privacy best practices, like data minimization, meaning we only collect personal data that's necessary to provide you with the best esports experience.</p>

												<p class="spanp2 text-justify"><strong>Access your personal data</strong></p>
												<p class="spanp2 text-justify"> You can request a copy of your personal data at any time. To make this request, please send an email to <a href="mailto:" class="alink2">support@myi.com</a> Please note it can take up to 30 days to process your request.</p>

												<p class="spanp2 text-justify">Secret: 5a5aa603306531e79917abc5</p>

												<p class="spanp2 text-justify"><strong>Keep your personal data up-to-date</strong></p>
												<p class="spanp2 text-justify">If there are any errors with your personal data, you can request to change it. To make this request, please send an email to <a href="mailto:" class="alink2">support@myi.com</a> Please note it can take up to 30 days to process your request.</p>

												<p class="spanp2 text-justify"><strong>Remove your personal data</strong></p>
												<p class="spanp2 text-justify">To remove your personal data, you can deactivate your account. After 14 days, your account and all personal data will be removed from our systems and no recovery is possible.</p>

												<button type="button" class="btn btn-light btn-three f-14 mtb-20" data-target="#modal-confirm-elim" data-toggle="modal" data-dismiss="modal">Deactivate Account</button>

												<p class="spanp2 text-justify">If you change your mind during the 14 day grace period, please email <a href="mailto:" class="alink2">support@myi.com</a> to reactivate your account.</p>

											</div>

										</div>

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

		<script type="text/javascript" src="assets/js/select2.full.js"></script>
		

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


			$('#tablelist3').DataTable( {
    		    dom: 'Bfrtip',
		        buttons: [
		            // 'pageLength'
		        ],
		        "searching": false,
		        "order": [[ 2, "desc" ]],
		    } );

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


