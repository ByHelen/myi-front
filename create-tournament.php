<!DOCTYPE html>
<html lang="en">

	<?php include('header.php') ?>
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/select2-bootstrap.css">

	<body>
		<section id="container" class="all">
			<?php include('menu.php') ?>
			<section id="main-content">
		        <section class="wrapper">
		            <div class="container-fluid pt-85">
		            	<div class="row">
			            	<div class="col-lg-3 col-md-3 col-sm-12 col-12 sidebarprofile2 profile bortm">	            		
							
			            		<div class="topcreate">
				            		<div class="title-tournament">
			            				<a href="details-organization.php">
			            					<h3 class="titleh4 text-left cutmov">Name Organization Organization Organization Organization</h3>
			            				</a>
			            				<label class="span1 text-left cutmov">Name Tournament Tournament Tournament Tournament Tournament</label>
				            		</div>

		            				<span class="button-menu-tour float-right">
		            					<a href="javascript:void(0)" class="alink icon-menu-tour"  onclick="openbarmenutour()"><i class="fas fa-grip-horizontal"></i></a>
		            				</span>
			            			
			            		</div>


	            				<div class="barra-tour barra-close" id="barra-tour">

	            					<div class="button-menu-tour">
	            						<a href="javascript:void(0)" onclick="closebarmenutour()" class="alink icon-menu-tour"><i class="fa fa-times"></i></a>
	            					</div>

		            				<div class="nav flex-column nav-pills" id="v-tabtour-tab" role="tablist" aria-orientation="vertical">

		            					<!-- para desactivar un link agrega la clase disabled a los a href -->

	        							<h4 class="titleh4 mt-30 mb-10 st600">Edit</h4>

									    <a class="nav-link active" id="setup-tab" data-toggle="pill" href="#setup" role="tab" aria-controls="setup" aria-selected="true" onclick="closebarmenutour()">Setup</a>

									    <a class="nav-link" id="Brackets-tab" data-toggle="pill" href="#Brackets" role="tab" aria-controls="Brackets" aria-selected="false"  onclick="closebarmenutour()">Brackets</a>

									    <a class="nav-link" id="Streams-tab" data-toggle="pill" href="#Streams" role="tab" aria-controls="Streams" aria-selected="false"  onclick="closebarmenutour()">Streams</a>

									    <a class="nav-link" id="Streams-tab" data-toggle="pill" href="#Publish" role="tab" aria-controls="Publish" aria-selected="false"  onclick="closebarmenutour()">Publish</a>


									    <h4 class="titleh4 mt-30 mb-10 st600">Share</h4>

									    <a class="nav-link" id="Invite-Players-tab" data-toggle="pill" href="#Invite-Players" role="tab" aria-controls="Invite-Players" aria-selected="false"  onclick="closebarmenutour()">Invite Players</a>

									    <a class="nav-link" id="Embed-Codes-tab" data-toggle="pill" href="#Embed-Codes" role="tab" aria-controls="Embed-Codes" aria-selected="false"  onclick="closebarmenutour()">Embed Codes</a>

	        							<h4 class="titleh4 mt-30 mb-10 st600">Manage</h4>

									    <a class="nav-link" id="Participants1-tab" data-toggle="pill" href="#Participants1" role="tab" aria-controls="Participants1" aria-selected="false"  onclick="closebarmenutour()">Participants</a>

									    <a class="nav-link" id="Email-Participants-tab" data-toggle="pill" href="#Email-Participants" role="tab" aria-controls="Email-Participants" aria-selected="false"  onclick="closebarmenutour()">Email Participants</a>

									    <a class="nav-link" id="Seed-Brackets-tab" data-toggle="pill" href="#Seed-Brackets" role="tab" aria-controls="Seed-Brackets" aria-selected="false"  onclick="closebarmenutour()">Seed-Brackets</a>

									    <a class="nav-link" id="Match-Dashboard-tab" data-toggle="pill" href="#Match-Dashboard" role="tab" aria-controls="Match-Dashboard" aria-selected="false"  onclick="closebarmenutour()">Match Dashboard</a>

									     <a class="nav-link" id="Activity-Feed-tab" data-toggle="pill" href="#Activity-Feed" role="tab" aria-controls="Activity-Feed" aria-selected="false"  onclick="closebarmenutour()">Activity Feed</a>

									     <button type="button" class="btn btn-sm btn-light btn-three f-14 mtb-20" data-target="#modal-confirm-elim" data-toggle="modal">Delete Tournament</button>
								    </div>	            		
	            					
	            				</div>

			            	</div>	
			            	<div class="col-lg-9 col-md-9 col-sm-12 col-12 padlr-50">
			            		<div class="tab-content cont-tab2" id="v-tabtour-tabContent">

							      <div class="tab-pane fade show active" id="setup" role="tabpanel" aria-labelledby="setup-tab">
							      		<?php include('views/create-tournament/v-setup.php') ?>
							      </div>

							       <div class="tab-pane fade " id="Brackets" role="tabpanel" aria-labelledby="Brackets-tab">
							       		<?php include('views/create-tournament/v-brackets.php') ?>
							       </div>

							        <div class="tab-pane fade " id="Streams" role="tabpanel" aria-labelledby="Streams-tab">
							       		<?php include('views/create-tournament/v-streams.php') ?>
							       </div>

							        <div class="tab-pane fade " id="Publish" role="tabpanel" aria-labelledby="Publish-tab">
							       		<?php include('views/create-tournament/v-publish.php') ?>
							       </div>

							       <div class="tab-pane fade " id="Invite-Players" role="tabpanel" aria-labelledby="Invite-Players-tab">
							       		<?php include('views/create-tournament/v-invite-players.php') ?>
							       </div>

							        <div class="tab-pane fade " id="Embed-Codes" role="tabpanel" aria-labelledby="Embed-Codes-tab">
							       		<?php include('views/create-tournament/v-embed-codes.php') ?>
							       </div>

							       <div class="tab-pane fade " id="Participants1" role="tabpanel" aria-labelledby="Participants1-tab">
							       		<?php include('views/create-tournament/v-participants.php') ?>
							       </div>

							       <div class="tab-pane fade " id="Email-Participants" role="tabpanel" aria-labelledby="Email-Participants-tab">
							       		<?php include('views/create-tournament/v-email-participants.php') ?>
							       </div>

							       <div class="tab-pane  fade" id="Seed-Brackets" role="tabpanel" aria-labelledby="Seed-Brackets-tab">
							       		<?php include('views/create-tournament/v-seeds.php') ?>
							       </div>

							       <div class="tab-pane fade " id="Match-Dashboard" role="tabpanel" aria-labelledby="Match-Dashboard-tab">
							       		<?php include('views/create-tournament/v-match-dashboard.php') ?>
							       </div>

							       <div class="tab-pane fade " id="Activity-Feed" role="tabpanel" aria-labelledby="Activity-Feed-tab">
							       		<?php include('views/create-tournament/v-activity-feed.php') ?>
							       </div>
							     

							      </div>
							    </div>
								            	
							</div>
						</div>
		            			
		            		
				      	
				    </div> <!-- close container-fluid -->
	  				<?php include('footer.php') ?>
				</section> <!-- close section wrapper -->
	  		</section> <!-- close section main-cointaner -->
	  	</section> <!-- close section menu -->

		<?php include('scripts.php') ?>

		<script src="assets/editor/tinymce.js"></script>
		<script type="text/javascript" src="assets/js/select2.full.js"></script>
		<script type="text/javascript" src="assets/js/scripts-create-tournaments.js"></script>


	</body>
</html>


<div class="modal hide fade modalcustom" id="modal-confirm-export-info" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body mt-20">
      	<div class="text-center">
      		<span class="titleh3 text-center mb-10">Export Info</span>
      		<span class="span1">Export participants to CSV.</span>
      	</div>
      		
          <div class="text-center mt-15">
          	<button type="button" class="btn btn-light btn-three f-14 mb-10" data-dismiss="modal">Cancel</button>
          	<button type="button" class="btn btn-light btn-two mb-10" data-dismiss="modal" >Download</button>
          </div>

      </div>
    </div>
  </div>
</div>


<div class="modal hide fade modalcustom" id="modal-edit-player" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body mt-20">

      	<form class="needs-validation" novalidate>

      		<span class="titleh3  mb-10">Edit Player</span>
      		<input type="text" class="form-control input-one" placeholder="Player Name" id="" required="">
      		 <div class="invalid-feedback mb-10">
	        	Please choose a Player Name
	   		 </div>
     		
	          <div class="text-center mt-15">
	          	<button type="button" class="btn btn-light btn-three f-14 mb-10" data-dismiss="modal">Cancel</button>
	          	<button type="submit" class="btn btn-light btn-two mb-10">Save</button>
	          </div>
	    </form>

      </div>
    </div>
  </div>
</div>


<div class="modal hide fade modalcustom" id="modal-confirm-seed" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body mt-20">
      	<div class="text-center">
      		<span class="titleh3 text-center mb-10">Tournament check-in is still open</span>
      		<span class="span1">This page does not refresh automatically. Refresh this page after check-in has ended to ensure that all checked-in players are seeded.</span>
      	</div>
      		
          <div class="text-center mt-15">
          	<button type="button" class="btn btn-light btn-three f-14 mb-10" data-dismiss="modal">Cancel</button>
          	<button type="button" class="btn btn-light btn-two mb-10" onclick="opendetailseed()">I understand</button>
          </div>

      </div>
    </div>
  </div>
</div>


<div class="modal hide fade modalcustom" id="modal-auto-seed" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body mt-20">
      	<div class="text-center mb-20">
      		<span class="titleh3 text-center mb-10">Autoseed Elimination</span>
      		<span class="span1">How many participants  would you like to seed automatically? We will only pull from participants  visible with the filters you've selected.</span>

	      	<label class="titleh4 mt-20 mb-10">Participants will be seeded into the bracket</label>

	      	<input type="number" class="form-control input-one mb-10" placeholder="Participants" min="5" max="10" value="5">
      	</div>
     		
          <div class="text-center mt-15">
          	<button type="button" class="btn btn-light btn-three f-14 mb-10" data-dismiss="modal">Cancel</button>
          	<button type="button" class="btn btn-light btn-two mb-10">Autoseed</button>
          </div>

      </div>
    </div>
  </div>
</div>