<?php
            include 'session.php';
            include "connexion.php";
            
            // for student
            $query="SELECT * from students";
            $count=mysqli_query($conn,$query) ;
            $stud = mysqli_num_rows($count); 
            // for coure
            $query="SELECT * from courses";
            $count=mysqli_query($conn,$query) ;
            $cour = mysqli_num_rows($count); 
            // for total paymenyt
            $query="SELECT SUM(amount_paid) AS total FROM payment_details";
            $count=mysqli_query($conn,$query) ;
            $pay = mysqli_fetch_assoc($count); 
            $som = $pay['total'];
              // for user
            $query="SELECT * from comptes";
            $count=mysqli_query($conn,$query) ;
            $user = mysqli_num_rows($count); 
?>

<!DOCTYPE html>
<html lang="en">
        
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="styledas.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
            <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
            <script src="styleboot/js/bootstrap.min.js"></script>
    <style>
        a:hover{
            background: #00C1FE;
        }
    </style>
</head>
<body>
    <!-- ******************************* col 1******************************** -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
               <?php include('sidebar.php'); ?> 
            <div class="col ">
                  <!-- ******************************* main de page******************************** -->
                    <div class="row  my-3">
                         <?php include 'navbar.php' ?>
                        <div class="row  p-5 " style="position: relative;">
                            <div class="col-lg-3 col-md-6 pb-3" >
                                <div class="col p-4"  style="background:#F0F9FF; position: relative; border-radius: 20px;; ">
                                    <i class="bi bi-mortarboard fs-1"  style="color: #74C1ED ;position:relative;background:#F0F9FF ;"></i>
                                <a href="indexstudent.php"><p class="fw-normal fs-4 " style="color:#6C6C6C;">Students</p></a> 
                                    <p class="d-flex justify-content-lg-end fw-bolder fs-2">  <?php echo $stud; ?> </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 pb-3" >
                                <div class="col p-4"  style="background:#FEF6FB; position: relative; border-radius: 20px;">
                                    <i class="bi bi-bookmark fs-1"  style="color:#EE95C5 ;position:relative;background:#FEF6FB  30px; " ></i>
                                <a href="#"> <p class="fw-normal fs-4 " style="color:#6C6C6C;">Course</p></a>
                                    <p class="d-flex justify-content-lg-end fw-bolder fs-2"> <?php echo $cour; ?> </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 pb-3 "  >
                                <div class="col p-4"  style="background:#FEFBEC; position: relative; border-radius: 20px;">
                                    <i class="bi bi-currency-dollar fs-1"  style="color: #00C1FE ;position:relative;background:#FEFBEC ; border:solid #00C1FE;"></i>
                                <a href="indexpay.php"><p class="fw-normal fs-4 " style="color:#6C6C6C;">Payments</p></a>
                                    <p class="d-flex justify-content-lg-end fw-bolder fs-2 px-4 "> <span class="fs-4 "><?php echo $som.'dhs'; ?> </span></p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 pb-3" >
                                <div class="col p-4"  style="background:linear-gradient(to right,#00C1FE,#FAFFC1); position: relative; border-radius: 20px;">
                                    <i class="bi bi-person fs-1"  style="color:white;background:#3dc9f3;position:relative;"></i>
                                    <a href="#"><p class="fw-normal fs-4 " style="color:#6C6C6C;">User</p>
                                    </a>
                                    <p class="d-flex justify-content-lg-end fw-bolder fs-2">  <?php echo $user; ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>  
            </div>
        </div>
      </div>
  
    </div>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
