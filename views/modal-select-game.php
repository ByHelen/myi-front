<div class="modal hide fade modalcustom" id="modal-select-game" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	      		
		<h3 class="titleh3 text-center mtb-20">Select Game</h3>

		 <input type="search" class="form-control input-one offset-md-3 col-md-6 mb-30" placeholder="&#xf002; Search" id="search">
			
		<div class="row mb-20">
			<?php for ($i=0; $i < 12 ; $i++) { ?>
			<div class="col-lg-3 col-md-4 col-sm-4 col-6 mb-30">
    			<a href="create-tournament.php" class="">
					<div class="text-center selectgame">
						<img src="assets/img/games/1.jpg" class="img-fluid" alt="">
						<span class="span1">League of Legends</span>
					</div>
				</a>
			</div>
			<?php } ?>
  		</div>

    </div>
  </div>
</div>