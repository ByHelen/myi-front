<div class="modal hide fade modalcustom" id="modal-search-organization" tabindex="-1" role="dialog" aria-labelledby="search-organization" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
         <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
         </button>

      <div class="modal-header">
        <h2 class="modal-title text-left" id="search-organization">Results for "search" in Organizations</h2>  
      </div>
      <div class="modal-body mtb-20 splr1">

        <div class="search-scroll">

           <?php for ($i=0; $i < 5 ; $i++) {  ?>
            
              <a href="details-organization.php" >
              <div class="box2">
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-12 align-self-center text-center">
                    <img class="imgmenu3 align-self-center" src="assets/img/users/1.jpg" alt="">
                  </div>

                   <div class="col-lg-11 col-md-10 col-sm-10 col-12 align-self-center alimov1">
                    <span class="label5">Name Tournament </span>
                  </div>
                </div>
              </div>
              </a>
           <?php } ?>
         
        </div>
      </div>
    </div>
  </div>
</div>

