<h3 class="titleh3 mb-30">Participants</h3>
							      
<label class="titleh4 mb-10">Player 0</label>

<div class="row">
	<div class="col-lg-6 col-md-12 align-self-center">
		 <input type="search" class="form-control input-one mtb-10" placeholder="&#xf002; Search" id="search">
	</div>
	<div class="col-lg-6 col-md-12 align-self-center">
									      
		<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-10" data-target="#modal-confirm-export-info" data-toggle="modal">Export Info</button>
									      
		<button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-10" data-toggle="collapse" data-target="#addplayer" aria-expanded="false" aria-controls="addplayer">Add New Player </button>
	</div>

</div>
<div class="row">
	<div class="col-lg-6 col-md-12">
		<form class="needs-validation" novalidate>
			<div class="collapse" id="addplayer">
			  <div class="card card-body bg-dark splr">
			   <div class="row">
			   	<div class="col-lg-10 col-md-10 col-sm-9 col-12">
			   		 <input type="text" class="form-control input-one" required="" placeholder="Player Name" id="">
			   		 <div class="invalid-feedback mb-10">
		        	Please choose a Player Name
		   		 </div>
			   	</div>
			   	<div class="col-lg-2 col-md-2 col-sm-3 col-12 align-self-center">
			   		 <button type="submit" class="btn btn-sm btn-light btn-three mtb-per">Add</button>
			   	</div>
			   </div>
			  </div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-12 mt-30">
		<div class="table-wrap mb-20">
			<div class="table-responsive">
				<table id="tableplayers" class="table display">
					<thead>
						<tr>
							<th>Reg #</th>
							<th>Player</th>
							<th class="w150px">Check in</th>
							<th class="w50px">Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td class="text-right">1</td>
							<td>Player1</td>
							<td>
								<div class="onoffswitch">
							    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
							    <label class="onoffswitch-label" for="myonoffswitch">
							        <span class="onoffswitch-inner"></span>
							        <span class="onoffswitch-switch"></span>
							    </label>
							</div>

							</td>
							<td class="text-center">
								<a href="#modal-edit-player" class="alink mr-10" data-toggle="modal" ><i class="fa fa-pencil-alt" data-toggle="tooltip" data-placement="bottom" title="Edit Player"></i></a>
								<a href="" class="alink" ><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Delete Player"></i></a> 
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>	

</div>






