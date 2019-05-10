<div class="modal hide fade modalcustom" id="modal-team" role="dialog" aria-labelledby="modal-title" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
      <div class="modal-header details">
			<h2 class="titleh3 d-block" >Team</h2>
      </div>
      
      <div class="modal-body mt-30">
      	
		<span class="spanp2 ">Fill out your team roster and you'll be ready to join your first tournament on MYI BATTLE The information you enter will be saved to use for future tournaments.</span>

		<form class="needs-validation" novalidate>

			<input type="text" class="form-control input-one mt-20 mb-10" placeholder="Team Name" required="" id="teamname" name="teamname">
			 <div class="invalid-feedback mb-10">
	        	Please choose a Team Name
	   		 </div>
	   		 <!--  <div class="valid-feedback">
	        	Team Name available
	   		 </div> -->


			 <select id="filtergame" name="filtergame" class="form-control select2-single"  aria-hidden="true" onchange="" data-placeholder="Select a Game" required="">
				<option value="1" selected="">Select a Game</option>
				<option value="2">League of legens</option>
				<option value="3">Mario</option>
			</select>
			 <div class="invalid-feedback">
	        	Please choose a Game
	   		 </div>


			<button type="button" class="btn btn-sm btn-light btn-three mt-20" data-toggle="collapse" data-target="#branding" aria-expanded="false" aria-controls="branding">Team Branding (Optional) </button>

			<div class="collapse" id="branding">
			  <div class="card card-body bg-dark box1">
			  
			  	<div class="row border-bottom">
			  		<div class="col-lg-2 col-md-3 col-sm-3 col-12 text-center align-self-center">
			  			<div class="fileupload btn btn-sm btn-light btn-three  mb-15"><span><i class="ion-upload m-r-5"></i>Logo</span>
							<input type="file" name="imagelogo" id="imagelogo1" class="upload " accept="image/*" onchange="loadFile2(event)">
						</div>
						<br>
			  			<div class="img-user1" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imglogo1">
																	
						</div>
			  		</div>
			  		<div class="col-lg-10 col-md-9 col-sm-9 col-12 align-self-center">
			  			<textarea class="form-control input-one" name="description" id="description" cols="30" rows="4" maxlength="200" onkeypress="countcharacteres(this.value)"></textarea>
						<label id="characteres" name="characteres" class="span1">0</label>
			  			<label class="span1"> / 200 Characters </label>
			  		</div>
			  	</div>

			  	<div class="text-right mt-20">
			  		<div class="fileupload btn btn-sm btn-light btn-three"><span><i class="ion-upload m-r-5"></i>Sponsor</span>
							<input type="file" name="imagelogo" id="sponsor" class="upload " accept="image/*" onchange="loadFile3(event)">
						</div>
			  		<div class="sponsor border1" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imgsponsor">
						</div>
			  	</div>

			  	<div class="text-right mt-20 mb-20">
			  		<div class="fileupload btn btn-sm btn-light btn-three  mt-15"><span><i class="ion-upload m-r-5"></i>Cover</span>
							<input type="file" name="imagelogo" id="cover1" class="upload " accept="image/*" onchange="loadFile5(event)">
						</div>
			  		<div class="cover border1" style="background-image: url('assets/img/no-back.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imgcover1">
						</div>
			  	</div>
			   
			  </div>
			</div>
			<div class="mt-20">
				<label class="titleh4 mb-10">Captain</label>
				<span class="span1"><i class="fa fa-star mr-10 mb-10"></i>NameUser</span>
				<input type="text" class="form-control input-one" placeholder="In Game Name" required="" id="namecaptain" name="namecaptain">
				<div class="invalid-feedback">
		        	Please choose a Captain in Game Name
		   		 </div>
		   		 <!--  <div class="valid-feedback">
		        	Captain Name available
		   		 </div> -->

				<button class="btn btn-sm btn-light btn-three f-14 mt-20" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
			</div>		

		</form>
      </div>
    </div>
  </div>
</div>