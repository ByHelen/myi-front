<!DOCTYPE html>
<html lang="en">

  <?php include('header.php') ?>
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <link rel="stylesheet" href="assets/css/select2-bootstrap.css">

  <body>

  <section id="container" class="">

    <?php include('menu.php') ?>

      <section id="main-content">
          <section class="wrapper">

            <div class="row">
              <div class="col-sm-12">
                <section class="card">

                    <header class="card-header">
                      <span class="card-title pull-left">Post</span>
                        
                        <span class="tools float-right">
                         <a href="javascript:history.back()" class="alink f-16"><i class="fas fa-arrow-left mr-10"></i>Back</a>

                         <a href="" class="alink f-16 ml-20"><i class="fas fa-eye mr-10"></i>View</a>
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <form class="needs-validation" novalidate>

                        <div class="row">
                          <div class="col-md-4 col-sm-6 col-12 col-order-1">
                                
                            <label class="titleh4 mt-20 mb-10">Category</label>
                           <select id="category" name="category" class="form-control select2-single"  aria-hidden="true" onchange="" data-placeholder="Select a Category" required="">
                            <option value="" selected="" disabled=""></option>
                            <option value="2">Features</option>
                            <option value="3">Community</option>
                          </select>
                           <div class="invalid-feedback">
                                Please choose a Category
                             </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 col-order-2">
                            <label class="titleh4 mt-20 mb-10">Date</label>
                             <input type="text" class="form-control input-one" placeholder="date" required="" id="date" name="date" disabled="">
                          </div>
                        </div>

                        <label class="titleh4 mt-20 mb-10">Tittle</label>
                        <input type="url" class="form-control input-one" placeholder="Title" required="" id="Title" name="Title" maxlength="90" onkeyup="convertircontar(this.value)">
                        <div class="invalid-feedback mb-10">
                            Please choose a Title
                        </div>

                        <label class="titleh4 mt-20 mb-10">Url Link</label>
                        <input type="text" class="form-control input-one" placeholder="Url" required="" id="urlpost" name="urlpost" disabled="">


                        <div class="text-center mb-20 mt-20">
                          <div class="fileupload btn btn-sm btn-light btn-three  "><span><i class="ion-upload m-r-5"></i>Image Post</span>
                          <input type="file" name="imagepost" id="imagepost" class="upload " accept="image/*" onchange="loadFile10(event)">
                        </div>
                        <br>
                        
                      </div>

                        <div class="offset-md-2 col-md-8 col-sm-12 col-12 text-center mb-30">
                          <img class="img-fluid bor" src="assets/img/no-back.jpg" id="imgpost" alt="">
                        </div>

                        <label class="titleh4 mt-30 mb-10">Post</label>
                        <textarea class="form-control input-one mb-10 editor" name="post" id="post" cols="30" rows="3" required=""></textarea>
                        <div class="invalid-feedback mb-10">
                              Please Insert a Post
                        </div>

                        <label class="titleh4 mt-30 mb-10">Meta Tags</label>
                        <input name="tagsinput" id="tagsinput" class="tagsinput" value="Tags1" required="" />
                          <div class="invalid-feedback mb-10">
                              Please choose a Tags
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
    <script src="assets/js/jquery.tagsinput.js"></script>
    <script type="text/javascript" src="assets/js/select2.full.js"></script>
    <script src="assets/components/editor/tinymce.js"></script>

    <script>


   var loadFile10 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imgpost');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };


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


    $(function() {

      $(".tagsinput").tagsInput();

    });

     $(document).ready(function() {
      

        $.fn.select2.defaults.set( "theme", "bootstrap" );

        var placeholder = "";


        $( ".select2-single, .select2-multiple" ).select2( {
            placeholder: placeholder,
            width: null,
            containerCssClass: ':all:'
        } );

        $('select:not(.normal)').each(function () {
            $(this).select2({
                dropdownParent: $(this).parent()
            });
       });
    });

     function convertircontar(cadena) {
      var cadena=cadena;
      cadena = cadena.trim(); //quita espacio antes y despues
      cadena = cadena.toLowerCase(); //pone en minusculas
      var nueva = omitacent(cadena); //quita acentos
      nuevaCadena= nueva.replace(/\s/g,"-"); //separa con guiones
      $('#urlpost').val(nuevaCadena);

   }


   function omitacent(text) {
    var acentos = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
    var original = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
    for (var i=0; i<acentos.length; i++) {
        text = text.replace(new RegExp(acentos.charAt(i), 'g'), original.charAt(i));
    }
    return text;
}


    </script>

  </body>


</html>

  