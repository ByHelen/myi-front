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
                      <span class="card-title pull-left">Packages Coins</span>
                        
                        <span class="tools float-right">
                          <a href="#modal-coins" data-toggle="modal" class="btn btn-sm btn-light btn-three f-14 mt-10">New</a>
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="table-responsive">
                        <table  class="table display table-striped" id="tablecoins">
                          <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                              <td class="text-center">1</td>
                              <td>650 Coins</td>
                              <td class="text-right">50.00</td>
                              <td class="text-center">

                               <a href="#modal-coins" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a>

                                 <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a> -->


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
      $('#tablecoins').DataTable( {
    
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

  </script>