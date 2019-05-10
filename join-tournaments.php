<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-85 sect">

	            		<div class="row details">
                    		<div class="col-lg-1 col-md-2 col-sm-2 col-2 text-center user align-self-center">
                    			<a href="#">
                        			<img src="assets/img/users/1.jpg" class="img-user rounded-circle" alt="">
                        		</a>
                    		</div>

                    		<div class="col-lg-11 col-md-10 col-sm-10 col-10 user align-self-center text-left">
                    			<a href="details-organization.php"><h2 class="nameuser">MYI Entertaiment</h2></a>
                        		<a href="" class="btn btn-sm btn-light btn-three">Follow</a>
                        		<span class="span1 ml-10">4600 Followers</span>
                    		</div>
                    	</div>


		            	<form id="msform" class="needs-validation" novalidate>
						<fieldset>
							<div class="padlr-per">

		                    	<div class="box1">
		                    		<h3 class="titleh3 mt-20">Critical Rules</h3>

		                    		<div class="description">
		                    			<p><strong>**Admin words are absolute**</strong></p>

										<p>Please make sure you be here before the tournament start by 5mins</p>
		                    			<ul class="mb-0">
		                    				<li>the ladder works with total wins only,loser doesn't count or matches played</li>
		                    				<li>please do know the matchmaking sometimes take few mins to find you a match Use the tournament code</li>
		                    				<li>Please check the title if it says EUW then only EUW players! if it says EUNE then EUNE players only etc</li>
		                    				<li>MYI BATTLE must be the same!</li>
		                    				<li>Each player must ban 3 champs!,the game mode wiill stay blind pick so there is no counter pick but in order to ban the 3 champs you need to write them to enemy in the bracket chat!</li>
		                    				<li>if the Any of the player pick the banned champ then he/she will be DQ(if it was a mistake but you still get to play in the tourney)</li>
		                    				<li>This ladder works with win-loss differential! doesn't count the wins,if there is a Tie there the system will will give the higher rank to the player played more game</li>
		                    			</ul>
		                    		</div>
		                    	</div>


		                    	<div class="box1 mtb-20">
		                    		<h3 class="titleh3 mt-20">RULES</h3>
		                    		<div class="description">
										<p>Please read the rules! don't ignore them thank you very much</p>
										<ol class="mb-0">
											<li>Faking ss will result in DQ</li>
											<li>in order to win the game you must destory the enemy nexus or the enemy surr</li>
											<li>Must join the discord server</li>
											<li>any kind cheating is banned!</li>
											<li>MYI BATTLE and ingame name must be the same</li>
											<li>any toxic behavior will result in DQ</li>
											<li>The admins will never give free wins or DQ a player for no reason</li>
											<li>Admins can't control the matchmaking!</li>
											<li>There are two kinds of tournaments First blood/Draft pick and blind pick/Destroy the nexus to win so please make sure to read the title and 'about this tournament' Selction before you join</li>
											<li>Unranked Accounts aren't allowed! play with your main account</li>
										</ol>
		                    		</div>
		                    	</div>
		                    	<div class="box1 mb-20 text-left">
							   		  <div class="custom-control custom-checkbox mt-10 ml-10">
									    <input type="checkbox" class="custom-control-input" id="acept" required="">
									    <label class="custom-control-label" for="acept">I have read and agree to all the rules</label>
									     <div class="invalid-feedback mb-10">
								        	Required
								   		 </div>
									  </div>
		                    	</div>
			            	</div>

							<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20" >Back to Tournament</button>

							<button type="button" class="next btn btn-sm btn-light btn-one mtb-20">Continue</button>
						</fieldset>

						<fieldset>
							<div class="text-left">
								<h3 class="titleh3 mtb-20">Select a Team</h3>
								<label 
								class="span1">Select a Team or </label>
								<button class="btn btn-sm btn-light btn-three f-14 ml-10" data-target="#modal-create-team" data-toggle="modal">Create a New Team</button>

								<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-20">
									<a href="#modalteam" data-toggle="modal">
										<div class="card-part">
											<div class="head">
												<h5 class="titleh5">FamilyTokek</h5>
											</div>
											<div class="img-user" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;">
												
											</div>

											<div class="foot text-center">
												<span class="span1">CAPTAIN</span>

												<div class="avatar11">
							                      <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1-1">

							                      <img src="assets/img/avatar/1.png" alt="" class="capa-avatar1-2"><!-- face -->

							                      <img src="assets/img/avatar/3.png" alt="" class="capa-avatar1-3">
							                  	</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20" >Back to Tournament</button>

							<button type="button" class="next btn btn-sm btn-light btn-one mtb-20">Continue</button>
							
						</fieldset>
				
						<fieldset>
							<div class="text-left">
								<h3 class="titleh3 mtb-20">Team List</h3>
								<span class="span1">The list of players currently on this team. You can add and remove players from the roster until the tournament start time.</span>
								<h3 class="titleh3 mtb-20">Name Team</h3>
								
								<span class="span1w">ROSTER<i class="fa fa-question spaquest" data-toggle="tooltip" data-placement="bottom" title="The list of players you intend to register for this tournament. Once the tournament starts, the team captain will no longer be able to edit this list."></i></span>
								<div class="box1 col-md-6">
									<p class="span1 mb-0"><i class="fa fa-star mr-10"></i>Name Team</p>
								</div>

								<span class="span1">You need <strong>4</strong> more player(s) before joining.</span>
							</div>

							<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20" >Back to Tournament</button>

							<button type="button" class="next btn btn-sm btn-light btn-one mtb-20">Continue</button>
						</fieldset>


						<fieldset>
							<div class="text-left col-md-6 pad-0">
								<h3 class="titleh3 mtb-20">Custom Fields</h3>
								<select class="custom-select mtb-15" required="" id="">
								   <option selected="" disabled="">Country Flag</option>
								</select>
								 
								 <div class="invalid-feedback mb-10">
						        	Please choose a Country Flag
						   		 </div>

								<input type="text" class="form-control input-one mb-10" placeholder="Your Twitter @ or Discord Name & Tag" required="" id="" name="" data-toggle="tooltip" data-placement="bottom" title="Public field that will be visible to anyone viewing tournament.">
							</div>

							<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20">Back to Tournament</button>

							<button type="submit" class="next btn btn-sm btn-light btn-one mtb-20">Submit</button>
						</fieldset>

						<fieldset>
							<div class="text-left col-md-8 pad-0">
								<h3 class="titleh3 mtb-20">Invite Players</h3>
								<span class="span1 d-block">Your team doesn't have enough players to join yet! Invite them with this link!</span>
								

								<label class="label3">http://myibattle.com/...... <a href="" class="alink" data-toggle="tooltip" data-placement="bottom" data-original-title="Copy Link"><i class="fa fa-link"></i></a></label>
							</div>

						
							<button type="button" class="btn btn-sm btn-light btn-one mtb-20">Done</button>
						</fieldset>

						</form>
				      	
				    </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

		<script type="text/javascript">
			var current_fs, next_fs, previous_fs; //fieldsets
			var left, opacity, scale; //fieldset properties which we will animate
			var animating; //flag to prevent quick multi-click glitches

			$(".next").click(function(){
				if(animating) return false;
				animating = true;
				
				current_fs = $(this).parent();
				next_fs = $(this).parent().next();
				
			
				//show the next fieldset
				next_fs.show(); 
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale current_fs down to 80%
						scale = 1 - (1 - now) * 0.2;
						//2. bring next_fs from the right(50%)
						left = (now * 100)+"%";
						//3. increase opacity of next_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'transform': 'scale('+scale+')'});
						next_fs.css({'left': left, 'opacity': opacity});
					}, 
					duration: 0, 
					complete: function(){
						current_fs.hide();
						animating = false;
					}, 
					//this comes from the custom easing plugin
					easing: 'easeInOutBack'
				});
			});
		
		</script>
	</body>
</html>


