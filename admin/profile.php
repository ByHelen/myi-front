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
                      <span class="card-title pull-left">Profile</span>
                        
                        <span class="tools float-right">
                         
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <form class="needs-validation" novalidate>
                        <div class="row">
                          <div class="col-md-6 text-center align-self-center">
                              <div class="img-user2 mt-30" style="background-image: url('assets/img/users/1.jpg'); background-repeat:no-repeat;  background-size: cover; background-position: center center;" id="imglogo1">
         
                              </div>
                            <br>
                            <div class="fileupload btn btn-sm btn-light btn-three">
                              <span>Profile Image</span>
                              <input type="file" name="imagelogo" id="imagelogo1" class="upload " accept="image/*" onchange="loadFile2(event)">
                            </div>
                          </div>

                          <div class="col-md-6 align-self-center">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="titleh4 mt-20 mb-10">First Name</label>
                                    <input type="url" class="form-control input-one" placeholder="First Name" required="" id="FirstName" name="FirstName">
                                    <div class="invalid-feedback mb-10">
                                        Please choose a First Name
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="titleh4 mt-20 mb-10">Last Name</label>
                                    <input type="url" class="form-control input-one" placeholder="Last Name" required="" id="LastName" name="LastName">
                                    <div class="invalid-feedback mb-10">
                                        Please choose a Last Name
                                    </div>
                                  </div>
                                </div>
                             
                                <label class="titleh4 mt-20 mb-10">Email</label>
                                <input type="email" class="form-control input-one mb-10" placeholder="email" required="" id="email" name="email">
                                <div class="invalid-feedback mb-10">
                                    Please choose a Email
                                </div>

                                  <!--  <div class="invalid-feedback">
                                  Email No available
                               </div> -->

                                <!--  <div class="valid-feedback">
                                  Email available
                               </div> -->

                               <div class="row">
                                <div class="col-md-6">
                                   <label class="titleh4 mt-20 mb-10">NameUser</label>
                                  <input type="url" class="form-control input-one" placeholder="NameUser" required="" id="NameUser" name="NameUser">
                                  <div class="invalid-feedback mb-10">
                                      Please choose a NameUser
                                  </div>

                                  <!--  <div class="invalid-feedback">
                                    UserName No available
                                 </div> -->

                                  <!--  <div class="valid-feedback">
                                    UserName available
                                 </div> -->
                                </div>
                                <div class="col-md-6">
                                    <label class="titleh4 mt-20 mb-10">Password</label>
                                  <input type="password" class="form-control input-one mb-10" placeholder="Password" required="" id="password" name="password">
                                  <div class="invalid-feedback mb-10">
                                        Please choose a Password
                                  </div>
                                    <!--  <div class="invalid-feedback">
                                    Password Incorrect
                                 </div> -->
                                </div>
                              </div>

                              <label class="titleh4 mt-15 mb-10">Twitter</label>
                              <input type="url" class="form-control input-one mb-10" placeholder="Link Twitter" required="" id="linktwitter" name="linktwitter">
                              <div class="invalid-feedback mb-10">
                                    Please choose a Link Twitter
                              </div>

                              <label class="titleh4 mt-15 mb-10">About</label>
                              <textarea class="form-control input-one mb-10" name="about" id="about" cols="30" rows="3" required=""></textarea>
                              <div class="invalid-feedback mb-10">
                                    Please choose a Text About
                              </div>
                          </div>
                        </div>
                        <div class="mt-20 text-center">
                          <button type="submit" class="btn btn-sm btn-light btn-one mt-20">Save</button>
                        </div>    
                    </form>
                  </div>
                </section>
              </div>
            </div>
                            
            <?php include('footer.php') ?>
          </section>
      </section>
  </section>

    
    <?php include('scripts.php') ?>
    <script>
      var loadFile2 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('imagelogo1');
        $('#imglogo1').css('background-image', 'url(' + reader.result + ')');
      };
      reader.readAsDataURL(event.target.files[0]);
    };

    </script>

  </body>


</html>

  