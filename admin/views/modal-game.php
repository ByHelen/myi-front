<div class="modal hide fade modalcustom" id="modal-game" role="dialog" aria-labelledby="modal-title" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
      <div class="modal-header details">
			<h2 class="titleh3 d-block" >Game</h2>
      </div>
      
      <div class="modal-body mt-30">
      	
		<form class="needs-validation" novalidate>

			<label class="titleh4 mb-10">Game Name</label>
			<input type="text" class="form-control input-one mb-10" placeholder="Game Name" required="" id="gamename" name="gamename">
			 <div class="invalid-feedback mb-10">
	        	Please choose a Game Name
	   		 </div>

<!-- 	   		 <div class="invalid-feedback mb-10">
	        	Game Name no available
	   		 </div> -->

	   		 <!--  <div class="valid-feedback">
	        	Game Name available
	   		 </div> -->


			<div class="text-center mb-20 mt-20">
	  			<div class="fileupload btn btn-sm btn-light btn-three  "><span><i class="ion-upload m-r-5"></i>Image Game</span>
					<input type="file" name="imagegame" id="imagegame" class="upload " accept="image/*" onchange="loadFile6(event)">
				</div>
				<br>
				
			</div>

			<div class="text-center">
				<div class="img-game" style="background-image: url('assets/img/games/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imggame">					
				</div>
			</div>


			<div class="text-center mb-20 mt-20">
	  			<div class="fileupload btn btn-sm btn-light btn-three  "><span><i class="ion-upload m-r-5"></i>Banner</span>
					<input type="file" name="imageover" id="imageover" class="upload " accept="image/*" onchange="loadFile7(event)">
				</div>
				<br>
				
			</div>

			<div class="text-center">
				<div class="img-over" style="background-image: url('assets/img/overviews/1.png'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imgover">					
				</div>
			</div>
			  			   

			<div class="mt-20 text-center">			
				<button class="btn btn-sm btn-light btn-three f-14 mt-20" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
			</div>		

		</form>
      </div>
    </div>
  </div>
</div>