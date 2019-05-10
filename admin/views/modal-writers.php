<div class="modal hide fade modalcustom" id="modal-writers" role="dialog" aria-labelledby="modal-title" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
      <div class="modal-header details">
			<h2 class="titleh3 d-block" >Writer</h2>
      </div>
      
      <div class="modal-body mt-20">
      	
    		<form class="needs-validation" novalidate>

    			<div class="text-center">
             <div class="img-user2" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imguser">

            </div>
            <br>
            <div class="fileupload btn btn-sm btn-light btn-three">
              <span>Profile Image</span>
              <input type="file" name="imageuser" id="imageuser" class="upload " accept="image/*" onchange="loadFile9(event)">
            </div>	
    			</div>

          <div class="row">
            <div class="col-md-6">
              <label class="titleh4 mt-20 mb-10">First Name</label>
              <input type="url" class="form-control input-one" placeholder="First Name" required="" id="FirstName" name="FirstName">
              <div class="invalid-feedback mb-10">
                  Please choose a First Name
              </div>
            </div>
            <div class="col-md-6">
              <label class="titleh4 mt-20 mb-10">Last Name</label>
              <input type="url" class="form-control input-one" placeholder="Last Name" required="" id="LastName" name="LastName">
              <div class="invalid-feedback mb-10">
                  Please choose a Last Name
              </div>
            </div>
          </div>

          <label class="titleh4 mt-20 mb-10">Email</label>
          <input type="email" class="form-control input-one mb-10" placeholder="email" required="" id="email" name="email">
          <div class="invalid-feedback mb-10">
              Please choose a Email
          </div>

            <!--  <div class="invalid-feedback">
            Email No available
         </div> -->

          <!--  <div class="valid-feedback">
            Email available
         </div> -->


    			<div class="row">
            <div class="col-md-6">
               <label class="titleh4 mt-20 mb-10">NameUser</label>
              <input type="url" class="form-control input-one" placeholder="NameUser" required="" id="NameUser" name="NameUser">
              <div class="invalid-feedback mb-10">
                  Please choose a NameUser
              </div>

              <!--  <div class="invalid-feedback">
                UserName No available
             </div> -->

              <!--  <div class="valid-feedback">
                UserName available
             </div> -->
            </div>
            <div class="col-md-6">
                <label class="titleh4 mt-20 mb-10">Password</label>
              <input type="password" class="form-control input-one mb-10" placeholder="Password" required="" id="password" name="password">
              <div class="invalid-feedback mb-10">
                    Please choose a Password
              </div>
                <!--  <div class="invalid-feedback">
                Password Incorrect
             </div> -->
            </div>
          </div>

           
            <label class="titleh4 mt-15 mb-10">Twitter</label>
            <input type="url" class="form-control input-one mb-10" placeholder="Link Twitter" required="" id="linktwitter" name="linktwitter">
            <div class="invalid-feedback mb-10">
                  Please choose a Link Twitter
            </div>


            <label class="titleh4 mt-15 mb-10">About</label>
            <textarea class="form-control input-one mb-10" name="about" id="about" cols="30" rows="3" required=""></textarea>
            <div class="invalid-feedback mb-10">
                  Please choose a Text About
            </div>


      			<label class="titleh4 mt-15 mb-10">Category</label>
      			 <select id="category" name="category[]" multiple="multiple" class="form-control select2-single select2-hidden-accessible select2-disabled-inputs-multiple" tabindex="-1" aria-hidden="true" onchange="" data-placeholder="Select Category" required="">
      				<option value="1">All</option>
      				<option value="2">Features</option>
      				<option value="3">Community</option>
      				
      			</select>
      			 <div class="invalid-feedback">
      	        	Please choose a Category
      	   		 </div>

            <div class="mt-20 text-center">
              <button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
            </div>    
        </form>
      </div>
    </div>
  </div>
</div>