<div class="modal hide fade modalcustom" id="modal-search-tour" tabindex="-1" role="dialog" aria-labelledby="modal-search-tour" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
         <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
         </button>

      <div class="modal-header">
        <div class="col-md-12">
          <h2 class="modal-title text-left" id="modal-search-tour">Results for "search" in Tournaments</h2>
        </div>
      </div>
        <div class="col-md-12 text-right mt-10">
          <a href="search.php" class="alink">More</a>  
        </div>

      <div class="modal-body mtb-20 splr1">

         <div class="search-scroll">

           <?php for ($i=0; $i < 5 ; $i++) {  ?>
            
              <a href="details-tournament.php" >
              <div class="box2">


                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-12 align-self-center text-center">
                    <img class="imgmenu2 align-self-center" src="assets/img/users/1.jpg" alt="">
                  </div>

                   <div class="col-lg-10 col-md-8 col-sm-8 col-12 align-self-center alimov1">
                    <span class="label5">Name Tournament </span>
                         <span class="span1">04/27/2019 8:00 AM PDT</span>
                  </div>
                   <div class="col-lg-1 col-md-2 col-sm-2 col-12 align-self-center alimov2">
                     <span class="span1 mr-10">2v2 </span>
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

