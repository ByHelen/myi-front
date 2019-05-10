<div class="modal hide fade modalcustom" id="modal-slider" role="dialog" aria-labelledby="modal-title" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
      <div class="modal-header details">
			<h2 class="titleh3 d-block" >Image Slider</h2>
      </div>
      
      <div class="modal-body mt-30">
      	
		<span class="spanp2 ">All images must have the same ratio in width and height, so that they do not pixelate or overflow the slider. Recommended size 1024px * 400px</span>

		<form class="needs-validation" novalidate>

			<label class="titleh4 mt-20 mb-10">Game Name</label>
			<input type="text" class="form-control input-one mb-10" placeholder="Slider Name" required="" id="slidername" name="slidername">
			 <div class="invalid-feedback mb-10">
	        	Please choose a Slider Name
	   		 </div>

	   		 <label class="titleh4 mt-15 mb-10">Slider Link</label>
			<input type="url" class="form-control input-one mb-10" placeholder="Slider Link" required="" id="sliderlink" name="sliderlink">
			 <div class="invalid-feedback mb-10">
	        	Please choose a Slider Link
	   		 </div>

	   		 <label class="titleh4 mt-15 mb-10">Priority</label>
			<input type="number" class="form-control input-one mb-10 col-md-4 col-sm-6 col-12" placeholder="Priority" required="" id="Priority" name="Priority" min="1" max="4">
			 <div class="invalid-feedback mb-10">
	        	Please choose a Priority
	   		 </div>


	   		 <div class="text-center mb-15 mt-20">
	  			<div class="fileupload btn btn-sm btn-light btn-three  "><span><i class="ion-upload m-r-5"></i>Slider Image</span>
					<input type="file" name="imageslider" id="imageslider" class="upload " accept="image/*" onchange="loadFile8(event)">
				</div>
				<br>
			</div>

			<div class="text-center">
				<img class="img-fluid" src="assets/img/no-back.jpg" id="imgslider" alt="">
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