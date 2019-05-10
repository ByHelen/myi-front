<!DOCTYPE html>
<html lang="en">

  <?php include('header.php') ?>

  <body>

  <section id="container" class="">

    <?php include('menu.php') ?>

      <section id="main-content">
          <section class="wrapper">

            <div class="row">
              <div class="col-sm-12">
                <section class="card">

                    <header class="card-header">
                      <span class="card-title pull-left">Settings</span>
                        
                        <span class="tools float-right">
                         
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="row">
                        <div class="col-md-6">
                          <form class="needs-validation" novalidate>

                            <label class="titleh4 mt-20 mb-10">Shipping Email</label>
                            <input type="email" class="form-control input-one mb-10" placeholder="shipping mail" required="" id="shippingmail" name="shippingmail">
                             <div class="invalid-feedback mb-10">
                                  Please choose a Shipping Email
                               </div>

                               <label class="titleh4 mt-15 mb-10">Password</label>
                            <input type="password" class="form-control input-one mb-10 col-md-4 col-sm-6 col-12" placeholder="Password" required="" id="passmail" name="passmail">
                             <div class="invalid-feedback mb-10">
                                  Please choose a Password
                               </div>

                            <div class="mt-20 text-center">
                              <button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
                            </div>    

                          </form>
                        </div>
                        <div class="col-md-6">
                          <form class="needs-validation" novalidate>

                            <label class="titleh4 mt-20 mb-10">Facebook</label>
                            <input type="url" class="form-control input-one" placeholder="Facebook" required="" id="facebook" name="facebook">
                            <div class="invalid-feedback mb-10">
                                Please choose a Link Facebook
                            </div>

                            <label class="titleh4 mt-20 mb-10">Google Plus</label>
                            <input type="url" class="form-control input-one" placeholder="Google" required="" id="Google" name="Google">
                            <div class="invalid-feedback mb-10">
                                Please choose a Link Google Plus
                            </div>

                            <label class="titleh4 mt-20 mb-10">Twitter</label>
                            <input type="url" class="form-control input-one" placeholder="Twitter" required="" id="Twitter" name="Twitter">
                            <div class="invalid-feedback mb-10">
                                Please choose a Link Twitter
                            </div>

                            <label class="titleh4 mt-20 mb-10">Discord</label>
                            <input type="url" class="form-control input-one" placeholder="Discord" required="" id="Discord" name="Discord">
                            <div class="invalid-feedback mb-10">
                                Please choose a Link Discord
                            </div>

                            <label class="titleh4 mt-20 mb-10">Youtube</label>
                            <input type="url" class="form-control input-one" placeholder="Youtube" required="" id="Youtube" name="Youtube">
                            <div class="invalid-feedback mb-10">
                                Please choose a Link Youtube
                            </div>


                            <div class="mt-20 text-center">
                              <button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
                            </div>    

                          </form>
                        </div>
                      </div>
                  </div>
                </section>
              </div>
            </div>
                            
            <?php include('footer.php') ?>
          </section>
      </section>
  </section>

    
    <?php include('scripts.php') ?>

  </body>


</html>

  