<h3 class="titleh3">Brackets</h3>

				      
<ul class="nav nav-pills det-1 nav-justified mt-20" id="manage-org-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="create-bracket-tab" data-toggle="pill" href="#create-bracket" role="tab" aria-controls="create-bracket" aria-selected="true">Create</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="bracket1-tab" data-toggle="pill" href="#bracket1" role="tab" aria-controls="bracket1" aria-selected="false">Bracket1</a>
  </li>

</ul>

<div class="tab-content" id="pills-tabContent">
	<div class="tab-pane fade show active cont-tab2" id="create-bracket" role="tabpanel" aria-labelledby="create-bracket">
								      
		<div class="row mt-20">
			<div class="col-md-4 mb-20">
				<a href="javascript:void(0)" onclick="typebracket1()">
					<div class="box1 text-center">
						<span class="span2w d-block">Create an Elimination Bracket</span>
						<span class="span1">Single or double elimination schedule</span>
					</div>
				</a>
			</div>

			<div class="col-md-4 mb-20" id="divscroll">
				<a href="javascript:void(0)"  onclick="typebracket2()">
					<div class="box1 text-center">
						<span class="span2w d-block">Create a Round Robin Bracket</span>
						<span class="span1">Single round robin schedule</span>
					</div>
				</a>
			</div>

			<div class="col-md-4 mb-20" >
				<a href="javascript:void(0)" onclick="typebracket3()">
					<div class="box1 text-center">
						<span class="span2w d-block">Create a Swiss Bracket</span>
						<span class="span1">Single swiss schedule</span>
					</div>
				</a>
			</div>
		</div>

		<div id="createone">

			<label class="titleh4 mb-10">Bracket Name</label>
			<form class="needs-validation" novalidate>

				<input type="text" class="form-control input-one col-lg-8 col-md-12" placeholder="Bracket Name" required="" id="Bracket Name" name="Bracket Name">
				<div class="invalid-feedback">
		        	Please choose a Bracket Name
		   		 </div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4  mb-10">Start Date</label>
						<input type="date" class="form-control input-one mb-0" placeholder="" id="datestar" name="datestar" required="">
						<span class="spanp2">Date Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Date Star
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4 mb-10">Start Time</label>
						<input type="time" class="form-control input-one mb-0" placeholder=""  id="timestar" name="timestar" required="">
						<span class="spanp2">Time Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Time Star
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-15 mb-10">Match Check In <i class="fa fa-question spaquest" data-toggle="tooltip" data-placement="bottom" title="Players will be asked to check in to each match. Once they do, if their opponent does not check in within the allotted time, the player will automatically get the win for the match and the opponent will be dropped from the tournament."></i></label>
						

						<div class="toggle">
							<input type="radio" name="matchcheck0" value="1" id="matchcheck00" checked="checked" />
							<label for="matchcheck00">Off</label>
							<input type="radio" name="matchcheck0" value="2" id="matchcheck20" />
							<label for="matchcheck20">On</label>
						</div>
					</div>

					<div class="col-md-6 col-sm-12 col-12 mb-15">
				      <div class="custom-control custom-checkbox mtb-10 ">
					    <input type="checkbox" class="custom-control-input" id="enabledchecktime1">
					    <label class="custom-control-label" for="enabledchecktime1">Check-in Timer</label>
					  </div>

						<input type="number" class="form-control input-one col-lg-5 col-md-6" placeholder="minutes" min="5" max="10" value="" required="">
						<div class="invalid-feedback">
				        	Please choose a Check-in Timer
				   		 </div>
					</div>
					
				</div>

				<div class="col-12">
					<div class="row">
						<div class="col-md-6 mb-20">
							<label class="titleh4 mtb-10">Bracket Style</label>

							  <div class="custom-control custom-radio mt-10">
							    <input type="radio" class="custom-control-input" id="bracketstyle1" name="bracketstyle" required checked="">
							    <label class="custom-control-label" for="bracketstyle1">Single Elimination</label>
							  </div>

							  <div class="custom-control custom-checkbox mt-10 ml-10">
							    <input type="checkbox" class="custom-control-input" id="enabledthird">
							    <label class="custom-control-label" for="enabledthird">Enable Third Place Match</label>
							  </div>

							  <div class="custom-control custom-radio mt-10">
							    <input type="radio" class="custom-control-input" id="bracketstyle2" name="bracketstyle" required>
							    <label class="custom-control-label" for="bracketstyle2">Or  Double Elimination</label>
							  </div>

						</div>
						<div class="col-md-6 mb-20">
							<label class="titleh4 mtb-10">Bracket Size(# of players)</label>
							<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" min="5" max="10" value="5" required="">
							<div class="invalid-feedback">
				        	Please choose a Bracket Size
				   		 </div>

						</div>
					</div>
				</div>

				<div id="singleelimination">
					<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-20 mb-10">Best of for all rounds</label>

						<div class="col-lg-5 col-md-6 splr">
						     <select class="custom-select" id="">
							   <option value="" selected="" >1</option>
						       <option value="">3</option>
						       <option value="">5</option>
						       <option value="">7</option>
						       <option value="">9</option>
						       <option value="">11</option>
							  </select>
						</div>

						<label class="titleh4 mt-20 mb-20">ROUNDS</label>

						<label class="titleh4 mb-10">Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								
							    <select class="custom-select" id="">
							       <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
								   

							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
							    <select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
								    
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
							    <select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mt-20 mb-10">Third Place Match</label>

						<div class="col-md-8 splr">
							<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
						</div>
					</div>
				</div>

				<div id="doubleelimination">
					<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-20 mb-10">Best of for all rounds</label>

						<div class="col-lg-5 col-md-6 splr">
							<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
						</div>

						<label class="titleh4 mt-20 mb-20">WINNERS</label>

						<label class="titleh4 mb-10">Winners Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Winners Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>



						<label class="titleh4 mb-10">Winners Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>


						<label class="titleh4 mt-20 mb-20">LOSERS</label>

						<label class="titleh4 mb-10">Losers Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Losers Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>



						<label class="titleh4 mb-10">Losers Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>


						<label class="titleh4 mt-20 mb-20">GRAND FINALS</label>

						<label class="titleh4 mb-10">Grand Finals Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Grand Finals Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>		
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
				</div>
			</form>

		</div>


		<div id="createtwo">
			<label class="titleh4 mb-10">Bracket Name</label>
			<form class="needs-validation" novalidate>

				<input type="text" class="form-control input-one col-lg-8 col-md-12" placeholder="Bracket Name" required="" id="Bracket Name" name="Bracket Name">
				<div class="invalid-feedback">
		        	Please choose a Bracket Name
		   		 </div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mtb-20">
						<label class="titleh4  mb-10">Start Date</label>
						<input type="date" class="form-control input-one mb-0" placeholder="" id="datestar" name="datestar" required="">
						<span class="spanp2">Date Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Date Star
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mtb-20">
						<label class="titleh4 mb-10">Start Time</label>
						<input type="time" class="form-control input-one mb-0" placeholder=""  id="timestar" name="timestar" required="">
						<span class="spanp2">Time Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Time Star
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10"># of Groups</label>
						<input type="number" class="form-control input-one" min="0" max="10" value="" required="">
						<div class="invalid-feedback">
				        	Please choose a # of Groups
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10"># of players per Group</label>
						<input type="number" class="form-control input-one mb-10" min="5" max="10" value="5" required="">
						<div class="invalid-feedback">
				        	Please choose a # of players
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Match style</label>
					    <select class="custom-select" id="" required="">
					        <option value="" selected="">Best of</option>
					       <option value=""># of games per match</option>
					    </select>
					    <div class="invalid-feedback">
				        	Please choose a Match style
				   		 </div>
						
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10"># of games</label>
						
					   <select class="custom-select" id="">
					        <option value="" selected="" >1</option>
					       <option value="">3</option>
					       <option value="">5</option>
					       <option value="">7</option>
					       <option value="">9</option>
					       <option value="">11</option>
					    </select>
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
				</div>
			</form>
		</div>


		<div id="createthree">
			<label class="titleh4 mb-10">Bracket Name</label>
			<form class="needs-validation" novalidate>

				<input type="text" class="form-control input-one col-lg-8 col-md-12" placeholder="Bracket Name" required="" id="Bracket Name" name="Bracket Name">
				<div class="invalid-feedback">
		        	Please choose a Bracket Name
		   		 </div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4  mb-10">Start Date</label>
						<input type="date" class="form-control input-one mb-0" placeholder="" id="datestar" name="datestar" required="">
						<span class="spanp2">Date Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Date Star
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4 mb-10">Start Time</label>
						<input type="time" class="form-control input-one mb-0" placeholder=""  id="timestar" name="timestar" required="">
						<span class="spanp2">Time Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Time Star
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-15 mb-10">Match Check In <i class="fa fa-question spaquest" data-toggle="tooltip" data-placement="bottom" title="Players will be asked to check in to each match. Once they do, if their opponent does not check in within the allotted time, the player will automatically get the win for the match and the opponent will be dropped from the tournament."></i></label>
					

						<div class="toggle">
							<input type="radio" name="matchcheck2" value="1" id="matchcheck3" checked="checked" />
							<label for="matchcheck3">Off</label>
							<input type="radio" name="matchcheck2" value="2" id="matchcheck4" />
							<label for="matchcheck4">On</label>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						  <div class="custom-control custom-checkbox mb-10">
						    <input type="checkbox" class="custom-control-input" id="enabledchecktime">
						    <label class="custom-control-label" for="enabledchecktime">Check-in Timer</label>
						  </div>


						<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" placeholder="minutes" min="5" max="10" value="">
						<div class="invalid-feedback">
			        	Please choose a Minutes
			   		 	</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mt-10 mb-15">
						<label class="titleh4 mb-10">Bracket Size(# of players)</label>
						<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" min="5" max="10" value="5">
						<div class="invalid-feedback">
				        	Please choose a # of players
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
					<label class="titleh4 mb-10"># of Round</label>
					
					    <select class="custom-select" id="">
					        <option value="" selected="" >3</option>
					       <option value="">4</option>
					       <option value="">5</option>
					    </select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">

					<label class="titleh4 mb-10">Tiebreaker method <i class="fa fa-question spaquest" data-toggle="tooltip" data-placement="bottom" title="If you'd like your tournament to use the same tiebreaker system as the Hearthstone Championship Tour, select HCT. Otherwise, select Default to use the system popularized by Magic the Gathering and Pokémon."></i></label>

				    <select class="custom-select" id="">
				        <option value="" selected=""  >Default Tiebreaker</option>
				       <option value="">HCT Tiebreaker</option>
				    </select>
					</div>
				</div>


				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10">Match style</label>
						 <select class="custom-select" id="" required="">
					        <option value="" selected="">Best of</option>
					       <option value=""># of games per match</option>
					    </select>
					    <div class="invalid-feedback">
				        	Please choose a Match style
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mb-10"># of games</label>
						<select class="custom-select" id="">
					        <option value="" selected="" >1</option>
					       <option value="">3</option>
					       <option value="">5</option>
					       <option value="">7</option>
					       <option value="">9</option>
					       <option value="">11</option>
					    </select>
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
				</div>
			</form>
		</div>
	</div>

	<div class="tab-pane fade cont-tab2" id="bracket1" role="tabpanel" aria-labelledby="bracket1">


		<div class="row">
			<div class="col-md-6 col-sm-6 col-4 alimov4">
				<button type="button" data-target="#modal-confirm-elim" data-toggle="modal" class="btn btn-sm btn-light btn-three f-14 mb-201" >Delete</button>
				
			</div>
			<div class="col-md-6 col-sm-6 col-8 text-right">
				<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-20" >Seed</button>
			</div>
		</div>
		
			<label class="titleh4 mb-10">Bracket Name</label>
			<form class="needs-validation" novalidate>

				<input type="text" class="form-control input-one col-lg-8 col-md-12" placeholder="Bracket Name" required="" id="Bracket Name" name="Bracket Name">
				<div class="invalid-feedback">
		        	Please choose a Bracket Name
		   		 </div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4  mb-10">Start Date</label>
						<input type="date" class="form-control input-one mb-0" placeholder="" id="datestar" name="datestar" required="">
						<span class="spanp2">Date Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Date Star
				   		 </div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20">
						<label class="titleh4 mb-10">Start Time</label>
						<input type="time" class="form-control input-one mb-0" placeholder=""  id="timestar" name="timestar" required="">
						<span class="spanp2">Time Displayed in <strong>4</strong></span>
						<div class="invalid-feedback">
				        	Please choose a Time Star
				   		 </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-15 mb-10">Match Check In <i class="fa fa-question spaquest" data-toggle="tooltip" data-placement="bottom" title="Players will be asked to check in to each match. Once they do, if their opponent does not check in within the allotted time, the player will automatically get the win for the match and the opponent will be dropped from the tournament."></i></label>
						

						<div class="toggle">
							<input type="radio" name="matchcheck0" value="1" id="matchcheck00" checked="checked" />
							<label for="matchcheck00">Off</label>
							<input type="radio" name="matchcheck0" value="2" id="matchcheck20" />
							<label for="matchcheck20">On</label>
						</div>
					</div>

					<div class="col-md-6 col-sm-12 col-12 mb-15">
				      <div class="custom-control custom-checkbox mtb-10 ">
					    <input type="checkbox" class="custom-control-input" id="enabledchecktime1">
					    <label class="custom-control-label" for="enabledchecktime1">Check-in Timer</label>
					  </div>

						<input type="number" class="form-control input-one col-lg-5 col-md-6" placeholder="minutes" min="5" max="10" value="" required="">
						<div class="invalid-feedback">
				        	Please choose a Check-in Timer
				   		 </div>
					</div>
					
				</div>

				<div class="col-12">
					<div class="row">
						<div class="col-md-6 mb-20">
							<label class="titleh4 mtb-10">Bracket Style</label>

							  <div class="custom-control custom-radio mt-10">
							    <input type="radio" class="custom-control-input" id="bracketstyle1" name="bracketstyle" required checked="">
							    <label class="custom-control-label" for="bracketstyle1">Single Elimination</label>
							  </div>

							  <div class="custom-control custom-checkbox mt-10 ml-10">
							    <input type="checkbox" class="custom-control-input" id="enabledthird">
							    <label class="custom-control-label" for="enabledthird">Enable Third Place Match</label>
							  </div>

							  <div class="custom-control custom-radio mt-10">
							    <input type="radio" class="custom-control-input" id="bracketstyle2" name="bracketstyle" required>
							    <label class="custom-control-label" for="bracketstyle2">Or  Double Elimination</label>
							  </div>

						</div>
						<div class="col-md-6 mb-20">
							<label class="titleh4 mtb-10">Bracket Size(# of players)</label>
							<input type="number" class="form-control input-one mb-10 col-lg-5 col-md-6" min="5" max="10" value="5" required="">
							<div class="invalid-feedback">
				        	Please choose a Bracket Size
				   		 </div>

						</div>
					</div>
				</div>

				<div id="singleelimination">
					<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-20 mb-10">Best of for all rounds</label>

						<div class="col-lg-5 col-md-6 splr">
						     <select class="custom-select" id="">
							   <option value="" selected="" >1</option>
						       <option value="">3</option>
						       <option value="">5</option>
						       <option value="">7</option>
						       <option value="">9</option>
						       <option value="">11</option>
							  </select>
						</div>

						<label class="titleh4 mt-20 mb-20">ROUNDS</label>

						<label class="titleh4 mb-10">Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								
							    <select class="custom-select" id="">
							       <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
								   

							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
							    <select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
								    
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
							    <select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mt-20 mb-10">Third Place Match</label>

						<div class="col-md-8 splr">
							<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
						</div>
					</div>
				</div>

				<div id="doubleelimination">
					<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 mb-15">
						<label class="titleh4 mt-20 mb-10">Best of for all rounds</label>

						<div class="col-lg-5 col-md-6 splr">
							<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
						</div>

						<label class="titleh4 mt-20 mb-20">WINNERS</label>

						<label class="titleh4 mb-10">Winners Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Winners Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>



						<label class="titleh4 mb-10">Winners Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>


						<label class="titleh4 mt-20 mb-20">LOSERS</label>

						<label class="titleh4 mb-10">Losers Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Losers Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>



						<label class="titleh4 mb-10">Losers Round 3</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="">
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails3" aria-expanded="false" aria-controls="adddetails3">Add Details </button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails3">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>


						<label class="titleh4 mt-20 mb-20">GRAND FINALS</label>

						<label class="titleh4 mb-10">Grand Finals Round 1</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails1" aria-expanded="false" aria-controls="adddetails1">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails1">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>

						<label class="titleh4 mb-10">Grand Finals Round 2</label>
						<div class="row">
							<div class="col-md-8 align-self-center mb-20">
								<select class="custom-select" id="" >
							        <option value="" selected="" >Best of 1</option>
							       <option value="">Best of 3</option>
							       <option value="">Best of 5</option>
							       <option value="">Best of 7</option>
							       <option value="">Best of 9</option>
							       <option value="">Best of 11</option>
							    </select>
							</div>
							<div class="col-md-4 align-self-center mb-20">
								<button type="button" class="btn btn-sm btn-light btn-three f-14 mb-15" data-toggle="collapse" data-target="#adddetails2" aria-expanded="false" aria-controls="adddetails2">Add Details</button>
							</div>
						</div>

						<div class="col-md-12">
							<div class="collapse" id="adddetails2">
							  <div class="card card-body bg-dark splr">
							   	<textarea name="" class="form-control input-one editor" cols="30" rows="5" placeholder="" id="" maxlength="200" required=""></textarea>
							  </div>
							</div>
						</div>		
					</div>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
				</div>
			</form>
		
		
	</div>


		
</div>