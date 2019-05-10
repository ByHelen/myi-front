<!DOCTYPE html>
<html lang="en">

  <?php include('header.php') ?>

  <body class="bg-5">

  <section class="container" >


    <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 text-center formlogin">
      <h1 class="cw">MYI BATTLE</h1>
      <h5 class="cw1">Sign Up</h5>

      <form class="needs-validation" novalidate>
          <input type="text" class="form-control input-one mb-10 mt-30" placeholder="UserName"  id="username" name="username" required="">
          <div class="invalid-feedback mb-10 text-left">
            Please choose a UserName
         </div>
        <!--   <div class="invalid-feedback mb-10">
              Incorrect UserName
          </div> -->

          <input type="password" class="form-control input-one mb-10" placeholder="Password"  id="password" name="password" required="">
          <div class="invalid-feedback mb-10 text-left">
              Please choose a Password
          </div>
         <!--  <div class="invalid-feedback mb-10">
              Incorrect Password
          </div> -->

          <div class="custom-control custom-checkbox mtb-15 text-left">
          <input type="checkbox" class="custom-control-input" id="iagree">
          <label class="custom-control-label" for="iagree">Remember me</label>
          </div>

          <div class="text-center mt-15">
            <button type="submit" onclick="" class="btn btn-light btn-three">Login</button>
          </div>
      </form>

        <div class="text-center mt-30">
           <a class="alink2" name="fp" id="fp" data-dismiss="modal" data-toggle="modal" href="#modalforgot">Forgot your Password?</a>
        </div>
    </div>                          
    


        
  </section>

    
    <?php include('scripts.php') ?>

    <?php include('views/modal-forgotpass.php') ?>

  </body>


</html>

  