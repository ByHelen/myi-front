<h3 class="titleh3">Setup</h3>
							      
<ul class="nav nav-pills det-1 nav-justified mt-20" id="manage-org-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="Basics1-tab" data-toggle="pill" href="#Basics1" role="tab" aria-controls="Basics1" aria-selected="true">Basics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Info1-tab" data-toggle="pill" href="#Info1" role="tab" aria-controls="Info1" aria-selected="false">Info</a>
  </li>

   <li class="nav-item">
    <a class="nav-link" id="settings1-tab" data-toggle="pill" href="#settings1" role="tab" aria-controls="settings1" aria-selected="false">Settings</a>
  </li>

</ul>

<div class="tab-content" id="pills-tabContent">
	<div class="tab-pane fade show active cont-tab2" id="Basics1" role="tabpanel" aria-labelledby="Basics1-tab">
		<form class="needs-validation" novalidate>
		   <div class="float-right mr-30">
				<span class="titleh4 curp" data-toggle="popover" aria-haspopup="true" data-placement="left" aria-expanded="false" data-content="

					<label class='label4'>TOURNAMENT NAME</label>
					<span class='spanp2'>The title of the tournament.</span>

					<label class='label4 mt-20'>START DATE & TIME</label>
					<span class='spanp2'>The time at which registration closes and the tournament begins. Users will see this in their local time zone if they are logged in to MYI BATTLE</span>

					<label class='label4 mt-20'>ABOUT</label>
					<span class='spanp2'>A short introduction to your tournament. Tell players why they should join!</span>

					<label class='label4 mt-20'>HEADER BACKGROUND</label>
					<span class='spanp2'>This main banner image that will be displayed on the tournament landing page.</span>

				">Help<i class="fa fa-question ml-10"></i></span>
			</div>
	        		<h3 class="titleh3 mt-20">Required Fields</h3>

	        		<label class="titleh4 mt-30">Selected Game</label>
					<span class="spanp2">Super Smash Bros. Ultimate</span>

					<label class="titleh4 mt-30">Tourname Name</label>
					<input type="text" class="form-control input-one col-lg-8 col-md-12" placeholder="Tourname Name" required="" id="nametournament" name="nametournament">
					 <div class="invalid-feedback">
			        	Please choose a Tourname Name
			   		 </div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
							<label class="titleh4  mb-10">Start Date</label>
							<input type="date" class="form-control input-one mb-0" placeholder="" id="datefrom" name="datefrom" required="">
							<span class="spanp2">Date Displayed in <strong>4</strong></span>
							<div class="invalid-feedback">
					        	Please choose a Date From
					   		 </div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-30">
							<label class="titleh4 mb-10">Start Time</label>
							<input type="time" class="form-control input-one mb-0" placeholder=""  id="dateto" name="dateto" required="">
							<span class="spanp2">Time Displayed in <strong>4</strong></span>
							<div class="invalid-feedback">
					        	Please choose a Date To
					   		 </div>
						</div>
					</div>

					<h3 class="titleh3 mt-50 mb-20">Optional Fields</h3>
				
					<div id="accordion" role="tablist" class="tagcollapse">
					    <div class="card card-acordion">
						    <div class="card-header" role="tab" id="headingOne">
						      <h5 class="mb-0 titleh4">
						        <a class="collapsed" data-toggle="collapse" href="#collapseabout" aria-expanded="true" aria-controls="collapseabout">
						          About
						        </a>
						      </h5>
							</div>
							<div id="collapseabout" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
							      <div class="card-body">
							        <textarea name="about" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="about" maxlength="200" required=""></textarea>
							      </div>
							</div>
						</div>
					</div>


				  	<div class="text-right mtb-20">
				  		<div class="fileupload btn btn-sm btn-light btn-three  mt-15"><span><i class="ion-upload m-r-5"></i>Header Banner</span>
								<input type="file" name="imagelogo" id="cover" class="upload " accept="image/*" onchange="loadFile4(event)">
							</div>
				  		<div class="cover border1" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center center;" id="imgcover">
						</div>
				  	</div>

	    	<div class="text-center">
				<button type="submit" class="btn btn-sm btn-light btn-one mtb-20">Save</button>
	    	</div>

    	</form>

	</div>

	<div class="tab-pane fade cont-tab2" id="Info1" role="tabpanel" aria-labelledby="Info1-tab">
		<div class="float-right mr-30">
			<span class="titleh4 curp" data-toggle="popover" aria-haspopup="true" data-placement="left" aria-expanded="false" data-content="
				<label class='label4'>CONTACT INFO</label>
				<span class='spanp2'>This information will be give to players so they can easily contact the tournament organizer. Every good organizer has a contact channel for their players.</span>

				<label class='label4 mt-20'>CRITICAL RULES</label>
				<span class='spanp2'>A short list of the most important rules for your tournament. A player will have to verify that they have read this when they join your tournament.</span>

				<label class='label4 mt-20'>RULES</label>
				<span class='spanp2'>The full ruleset and format information for the tournament.</span>

				<label class='label4 mt-20'>PRIZES</label>
				<span class='spanp2'>The prizing to be awarded.</span>

				<label class='label4 mt-20'>SCHEDULE</label>
				<span class='spanp2'>A general outline of the tournament timeline.</span>

			">Help<i class="fa fa-question ml-10"></i></span>
		</div>

		<form class="" novalidate>
			<div class="mt-20">

				<label class="titleh4 text-left">How will your players contact you?</label>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mt-15">
					    <select class="custom-select" id="">
					        <option value="" selected="" disabled="">Select a option</option>
					       <option value="">Discord</option>
							<option value="">Facebook</option>
							<option value="">Email</option>
					    </select>
					</div>

					<div class="col-md-6 col-sm-12 col-12 mt-15">
						<input type="text" class="form-control input-one mb-15" placeholder="Enter Username"  id="" name="" required="">
						 
					</div>
				</div>

				<div id="accordion0" role="tablist" class="tagcollapse">
				    <div class="card card-acordion">
					    <div class="card-header" role="tab" id="headingOne">
					      <h5 class="mb-0 titleh4">
					        <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Contact Details
					        </a>
					      </h5>
						</div>
						<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
						      <div class="card-body">
						         <textarea name="contactdetails" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="contactdetails" maxlength="200" required=""></textarea>
						      </div>
						</div>
					</div>
					<div class="card card-acordion" class="tagcollapse">
					    <div class="card-header" role="tab" id="headingTwo">
					      <h5 class="mb-0 titleh4">
					        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Critical Rules
					        </a>
					      </h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
						      <div class="card-body">
						        <textarea name="criticalrules" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="criticalrules" maxlength="200" required=""></textarea>
						      </div>
						</div>
					</div>
					<div class="card card-acordion">
					    <div class="card-header" role="tab" id="headingThree">
					      <h5 class="mb-0 titleh4">
					        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Rules
					        </a>
					      </h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
						      <div class="card-body">
						      	<textarea name="rules" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="rules" maxlength="200" required=""></textarea>
						      </div>
						</div>
					</div>

					<div class="card card-acordion">
					    <div class="card-header" role="tab" id="headingfour">
					      <h5 class="mb-0 titleh4">
					        <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
					          Prizes
					        </a>
					      </h5>
						</div>
						<div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
						      <div class="card-body">
						       <textarea name="prizes" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="prizes" maxlength="200" required=""></textarea>
						      </div>
						</div>
					</div>

					<div class="card card-acordion">
					    <div class="card-header" role="tab" id="headingfive">
					      <h5 class="mb-0 titleh4">
					        <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
					          Schedule
					        </a>
					      </h5>
						</div>
						<div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
						      <div class="card-body">
						       <textarea name="Schedule" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="Schedule" maxlength="200" required=""></textarea>
						      </div>
						</div>
					</div>
				</div> <!-- acordion -->
			</div>

			<div class="text-center">
				<button type="submit" class="btn btn-sm btn-light btn-one mtb-20">Save</button>
			</div>
		</form>

	</div>

	<div class="tab-pane fade cont-tab2" id="settings1" role="tabpanel" aria-labelledby="settings1-tab">
		
		<div class="float-right mr-30">
			<span class="titleh4 curp" data-toggle="popover" aria-haspopup="true" data-placement="left" aria-expanded="false" data-content="
				<label class='label4'>REGISTRATION OPEN/CLOSED</label>
				<span class='spanp2'>You can keep registration open to the public and disable it if you'd like to stop before the tournament starts.</span>

				<label class='label4 mt-20'>OPEN PARTICIPANTS/CAPPED</label>
				<span class='spanp2'>You can set a registration limit or leave it open for everyone. Players who register above this limit will be notified that they are on a waitlist.</span>

				<label class='label4 mt-20'>ENABLE CHECKIN</label>
				<span class='spanp2'>The full ruleset and format information for the tournament.</span>

				<label class='label4 mt-20'>ENABLE PLAYER SCORE REPORTING</label>
				<span class='spanp2'>Distribute score reporting by enabling players to report their own scores in the bracket.</span>

				<label class='label4 mt-20'>CUSTOM REGISTRATION REQUIREMENTS</label>
				<span class='spanp2'>Enter any additional fields you'd like the team captain/player to fill out on registration.</span>

				<label class='label4 mt-20'>REQUIRE PASSWORD</label>
				<span class='spanp2'>Participants will need to enter the specified password to join the tournament. Use it for invite-only events.</span>

			">Help<i class="fa fa-question ml-10"></i></span>
		</div>

		<div class="text-left">
			<h3 class="titleh3 mtb-20">Required Fields</h3>
			<form class="needs-validation" novalidate>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4  mb-10">Tournament Format</label>

					    <select required="" class="form-control input-one mtb-15">
					        <option value="" selected="" disabled="">Select a option</option>
					       <option value="">1x1</option>
							<option value="">Pre-made team</option>
							<option value="">Free Agent Draft</option>
							<option value="">Pre-Mades & Free Agents</option>
					    </select>
					    <div class="invalid-feedback mb-10">
				        	Please choose a Tournament Format
				   		 </div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Minimun players per team</label>
						<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" min="5" max="10" value="5" required="">
						<div class="invalid-feedback mb-10">
				        	Please choose a Minimun players
				   		 </div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Check-in</label>
						
						<div class="toggle">
							<input type="radio" name="checking" value="1" id="1" checked="checked" />
							<label for="1">Disabled</label>
							<input type="radio" name="checking" value="2" id="2" />
							<label for="2">Enabled</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Check-in Start Time</label>

						<div class="select w-25">
						    <select>
						       <option value="">15</option>
								<option value="">30</option>
								<option value="">60</option>
						    </select>
						    <div class="select_arrow">
						    </div>
						</div>								

						<span class="span1 ml-10">minutes before registration close</span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Match Score Reporting</label>
						
						<div class="toggle">
							<input type="radio" name="machscore" value="3" id="3" checked="checked" />
							<label for="3">Admins Only</label>
							<input type="radio" name="machscore" value="4" id="4" />
							<label for="4">Admins & Players</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Require Screenshots</label>
						<div class="toggle">
							<input type="radio" name="reqscreen" value="5" id="5" checked="checked" />
							<label for="5">Not Required</label>
							<input type="radio" name="reqscreen" value="6" id="6" />
							<label for="6">Required</label>
						</div>
					</div>
				</div>

				<h3 class="titleh3 mt-50 mb-20">Advanced Fields</h3>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Maximum Team Size</label>
						
						<div class="toggle">
							<input type="radio" name="maxteamsize" value="7" id="7" checked="checked" />
							<label for="7">None</label>
							<input type="radio" name="maxteamsize" value="8" id="8" />
							<label for="8">Capped</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Minimun players per team</label>
						<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" min="5" max="10" value="5" required="">
						<div class="invalid-feedback mb-10">
				        	Please choose a Minimun players
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Registration Participant Limit</label>
						
						<div class="toggle">
							<input type="radio" name="reglimit" value="9" id="9" checked="checked" />
							<label for="9">Unlimited</label>
							<input type="radio" name="reglimit" value="10" id="10" />
							<label for="10">Limited</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Limit</label>
						<input type="number" class="form-control input-one mb-10 col-md-5" min="0" max="10" value="0">
						<div class="invalid-feedback mb-10">
				        	Please choose a Limit
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Country Flags on Brackets</label>
						
						<div class="toggle">
							<input type="radio" name="countryflag" value="11" id="11" checked="checked" />
							<label for="11">Off</label>
							<input type="radio" name="countryflag" value="12" id="12" />
							<label for="12">On</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Registration Regions</label>
						
						<div class="toggle">
							<input type="radio" name="regreg" value="13" id="13" checked="checked" />
							<label for="13">All</label>
							<input type="radio" name="regreg" value="14" id="14" />
							<label for="14">Specific Regions</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">

						<label class="titleh4 mb-10">Regions Allowed</label>

						<select id="citieswork" name="citieswork[]" multiple="multiple" class="form-control select2-single select2-hidden-accessible select2-disabled-inputs-multiple" tabindex="-1" aria-hidden="true" onchange="" data-placeholder="Select Regions" required="">
							<option value="1">Afghanistan</option>
							<option value="2">Albania</option>
							<option value="3">Albania</option>
							
						</select>
						<div class="invalid-feedback mb-10">
				        	Please choose a Regions
				   		 </div>										
					</div>
				</div>


				<h3 class="titleh3 mt-50 mb-20">Player Registration Fields</h3>
				<div class="text-left">
					<div class="dropdown">
					  <button class="btn btn-sm btn-light btn-three dropdown-toggle" type="button" id="dropdowadd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <i class="fa fa-plus mr-10"></i>Add New
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdowadd">
					    <a class="dropdown-item" href="#">Public Field</a>
					    <a class="dropdown-item" href="#">Private Field</a>
					  </div>
					</div>
				</div>

				<div class="col-md-8 ">
					<label class="titleh4 mt-30 mb-10"><i class="fa fa-eye mr-10" data-toggle="tooltip" data-placement="bottom" title="Public field that will be visible to anyone viewing tournament."></i>In Game Name</label>

					<div class="d-block">
						<span class="titleh4 d-inline"><i class="fa fa-eye mr-10" data-toggle="tooltip" data-placement="bottom" title="Public field that will be visible to anyone viewing tournament."></i> </span>

						<input type="text" class="form-control input-one mtb-10 w-50  d-inline" placeholder="Field Name" id="" name="">

						<a href="" class="alink" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash ml-10"></i></a>
						
					</div>

					<div class="d-block">
						<span class="titleh4 d-inline"><i class="fas fa-eye-slash mr-10" data-toggle="tooltip" data-placement="bottom" title="Private field that will only be visible to the organizer."></i> </span>

						<input type="text" class="form-control input-one mtb-10 w-50  d-inline" placeholder="Field Name" id="" name="">

						<a href="" class="alink" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash ml-10"></i></a>
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-light btn-one mtb-20">Save</button>
				</div>
			</form>
					
		</div>

		 
	</div>
</div>