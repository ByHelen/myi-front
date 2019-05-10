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
                      <span class="card-title pull-left">Users</span>
                        
                        <span class="tools float-right">
                          <button class="btn btn-sm btn-light btn-three f-14 mt-10" data-target="#modal-users" data-toggle="modal">New</button>
                        </span>
                    </header>

                    <div class="card-body panel-body">
                      <div class="table-responsive">
                        <table  class="table display table-striped" id="tableuser">
                          <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name User</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Coins</th>
                                <th class="text-center">Tournaments</th>
                                <th class="text-center">Teams</th>
                                <th class="text-center">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                              <td class="text-center">1</td>
                              <td>User1</td>
                              <td>user1@email.com</td>
                              <td class="text-center">1</td>
                              <td class="text-center">100</td>
                              <td class="text-center">10</td>
                              <td class="text-center">3</td>
                              <td class="text-center">

                               <a href="#modal-users" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a>

                                 <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a> -->


                               <a href="http://edinsoncs.com/myi/profile-user.php" target="blank" class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Profile" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

                                <a href="#modal-confirm-elim" data-toggle="modal" class="f-16"> <i class="fas fa-trash-alt text-danger1" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i> </a> 
                              </td>
                            </tr>

                             <tr class="gradeX">
                              <td class="text-center">2</td>
                              <td>User2</td>
                              <td>user2@email.com</td>
                              <td class="text-center">1</td>
                              <td class="text-center">100</td>
                              <td class="text-center">10</td>
                              <td class="text-center">3</td>
                              <td class="text-center">
                                <a href="#modal-users" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a> -->

                                 <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a>


                               <a href="http://edinsoncs.com/myi/profile-user.php" target="blank" class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Profile" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

                                <a href="#modal-confirm-elim" data-toggle="modal" class="f-16"> <i class="fas fa-trash-alt text-danger1" data-toggle="tooltip" data-placement="left" data-original-title="Delete"></i> </a>  
                              </td>
                            </tr>

                             <tr class="gradeX">
                              <td class="text-center">3</td>
                              <td>User3</td>
                              <td>user3@email.com</td>
                              <td class="text-center">1</td>
                              <td class="text-center">100</td>
                              <td class="text-center">10</td>
                              <td class="text-center">3</td>
                              <td class="text-center">
                                <a href="#modal-users" data-toggle="modal" class="mr-10 f-16"> <i class="fas fa-pencil-alt text-inverse" data-toggle="tooltip" data-original-title="Edit" data-placement="left"></i> </a> 

                                <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Deactivate" data-placement="left"> <i class="fa fa-stop text-warning" ></i> </a>

                                 <!-- <a href="#" class="mr-10 f-16" data-toggle="tooltip" data-original-title="Activate"> <i class="fa fa-play text-success" data-placement="left"></i> </a> -->


                               <a href="http://edinsoncs.com/myi/profile-user.php" target="blank" class="mr-10 f-16" data-toggle="tooltip" data-original-title="View Profile" data-placement="left"> <i class="fa fa-eye t1"></i> </a>

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


<div class="modal hide fade modalcustom" id="modal-users" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
    <button type="button" class="close pabs" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            
      <div class="modal-header details">
      <h2 class="titleh3 d-block" >User</h2>
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
                <label  class="label1">First name</label>
                <input type="text" class="form-control input-one" id="" placeholder="First name" value="" required>
                <div class="invalid-feedback">
                    Please choose a First Name
                </div>
            </div>
            <div class="col-md-4 mb-3 align-self-center">
                <label  class="label1">Last name</label>
                <input type="text" class="form-control input-one" id="" placeholder="Last Name" value="" required>
                <div class="invalid-feedback">
                    Please choose a Last Name
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="label1">Username</label>
                 <input type="text" class="form-control input-one" id="Username" placeholder="Username"  required>
                  <div class="invalid-feedback">
                      Please choose a Username
                  </div>
            </div>
            <div class="col-md-8 mb-3">
                <label class="label1">Email</label>
                 <input type="text" class="form-control input-one" id="email" placeholder="Email"  required>
                  <div class="invalid-feedback">
                      Please choose a Email
                  </div>
            </div>
            <div class="col-md-4 mb-3">
                <label  class="label1">Level</label>
                <input type="number" class="form-control input-one" id="" placeholder="Level" value="" >
            </div>

             <div class="col-md-4 mb-3">
                <label  class="label1">Teams</label>
                <input type="number" class="form-control input-one" id="" placeholder="Teams" value="" >

            </div>
            <div class="col-md-4 mb-3">
                <label class="label1">Tournaments</label>
                 <input type="number" class="form-control input-one" id="Tournaments" placeholder="Tournaments" >

            </div>

             <div class="col-md-8 mb-3">
                <label class="label1">TimeZone</label>
                  <select class="custom-select" required>
                    <option selected="" disabled="">Select</option>
                    <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                    <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                    <option value="-10:00">(GMT -10:00) Hawaii</option>
                    <option value="-09:50">(GMT -9:30) Taiohae</option>
                    <option value="-09:00">(GMT -9:00) Alaska</option>
                    <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                    <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                    <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                    <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                    <option value="-04:50">(GMT -4:30) Caracas</option>
                    <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                    <option value="-03:50">(GMT -3:30) Newfoundland</option>
                    <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                    <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                    <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                    <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                    <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                    <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                    <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                    <option value="+03:50">(GMT +3:30) Tehran</option>
                    <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                    <option value="+04:50">(GMT +4:30) Kabul</option>
                    <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                    <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                    <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                    <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                    <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                    <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                    <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                    <option value="+08:75">(GMT +8:45) Eucla</option>
                    <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                    <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                    <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                    <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                    <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                    <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                    <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                    <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                    <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                    <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                    </select>                   
              </div>

                <div class="col-md-4 mb-3">
                  <label class="label1">Coins</label>
                  <input type="number" class="form-control input-one" id="coins" placeholder="coins"  >
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
       $('#tableuser').DataTable( {
    
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