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
                      <span class="card-title pull-left">Info Blog</span>
                        
                        <span class="tools float-right">
                         
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <form class="needs-validation" novalidate>
                        

                        <label class="titleh4 mt-15 mb-10">Terms and Conditions</label>
                        <textarea class="form-control input-one mb-10 editor" name="terms" id="terms" cols="30" rows="3" required=""></textarea>
                        <div class="invalid-feedback mb-10">
                              Please choose a Terms and Conditions
                        </div>

                        <label class="titleh4 mt-30 mb-10">Privacy Policy</label>
                        <textarea class="form-control input-one mb-10 editor" name="terms" id="terms" cols="30" rows="3" required=""></textarea>
                        <div class="invalid-feedback mb-10">
                              Please choose a Privacy Policy
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
    <script src="assets/components/editor/tinymce.js"></script>

    <script type="text/javascript">
      

      tinymce.init({
      selector: '.editor',
      height: 200,
      menubar: false,
      theme: "modern",
      plugins: [
        'advlist autolink lists link image charmap print preview anchor textcolor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code help wordcount'
      ],
      toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      content_css: [
        '//fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,800,900',
        'assets/components/editor/skins/lightgray/skin.min.css']
      });
    </script>

  </body>


</html>

  