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
                      <span class="card-title pull-left">Tickets Support</span>
                        
                        <span class="tools float-right">
                         
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="table-responsive">
                        <table  class="table display table-striped" id="tablesupport">
                          <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name User</th>
                                <th class="text-center">Message</th>
                                <th class="text-center">Point</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                              <td class="text-center">1</td>
                              <td>User1</td>
                              <td>Do not load the game</td>
                              <td class="text-center">Computer1</td>
                              <td class="text-center">06/05/2019</td>
                              <td class="text-center ">
                               <!-- <span class="badge badge-warning ">Pending</span> -->
                               <!-- <span class="badge badge-success ">Resolved</span> -->
                               <span class="badge badge-danger ">To resolve</span>

                              </td>
                              <td class="text-center">

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as Pending" data-placement="left"> <i class="fas fa-circle text-warning" ></i> </a>

                                 <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as resolved"> <i class="fas fa-circle text-success" data-placement="left"></i> </a>

                               <a href="#modal-support" data-toggle="modal"  class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Ticket" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

                                <a href="#modal-confirm-elim" data-toggle="modal" class="f-16"> <i class="fas fa-trash-alt text-danger1" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i> </a> 
                              </td>
                            </tr>

                             <tr class="gradeX">
                              <td class="text-center">2</td>
                              <td>User1</td>
                              <td>Do not load the game</td>
                              <td class="text-center">Computer2</td>
                              <td class="text-center">06/05/2019</td>
                              <td class="text-center ">
                               <span class="badge badge-warning ">Pending</span>
                               <!-- <span class="badge badge-success ">Resolved</span> -->
                               <!-- <span class="badge badge-danger ">To resolve</span> -->

                              </td>
                              <td class="text-center">

                                <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as Pending" data-placement="left"> <i class="fas fa-circle text-warning" ></i> </a> -->

                                 <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as resolved"> <i class="fas fa-circle text-success" data-placement="left"></i> </a>

                               <a href="#modal-support" data-toggle="modal"  class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Ticket" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

                                <a href="#modal-confirm-elim" data-toggle="modal" class="f-16"> <i class="fas fa-trash-alt text-danger1" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i> </a> 
                              </td>
                            </tr>

                             <tr class="gradeX">
                              <td class="text-center">3</td>
                              <td>User3</td>
                              <td>Do not load the game</td>
                              <td class="text-center">Computer3</td>
                              <td class="text-center">06/05/2019</td>
                              <td class="text-center ">
                               <!-- <span class="badge badge-warning ">Pending</span> -->
                               <span class="badge badge-success ">Resolved</span>
                               <!-- <span class="badge badge-danger ">To resolve</span> -->

                              </td>
                              <td class="text-center">

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as Pending" data-placement="left"> <i class="fas fa-circle text-warning" ></i> </a>

                                 <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Mark as resolved"> <i class="fas fa-circle text-success" data-placement="left"></i> </a> -->

                               <a href="#modal-support" data-toggle="modal"  class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Ticket" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

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


<div class="modal hide fade modalcustom" id="modal-support" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
    <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            
      <div class="modal-header details">
      <h2 class="titleh3" >Ticket Support
         <!-- <span class="badge badge-warning ml-10">Pending</span> -->
         <!-- <span class="badge badge-success ml-10">Resolved</span> -->
         <span class="badge badge-danger ml-10">To resolve</span>
      </h2>
      </div>
      
      <div class="modal-body mt-30">
        
        <form class="needs-validation" novalidate>

        <div class="form-row">
            <div class="col-md-4 align-self-center">
              <div class="avatar1">
                <img src="assets/img/avatar/2.png" alt="" class="capa-avatar1"><!--  head -->

                  <img src="assets/img/avatar/1.png" alt="" class="capa-avatar2"><!-- face -->

                  <img src="assets/img/avatar/3.png" alt="" class="capa-avatar3"><!-- body -->
               </div>
            </div>
            <div class="col-md-4 mb-3 align-self-center">
                <label class="label1">Username</label>
                 <input type="text" class="form-control input-one" id="Username" placeholder="Username"  disabled="">
  
            </div>
             <div class="col-md-4 mb-3 align-self-center">
                <label class="label1">Point</label>
                 <input type="text" class="form-control input-one" id="point" placeholder="Point"  disabled="">
  
            </div>
            <div class="col-md-12 mb-3">
                <label class="label1">Category</label>
                 <input type="text" class="form-control input-one" id="category" placeholder="Category" disabled="">
            </div>
            <div class="col-md-12 mb-3">
                <label  class="label1">Message</label>
                <textarea class="form-control input-one" placeholder="Message"  id="message" name="message" cols="30" rows="6" disabled=""></textarea>
            </div>

            <div class="col-md-12 mb-3">
                <label  class="label1">Solution</label>
                <textarea class="form-control input-one" placeholder="Message"  id="solution" name="solution" required="" cols="30" rows="6"></textarea>
                  <div class="invalid-feedback">
                    Please choose a Solution
                </div>
            </div>

            <div class="form-group">
              <label  class="label1">Status</label>
              <select class="custom-select" required>
                <option value="0">To Resolve</option>
                <option value="1">Pending</option>
                <option value="2">Resolved</option>
              </select>
              <div class="invalid-feedback text-left"> Please choose a Category</div>
            </div>         
          </div>
           
          <div class="mt-20 mb-20 text-center">
            <button class="btn btn-sm btn-light btn-three f-14 mt-10" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-light btn-one mt-10">Save</button>
          </div>
        </div>

      </form>
      </div>
    </div>
  </div>
</div>



  <script>
       $('#tablesupport').DataTable( {
    
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