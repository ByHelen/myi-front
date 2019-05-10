<div class="modal hide fade modalcustom" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="modaltitle" aria-hidden="true">

	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
	    <div class="modal-content">
		    <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		     </button>
       		<div class="modal-body">
      			<div class="pl-0 mt-30 mb-20">
					<ul class="nav nav-pills acceso nav-justified" id="pills-tab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="acceso-tab" data-toggle="pill" href="#acceso" role="tab" aria-controls="acceso" aria-selected="true">LOGIN</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="registro-tab" data-toggle="pill" href="#registro" role="tab" aria-controls="registro" aria-selected="false">SIGN UP</a>
					  </li>
					</ul>
				</div>

				<div class="tab-content" id="pills-tabContent">

				  	<div class="tab-pane fade show active cont-tab" id="acceso" role="tabpanel" aria-labelledby="acceso-tab">
						<form class="needs-validation" novalidate>
						      <input type="email" class="form-control input-one mb-10" placeholder="Email" required="" id="email" name="email">
						      <div class="invalid-feedback mb-10">
					        	Please choose a Email
					   		 </div>
					   		<!--   <div class="invalid-feedback mb-10">
						        	Incorrect Email
						   	  </div> -->

						      <input type="password" class="form-control input-one mb-10" placeholder="Password" required="" id="password" name="password">
						      <div class="invalid-feedback mb-10">
						        	Please choose a Password
						   	  </div>
						   	 <!--  <div class="invalid-feedback mb-10">
						        	Incorrect Password
						   	  </div> -->

					        <div class="text-center mt-15">
					        	<button type="submit" onclick="" class="btn btn-light btn-two">Login</button>
					    </form>

						        <h5 class="lineamedio">Or Login</h5>

						        <div class="sociallogin">
	                              <a href="#" class="link facebook" target="_parent"><span class="fab fa-facebook-f"></span></a>
	                              <a href="#" class="link google-plus" target="_parent"><span class="fab fa-google"></span></a>
	                            </div>

						        <hr>

						        <h6 class="mt-20 text-center"><a class="alink" name="fp" id="fp" data-dismiss="modal" data-toggle="modal" href="#modalforgot">Forgot your Password?</a></h6>
					  		</div>
					</div>


					<div class="tab-pane fade cont-tab" id="registro" role="tabpanel" aria-labelledby="registro-tab">
					  	<form class="needs-validation" novalidate>
							<input type="text" class="form-control input-one mb-10" placeholder="First Name" required="" id="firstname" name="firstname">
							<div class="invalid-feedback mb-10">
						        Please choose a First Name
						   	</div>

							<input type="text" class="form-control input-one mb-10" placeholder="Last Name" required="" id="surname" name="surname">
							<div class="invalid-feedback mb-10">
						        Please choose a Last Name
						   	</div>

						   	<input type="text" class="form-control input-one mb-10" placeholder="UserName" required="" id="usernamereg" name="usernamereg">
							<div class="invalid-feedback mb-10">
						        Please choose a UserName
						   	</div>

<!-- 						   	<div class="invalid-feedback mb-10">
						        Username not available
						   	</div> -->

						   <!-- 	<div class="valid-feedback mb-10">
						        Username Available
						   	</div> -->


							<input type="email" class="form-control input-one mb-10" placeholder="Email" required="" id="email-reg" name="email-reg">
							<div class="invalid-feedback mb-10">
						        	Please choose a Email
						   	</div>
						   <!-- 	<div class="invalid-feedback mb-10">
						       Email not available
						   	</div> -->

						   	<!-- 	<div class="valid-feedback mb-10">
						       Email Available
						   	</div> -->

						    <input type="password" class="form-control input-one mb-10" placeholder="Password" required="" id="password-reg" name="password-reg">
						    <div class="invalid-feedback mb-10">
						        	Please choose a Password
						   	</div>

						    <input type="password" class="form-control input-one mb-10" placeholder="Repeat Password" required="" id="reppassword-reg" name="reppassword-reg">
						    <!--  <div class="invalid-feedback mb-10">
						        Password does not match
						   	</div> -->
						   	<!--  <div class="valid-feedback mb-10">
						        Password Match
						   	</div> -->

					      		
						    <div class="custom-control custom-checkbox mtb-15">
							    <input type="checkbox" class="custom-control-input" id="iagree" required="">
							    <label class="custom-control-label" for="iagree">I agree to <a href="" class="alink">Terms of Service</a> and <a href="" class="alink">Privacy Policy.</a></label>
							     <div class="invalid-feedback mb-10">
						        You must accept the terms and conditions to register
						   		</div>
							  </div>

					        <div class="text-center mt-15">
					        	<button type="submit" onclick="" class="btn btn-light btn-two">Sign Up</button>
						</form>
						        <h5 class="lineamedio">Or Sign Up</h5>
						      
						        <div class="sociallogin">
	                              <a href="#" class="link facebook" target="_parent"><span class="fab fa-facebook-f"></span></a>
	                              <a href="#" class="link google-plus" target="_parent"><span class="fab fa-google"></span></a>
	                            </div>
					  		</div>
				  	</div>
				</div>
			</div>
    	</div>
 	</div>
</div>
 
