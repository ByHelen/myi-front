<h3 class="titleh3">Streams (Optional)</h3>
							      
<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20" id="addnewstream">Add New Stream</button>

<label class="titleh3 mtb-20">Provider</label>
<div id="newstream">
	<form class="needs-validation" novalidate>
		<div class="row">
			<div class="col-4 col-md-4 col-sm-6 col-12 align-self-center  mb-15">
				<label class="titleh4 mb-10">Select Provider</label>

			     <select class="custom-select mb-0" id="" required="">
			       <option value="" selected="" disabled="">Select Provider</option>
			       <option value="">https://twitch.tv/</option>
			       <option value="">https://smashcast.tv/</option>
			       <option value="">https://www.mobcrush.com/</option>
			       <option value="">https://youtube.com/watch?v=</option>
			    </select>
			     <div class="invalid-feedback">
	        		Please choose a Provider
	   		 	</div>

			</div>
			<div class="col-4 col-md-4 col-sm-6 col-12 align-self-center  mb-15">
				<label class="titleh4 mb-10">Channel Name</label>
				<input type="text" class="form-control input-one mb-0" required placeholder="Channel Name" value="">
				 <div class="invalid-feedback">
	        		Please choose a Channel Name
	   		 	</div>
			</div>
			<div class="col-4 col-md-4 col-sm-12 col-12 text-center align-self-center mb-15">
				<button type="submit" class="btn btn-sm btn-light btn-three f-14 mtb-10">Save</button>
				<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-10">Remove</button>
			</div>
		</div>
	</form>
</div>

