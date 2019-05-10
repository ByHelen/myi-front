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
                      <span class="card-title pull-left">Writers</span>
                        <span class="tools float-right">
                          <a href="#modal-writers" data-toggle="modal" class="btn btn-sm btn-light btn-three f-14 mt-10">New</a>
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="table-responsive">
                        <table  class="table display table-striped" id="tablewriters">
                          <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Image Profile</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Post</th>
                                <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                              <td class="text-center">1</td>
                              <td class="text-center"><img class="imgtable" src="assets/img/users/1.jpg" alt=""></td>
                              <td>MYI BATTLE</td>
                              <td class="text-center">All</td>
                              <td class="text-center">myi@myi.com</td>
                              <td class="text-center">10</td>
                              <td class="text-center">

                               <a href="#modal-writers" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a>

                                <!--  <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a> -->

                                <a href="#modal-confirm-elim" data-toggle="modal" class="f-16"> <i class="fas fa-trash-alt text-danger1" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i> </a> 
                              </td>
                            </tr>                      
                          
                          </tbody>
                        </table>
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
    <script src="assets/components/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/components/datatables/js/dataTables.buttons.min.js"></script>
    <script src="assets/components/datatables/js/buttons.flash.min.js"></script>
    <script src="assets/components/datatables/js/buttons.html5.min.js"></script>
    <script src="assets/components/datatables/js/buttons.print.min.js"></script>
    <script src="assets/components/jszip/dist/jszip.min.js"></script>
    <script src="assets/components/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/components/pdfmake/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="assets/js/select2.full.js"></script>

  </body>


</html>



  <script>
      $('#tablewriters').DataTable( {
    
         dom: 'Bfrtip',
        lengthMenu: [
            [ 15, 25, 50, 100, 500, -1 ],
            [ '15 rows', '25 rows', '50 rows', '100 rows', '500 rows', 'All' ]
        ],

        buttons: [
            'copy', 'csv', 'excel', 'pdf','pageLength'
        ],

        "order": [[ 0, "desc" ]],

    } );

      var loadFile9 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('imageuser');
        $('#imguser').css('background-image', 'url(' + reader.result + ')');
      };
      reader.readAsDataURL(event.target.files[0]);
    };

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

  </script>