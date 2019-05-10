<h3 class="titleh3 mb-30">Publish Tournament</h3>

<form class="needs-validation" novalidate>
							      
	<label class="titleh4 mb-10">Publishing this tournament will enable registration and allow players to join.</label>

	<div class="row">
		<div class="col-md-6 col-sm-12 col-12  mb-15">
			<div class="toggle">
				<input type="radio" name="published" value="" id="published1" checked="checked" />
				<label for="published1">Draft</label>
				<input type="radio" name="published" value="" id="published2" />
				<label for="published2">Published</label>
			</div>
		</div>
	</div>


	<label class="titleh4 mb-10">Public tournaments are eligible to appear in search results and tournament listings.</label>

	<div class="row">
		<div class="col-md-6 col-sm-12 col-12 mb-15">
			<div class="toggle">
				<input type="radio" name="typepublic" value="" id="typepublic1" checked="checked" />
				<label for="typepublic1">Private</label>
				<input type="radio" name="typepublic" value="" id="typepublic2" />
				<label for="typepublic2">Public</label>
			</div>
		</div>
	</div>

	<label class="titleh4 mb-10">You can control who enters your tournament with join codes.</label>

	 <div class="custom-control custom-checkbox mb-10 ">
	    <input type="checkbox" class="custom-control-input" id="usecodes">
	    <label class="custom-control-label" for="usecodes">Use Join Codes</label>
	  </div>

	<div id="joincodes">

		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20 align-self-center">
				<label class="titleh4 mb-10">Join Codes</label>
				<input type="number" class="form-control input-one mb-10" min="5" max="10" value="5">
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-20 align-self-center">
				<button type="button" class="btn btn-sm btn-light btn-three f-14">Add</button>
			</div>
		</div>
	
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-12 col-12 mt-30 mb-15">

			<div class="table-wrap mb-20">
				<div class="table-responsive">
					<table id="tablecodes" class="table  display">
						<thead>
							<tr>
								<th>Join Codes</th>
								<th>Status</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>UcUpUYh</td>
								<td>not used</td>
							</tr>

							<tr>
								<td>UcUpUYh</td>
								<td>not used</td>
							</tr>

							<tr>
								<td>UcUpUYh</td>
								<td>not used</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
	</div>

	<div class="text-center">
		<button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
	</div>

</form>


