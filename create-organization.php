<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-85">
		            	<form id="msform" class="pt-30">
		            		<div class="text-center">
			            		<ul id="progressbar">
									<li class="active">Basics</li>
									<li>Contact Info</li>
									<li>Staff</li>
								</ul>
		            			
		            		</div>
						<fieldset>
							<div class="offset-md-1 col-md-10">
		                    	<div class="">
		                    		<h3 class="titleh3 mt-20 text-left">What is an Organization?</h3>

		                    		<div class="description">
										<p>An organization houses all of your tournaments. Once it's created, you can assign admins to the organization to help you manage all your tournaments. Your players will be able to find tournaments from your organization homepage, so be sure to make it look nice!</p>
										<p>If you don’t have images on hand, or need some time to think about the wording, you can always return to edit from your organization page.</p>
										<p>Once you have filled in the necessary information on this page, click create so you can check out your new organization page, and proceed to the creation of your first tournament.</p>
		                    		</div>

									<div class=g-recaptcha data-sitekey=6LevrXEUAAAAAGfUzEu8iHuyz2xo2Fhdy2eTu2IZ>
									</div>

									<label class="titleh4 mt-30 mb-10">Name</label>

									<input type="text" class="form-control input-one mb-20 col-md-8" placeholder="Name" required="" id="name" name="name">

									<div class="row border-bottom">
								  		<div class="col-lg-2 col-md-3 col-sm-3 col-12 text-center align-self-center">
								  			<div class="fileupload btn btn-sm btn-light btn-three  mb-15"><span><i class="ion-upload m-r-5"></i>Logo</span>
												<input type="file" name="imagelogo" id="imagelogo" class="upload " accept="image/*" onchange="loadFile2(event)">
											</div>
											<br>
								  			<div class="img-user1" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imglogo">
																						
											</div>
								  		</div>
								  		<div class="col-lg-10 col-md-9 col-sm-9 col-12 align-self-center">
								  			<label class="titleh4 mt-30 mb-10">Description</label>
								  			<textarea class="form-control input-one" name="description" id="description" cols="30" rows="4" maxlength="200" onkeypress="countcharacteres(this.value)"></textarea>
											<label id="characteres" name="characteres" class="span1">0</label>
								  			<label class="span1 text-left"> / 200 Characters </label>
								  		</div>
								  	</div>


								  	<div class="text-right mb-20">
								  		<div class="fileupload btn btn-sm btn-light btn-three  mt-15"><span><i class="ion-upload m-r-5"></i>Header Image</span>
												<input type="file" name="imagelogo" id="cover" class="upload " accept="image/*" onchange="loadFile4(event)">
											</div>
								  		<div class="cover border1" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imgcover">
											</div>
								  	</div>

		                    	</div>
			            	</div>

							<button type="button" class="next btn btn-sm btn-light btn-one mtb-20">Next</button>
						</fieldset>

						<fieldset>
							<div class="">
								<div class="text-left offset-md-2 col-md-8 mt-20">
									
									<input type="text" class="form-control input-one mb-10" placeholder="contact@your-domain.com"  id="" name="">

									<input type="text" class="form-control input-one mb-10" placeholder="http://www.your-website.com"  id="" name="">

									<input type="text" class="form-control input-one mb-10" placeholder="Your Facebook Username"  id="" name="">

									<input type="text" class="form-control input-one mb-10" placeholder=" Your Twitter Name"  id="" name="">

									<input type="text" class="form-control input-one mb-10" placeholder="Your Discord Username"  id="" name="">

								</div>
							</div>

							<button type="button" class="previous btn btn-sm btn-light btn-three f-14 mtb-20" >Back</button>

							<button type="button" class="next btn btn-sm btn-light btn-one mtb-20">Continue</button>
							
						</fieldset>
				
						<fieldset>
							<div class="offset-md-2 col-md-8 text-left">
								<h3 class="titleh3 mtb-20">Staff</h3>

								<ul class="ul-type-user mb-30">
									<li>Owner created the organization and can edit anything about the organization. No one can change this role.</li>
									<li>Admins can do everything the owner can except delete the organization or remove other admins.</li>
									<li>Moderators can create and edit tournaments for the organization, but cannot make changes to the organization itself.</li>
									<li>Bracket Managers can report and resolve disputes by changing scores in the organization's tournaments.</li>
								</ul>


								<div class="table-wrap mb-20">
									<div class="table-responsive">
										<table id="tablelist" class="table  display">
											<thead>
												<tr>
													<th>Name</th>
													<th>Role</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>NameUser</td>
													<td>Owner</td>
													<td class="text-center w10p"><a href="" class="alink"><i class="fa fa-trash"></i></a></td>
												</tr>

												<tr>
													<td>NameUser</td>
													<td>Owner</td>
													<td class="text-center w10p"><a href="" class="alink"><i class="fa fa-trash"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>	


								<div class="text-right">
									<button type="button" class="btn btn-sm btn-light btn-three" >Add</button>
								</div>

								<div class="row">
									<div class="col-md-8">
										<input type="text" class="form-control input-one mt-10" placeholder="UserName to Add" id="" name="">
									</div>
									<div class="col-md-4">
										<select class="custom-select mt-10" id="" required="">
									        <option value="">Admin</option>
									       <option value="">Moderator</option>
											<option value="">Bracket Manager</option>
									    </select>
									</div>
								</div>
							</div>

							<button type="button" class="previous btn btn-sm btn-light btn-three f-14 mtb-20" >Back</button>

							<button type="submit" class="btn btn-sm btn-light btn-one mtb-20">Finish</button>
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
				
				//activate next step on progressbar using the index of next_fs
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
				
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

			$(".previous").click(function(){
				if(animating) return false;
				animating = true;
				
				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();
				
				//de-activate current step on progressbar
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
				
				//show the previous fieldset
				previous_fs.show(); 
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now, mx) {
						//as the opacity of current_fs reduces to 0 - stored in "now"
						//1. scale previous_fs from 80% to 100%
						scale = 0.8 + (1 - now) * 0.2;
						//2. take current_fs to the right(50%) - from 0%
						left = ((1-now) * 100)+"%";
						//3. increase opacity of previous_fs to 1 as it moves in
						opacity = 1 - now;
						current_fs.css({'left': left});
						previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
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

		<script src=https://www.google.com/recaptcha/api.js></script>

	</body>
</html>


