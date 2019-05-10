<div class="modal hide fade modalcustom" id="modal-manage-organization" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
      <div class="modal-header details">
			<h2 class="titleh3 d-block" >Manage Organization</h2>

			<button type="button" class="btn btn-sm btn-light btn-three f-14 mr-20" data-target="#modal-confirm-elim" data-toggle="modal" data-dismiss="modal"><i class="fa fa-trash mr-10" ></i>Delete Organization</button>
      </div>
      
    	<div class="modal-body">
			<ul class="nav nav-pills det-1 nav-justified mt-30" id="manage-org-tab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="Basics-tab" data-toggle="pill" href="#Basics" role="tab" aria-controls="Basics" aria-selected="true">Basics</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="Contact-Info-tab" data-toggle="pill" href="#Contact-Info" role="tab" aria-controls="Contact-Info" aria-selected="false">Contact Info</a>
			  </li>

			   <li class="nav-item">
			    <a class="nav-link" id="Staff-tab" data-toggle="pill" href="#Staff" role="tab" aria-controls="Staff" aria-selected="false">Staff</a>
			  </li>
			</ul>


			<div class="tab-content" id="manage-org-tabContent">
				<div class="tab-pane fade show active  cont-tab2" id="Basics" role="tabpanel" aria-labelledby="Basics-tab">

				<form class="needs-validation" novalidate>
	    
					<label class="titleh4 mb-10">Name</label>
					<input type="text" class="form-control input-one mb-20 col-md-8" placeholder="Name" required="" id="name" name="name">
					 <div class="invalid-feedback">
			        	Please choose a Name
			   		 </div>


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

				  	<div class="text-center">
					  	<button class="btn btn-sm btn-light btn-three f-14 mt-20" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
				  	</div>
	        	</form>

				</div>

				<div class="tab-pane fade cont-tab2" id="Contact-Info" role="tabpanel" aria-labelledby="Contact-Info-tab">
					<form class="needs-validation" novalidate>
						<div class="text-left mt-20">
					
							<input type="text" class="form-control input-one mb-10" placeholder="contact@your-domain.com"  >

							<input type="text" class="form-control input-one mb-10" placeholder="http://www.your-website.com">

							<input type="text" class="form-control input-one mb-10" placeholder=" Your Twitter Name" >

							<input type="text" class="form-control input-one mb-10" placeholder="Your Discord Username">

							<input type="text" class="form-control input-one mb-10" placeholder="Your Facebook Username" >

						</div>

						<div class="text-center">
						  	<button class="btn btn-sm btn-light btn-three f-14 mt-20" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
					  	</div>
	            	</form>
				</div>

				<div class="tab-pane fade cont-tab2" id="Staff" role="tabpanel" aria-labelledby="Staff-tab">
					<form class="needs-validation" novalidate>
						<div class="text-left">
							<h3 class="titleh3 mtb-20">Staff</h3>

							<ul class="ul-type-user mb-30">
								<li>Owner created the organization and can edit anything about the organization. No one can change this role.</li>
								<li>Admins can do everything the owner can except delete the organization or remove other admins.</li>
								<li>Moderators can create and edit tournaments for the organization, but cannot make changes to the organization itself.</li>
								<li>Bracket Managers can report and resolve disputes by changing scores in the organization's tournaments.</li>
							</ul>

							<div class="row border-bottom">
								<div class="col-md-8 ">
									<label class="titleh4 mt-30 mb-10">Name</label>
								</div>
								<div class="col-md-4">
									<label class="titleh4 mt-30 mb-10">Role</label>
								</div>
							</div>

							<div class="row">
								<div class="col-md-8 ">
									<!-- <label class="titleh4 mt-30 mb-10">Name</label> -->
									<span class="spanp2">NameUser</span>
								</div>
								<div class="col-md-4">
									<!-- <label class="titleh4 mt-30 mb-10">Role</label> -->
									<span class="spanp2">Owner</span>
								</div>
							</div>

							<div class="text-right">
								<button type="button" class="next btn btn-sm btn-light btn-three" >Add</button>
								
							</div>

							<div class="row">
								<div class="col-md-8">
									<input type="text" class="form-control input-one mtb-15" placeholder="UserName to Add" id="" name="">
								</div>
								<div class="col-md-4">
									<select class="custom-select mtb-15" id="">
								        <option value="">Admin</option>
								       <option value="">Moderator</option>
										<option value="">Bracket Manager</option>
								    </select>
								</div>
							</div>
						</div>
						<div class="text-center">
						  	<button class="btn btn-sm btn-light btn-three f-14 mt-20" data-dismiss="modal">Cancel</button>
						  	<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
					  	</div>
			  		</form>
				</div>
	  		</div>
        </div>
	
      </div>
    </div>
  </div>
</div>