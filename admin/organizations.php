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
                      <span class="card-title pull-left">Organizations</span>
                        
                        <span class="tools float-right">
                          <a href="#modal-organization" data-toggle="modal" class="btn btn-sm btn-light btn-three f-14 mt-10">New</a>
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="table-responsive">
                        <table  class="table display table-striped" id="tableorganizations">
                          <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Organization</th>
                                <th class="text-center">UserName</th>
                                <th class="text-center">Tournaments</th>
                                <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                              <td class="text-center">1</td>
                              <td>MYI Entertaiment</td>
                              <td>MYI Entertaiment</td>
                              <td class="text-center">10</td>
                              <td class="text-center">

                               <a href="#modal-organization" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a>

                                 <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a> -->


                               <a href="http://edinsoncs.com/myi/details-organizations.php" target="blank" class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Profile" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

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

  </body>


</html>

  <script>
      $('#tableorganizations').DataTable( {
    
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

      var loadFile2 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('imagelogo');
      $('#imglogo').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };

    var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('cover');
      $('#imgcover').css('background-image', 'url(' + reader.result + ')');
    };
    reader.readAsDataURL(event.target.files[0]);
  };


  function countcharacteres(cadena) {
      var cadena=cadena;
      console.log(cadena);
     var totalChars = cadena.length;
     $('#characteres').html(totalChars);
}

  </script>