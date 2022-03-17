<?php

    //connextion db 
        //session_start();
       
    ?>
   
 <div class="row flex-nowrap " style="height:100vh;">
        <div class="col-auto col-md-auto col-xl-2 px-sm-auto px-0 collapse d-lg-block  d-xlg-none " style="background:#FAFFC1;height:100vh; "  id="collapseExample">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
             		 <span class=" fs-4 my-2 fs-5 d-none d-sm-inline" style="color: black;"><span class="border-start border-info border-5 ps-2 fw-bolder ms-3 align-text-top  ">E-classe</span> </span>
                   <div class="text-center p-3 ">
                      <img src="logoyouc.jpg" alt="hugenerd" width="130" height="130" class="rounded-circle d-none d-md-block ">                
                      <p class="navbar-brand mx-0 fw-bold text-nowrap  d-none d-md-block  " style="color:#0dcaf0; font-weight: bold;">
                          <?php echo $_SESSION['first_name'] .' '. $_SESSION['last_name']; ?></p>
                      <p class="navbar-brand mx-0 text-nowrap  d-none d-md-block fs-5"><span style="color:black; font-weight: bold;">Admin</span> </p>
                    </div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start d-flex justify-content-center me-2 mb-md-0 " id="collapseExample" >
                        <li class="nav-item fs-5 mt-3" >
                            <a href="index.php" class="nav-link align-middle px-4  forsid">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-3" >
                            <a href="indexcour.php" class="nav-link align-middle px-4  forsid">
                            <i class="bi bi-bookmark"></i><span class="ms-1 d-none d-sm-inline">Course</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-3" >
                            <a href="indexstudent.php" class="nav-link align-middle px-4  forsid">
                                <i class="bi bi-mortarboard"></i> <span class="ms-1 d-none d-sm-inline">Students</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-3" >
                            <a href="indexpay.php" class="nav-link align-middle px-4  forsid">
                                <i class="bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">Payment</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-3" >
                            <a href="#" class="nav-link align-middle px-4  forsid">
                                <i class="bi bi-file-earmark-bar-graph"></i> <span class="ms-1 d-none d-sm-inline">Report</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-3" >
                            <a href="#" class="nav-link align-middle px-4 forsid">
                                <i class="bi bi-sliders"></i><span class="ms-1 d-none d-sm-inline">Settings</span>
                            </a>
                        </li>
                        <li class="nav-item fs-5 mt-5"  >
                        <a href="logout.php" class="nav-link align-middle px-4 forsid" >
                                <i class="bi bi-box-arrow-right"></i><span class="ms-1 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>  
                     </ul>
            </div> 
        </div>

                        
                