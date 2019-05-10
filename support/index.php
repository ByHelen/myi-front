<!DOCTYPE html>
<html lang="en">

  <head>
    <title>MYI Battle</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="MYI">
    <meta name="generator" content="HTML5,PHP7,JS,BOOTSTRAP3" />
    <meta name="keywords" content="">
    <meta name="robots" content="index, no follow">
    <meta name="apple-mobile-web-app-capable" content="no" />
    <meta name="google" content="translate" />
    <meta name="abstract" content="">
    <meta name="category" content="">
    <meta name="language" content="en">
    <meta name="locality" content="">
    <meta name="classification" content="">
    <meta name="rating" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="assets/css/stylesm2b.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  </head>

  <body class="bg-5">

  <section class="container" >

    <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 text-center formlogin">
    
      <div class="row mar0">
        <div class="col-md-6 align-self-center text-center padbg bg-1">

          <div class="avatar1">
            <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1"><!--  head -->

            <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2"><!-- face -->

            <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3"><!-- body -->
          </div>

          <h3 class="titleh3 text-center mt-10">NameUser</h3>
          <h2 class="titleh3-3"><i class="fas fa-desktop mr-10"></i>Computer 1</h2>
          
        </div>
        <div class="col-md-6 align-self-center padbg bg-2">
            <h1 class="cw text-center">MYI BATTLE</h1>
            <h5 class="cw1 text-center">Support</h5>
          <form class="needs-validation" novalidate>

            <div class="form-group mt-20">
              <select class="custom-select" required>
                 <option value="" selected="" disabled="">Category</option>
                <option value="1">One</option>
                <option value="">category1</option>
                <option value="">category</option>
              </select>
              <div class="invalid-feedback text-left"> Please choose a Category</div>
            </div>

             <textarea class="form-control input-one mb-10 mt-20" placeholder="Message"  id="message" name="message" required="" cols="30" rows="6"></textarea>

            <div class="invalid-feedback mb-10 text-left">
                Please choose a Message
            </div>

            <div class="text-center mt-15">
              <button type="submit" onclick="" class="btn btn-light btn-one mb-0">Send</button>
            </div>
          </form>
        </div>
    </div>
   
  </div>                          
      
  </section>

    
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
      
      $(document).ready(function() {

         (function() {
                'use strict';
                window.addEventListener('load', function() {

                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
      });

    </script>

  </body>


</html>

  