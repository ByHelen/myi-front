<!DOCTYPE html>
<html lang="en">

  <?php include('header.php') ?>

  <body class="bg-5">

  <section class="container" >


    <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 text-center formlogin">
      <h1 class="cw text-center">MYI BATTLE</h1>
      <h5 class="cw1 text-center">Recover Password</h5>

      <form class="needs-validation" novalidate>


          <input type="password" class="form-control input-one mb-10 mt-30" placeholder="Password"  id="password" name="password" required="">
          <div class="invalid-feedback mb-10 text-left">
              Please choose a Password
          </div>
         <!--  <div class="invalid-feedback mb-10">
              Incorrect Password
          </div> -->

           <input type="password" class="form-control input-one mb-10" placeholder="Repeat Password"  id="password2" name="password2" required="">
          <div class="invalid-feedback mb-10 text-left">
              Please choose a Password
          </div>
         <!--  <div class="invalid-feedback mb-10">
              Passwords do not match
          </div> -->

          <div class="text-center mt-15">
            <button type="submit" onclick="" class="btn btn-light btn-three">Send</button>
          </div>
      </form>
    </div>                          
    


        
  </section>

    
    <?php include('scripts.php') ?>

  </body>


</html>

  