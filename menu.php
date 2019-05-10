<header class="header">
    <div class="sidebar-toggle-box">
        <i class="fa fa-bars"></i>
    </div>
    <a href="index.php" class="logo">MYI BATTLE</a>
   
    <div class="top-nav">
        <ul class="nav pull-right top-menu">

            <!-- si no esta logueado -->
             <!--  <li>
                 <a href="#modallogin" data-toggle="modal" >SIGN UP</a>
              </li> -->

            <!-- si esta logueado -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-user"></i>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout dropdown-menu-right">
                    <div class="log-arrow-up"></div>
                    <li><a href="account.php"><i class=" fa fa-suitcase"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-wallet"></i> Wallet</a></li>
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-network-wired"></i> Connect</a></li>
                    <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                    <li><a href=""><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>


<aside>
    <div id="sidebar"  class="nav-collapse ">

        <div id="menu-one">
            <div class="col-md-12 bar-search border-bottom">
               <div class="input-group ">
                 <input type="search" class="form-control input-one" placeholder="&#xf002; Search" id="search">
                  <div class="input-group-append dropleft1">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-search"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#modal-search-organization" data-toggle="modal" data-dismiss="modal">Search Organizations</a>
                      <a class="dropdown-item" href="#modal-search-tour" data-toggle="modal" data-dismiss="modal">Search by Tournament Name</a>
                    </div>
                  </div>
                </div>
            </div>

            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="browse-tournaments.php">
                        <i class="fa fa-trophy"></i>
                        <span>Browse Tournaments</span>
                    </a>
                </li>

                <!-- si no esta logueado -->
               <!--  <li>
                    <a href="organize-tournaments.php">
                        <i class="fa fa-cogs"></i>
                        <span>Organize Tournaments</span>
                    </a>
                </li> -->

                <!-- si esta logueado -->
                <li>
                    <a href="javascript:void(0)" onclick="openmenu2()">
                        <i class="fa fa-cogs"></i>
                        <span>Organize Tournaments</span>
                    </a>
                </li>

                <li>
                    <a href="#modalcustomize" data-toggle="modal">
                        <i class="fa fa-shield-alt"></i>
                        <span>Armoury</span>
                    </a>
                </li>
            </ul>

                <div class="col-md-12 mt-30">
                   <div class="select mtb-15" style="display: flex;">
                        <select>
                            <option value="" selected="">English</option>
                           <option value="">Español</option>

                        </select>
                        <div class="select_arrow">
                        </div>
                    </div>
                </div>
            
        </div>

        <div id="menu-two">
            <div class="col-md-12 bar-titlemenu border-bottom">
              <span class="titleh4 float-left"><a href="javascript:void(0)" onclick="openmenu1()" class="alink"><i class="fa fa-arrow-left mr-20"></i></a>ORGANIZE</span>
              <span class="float-right"> <a href="create-organization.php" class="btn btn-sm btn-light btn-three">New</a></span>
            </div>

             <!-- div class="box-no">
                <span class="span1">No Organization created</span>
            </div> -->

            <ul class="sidebar-menu mt-0" id="nav-accordion">
                <li>
                    <a href="javascript:void(0)" onclick="openmenu3()">
                        <img class="imgmenu float-left mt-5-1" src="assets/img/users/1.jpg" alt="">
                        <span class="cut mt-5-1">Name Organization Organization Organization</span>
                        <span class="float-right mt-5-1"><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>              
            </ul>
        </div>


        <div id="menu-three">
            <div class="col-md-12 bar-search border-bottom">
              <span class="titleh4"><a href="javascript:void(0)" onclick="openmenu2()" class="alink"><i class="fa fa-arrow-left mr-20"></i></a>
                <span class="">Name Organization</span>
                <span class="float-right "><a href="details-organization.php" class="alink"><i class="fas fa-eye"></i></a></span></span>
            </div>

            <div class="col-12 ptb-40">
                <span class="span1 float-left mt-5-1">TOURNAMENTS</span>
                <span class="float-right"><a href="#modal-select-game" data-toggle="modal" class="btn btn-sm btn-light btn-three">New</a></span>
                
            </div>

            <!-- div class="box-no">
                <span class="span1">No Tournaments created</span>
            </div> -->

            <ul class="sidebar-menu mt-0" id="nav-accordion">
                <li>
                    <a href="details-tournament.php">
                        <img class="imgmenu2 float-left mt-5-1" src="assets/img/users/1.jpg" alt="">
                        <span class="cut mt-5-1">Name Tournament Large Tournament Large</span>
                        <span class="float-right mt-5-1"><i class="fa fa-angle-right"></i></span>
                    </a>
                </li>
            </ul>
        </div>

  

    </div>


</aside>