<h3 class="titleh3 mb-30">Bracket Seeding</h3>


<h3 class="titleh4 mb-20">Choose a bracket to seed</h3>


<a href="javascript:void(0)" onclick="showselect()">
	<div class="box2">
    	<span class="span1w">Bracket1</span>
    	<span class="span1">Single Elimination</span>
	</div>		      
</a>

<a href="javascript:void(0)" onclick="showselect()">
	<div class="box2">
    	<span class="span1w">Bracket1</span>
    	<span class="span1">Single Elimination</span>
	</div>		      
</a>



<div class="mt-30" id="selectseed">
	<h3 class="titleh4 mb-10">Seed Players</h3>

	<span class="span1">1. Filter Players</span>
	
	<div class="row mt-20">
		<div class="col-md-6 mb-20">
			<a href="#modal-confirm-seed" data-toggle="modal" >
				<div class="box1 text-center">
					<span class="span2w d-block">Checked-In Only</span>
					<span class="span1">Only checked in players</span>
				</div>
			</a>
		</div>

		<div class="col-md-6 mb-20">
			<a href="#modal-confirm-seed" data-toggle="modal" >
				<div class="box1 text-center">
					<span class="span2w d-block">All Players</span>
					<span class="span1">All players who are registered</span>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="mt-30" id="viewseed">
	<h3 class="titleh4 mb-10">Seed Players</h3>

	<span class="span1 d-block">2. Assign Players</span>

	<div class="row">
		<div class="col-md-4 col-sm-4 col-12 text-center">
			<span class="span1">1 registered participants</span>
		</div>
		<div class="col-md-4 col-sm-4 col-12 text-center">
			<span class="span1">5 checked in participants</span>
		</div>
		<div class="col-md-4 col-sm-4 col-12 text-center">
			<span class="span1">5 seeded participants</span>
		</div>

	</div>

	<div class="input-group mtb-20">
	  <input type="search" class="form-control input-one w-25" placeholder="&#xf002; Search" id="search">
	  <div class="input-group-append">
	    <button class="btn btn-light btn-three" type="button" data-toggle="tooltip" data-placement="bottom" title="Reset"><i class="fas fa-undo-alt"></i></button>
	  </div>
	  <div class="input-group-append">
	    <button class="btn btn-light btn-three" type="button" data-toggle="tooltip" data-placement="bottom" title="Shuffle Current Seeds"><i class="fas fa-random"></i></button>
	  </div>

	  <div class="input-group-append">
	    <button class="btn btn-light btn-three dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Auto Seed</button>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#modal-auto-seed" data-toggle="modal">By Registration Order</a>
	      <a class="dropdown-item" href="#modal-auto-seed" data-toggle="modal">Randomly</a>
	    </div>
	  </div>
	  <div class="input-group-append">
	    <button class="btn btn-sm btn-light btn-one" type="button">Generate Bracket</button>
	  </div>
	</div>


	<div class="col-lg-8 col-md-12">
		<label class="titleh4 mb-10">Filter By</label>

		<select id="filterseed" name="filterseed[]" multiple="multiple" class="form-control select2-single select2-hidden-accessible select2-disabled-inputs-multiple" tabindex="-1" aria-hidden="true" onchange="" data-placeholder="Select Filters">
			<option value="1" selected="">All</option>
			<option value="2">Checked-In Only</option>
			<option value="3">No Previously seed</option>
		</select>		
		
	</div>

	<div class="col-12 mt-30">
		<div class="table-wrap mb-20">
			<div class="table-responsive">
				<table id="tableseed" class="table display">
					<thead>
						<tr>
							<th>Reg #</th>
							<th>Checked In</th>
							<th>Participant Name</th>
							<th>Waitlisted</th>
							<th>Seed #</th>
							<th class="w10px"><i class="fa fa-lock" data-toggle="tooltip" data-placement="bottom" title="Locked teams will not be shuffled."></i></th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="text-right">1</td>
							<td class="text-center"><i class="fa fa-check"></i></td>
							<td>Player1</td>
							<td></td>
							<td class="">
								 <input type="text" class="form-control input-one">
							</td>
							<td class="text-center">
								<a href="" class="alink mr-10"><i class="fa fa-lock"></i></a>

								<!-- <a href="" class="alink mr-10"><i class="fa fa-lock-open"></i></a> -->
							</td>
						</tr>

						<tr>
							<td class="text-right">1</td>
							<td class="text-center"><i class="fa fa-check"></i></td>
							<td>Player2</td>
							<td></td>
							<td class="">
								 <input type="text" class="form-control input-one">
							</td>
							<td class="text-center">
								<!-- <a href="" class="alink mr-10"><i class="fa fa-lock"></i></a> -->

								<a href="" class="alink mr-10"><i class="fa fa-lock-open"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
	


	
</div>




