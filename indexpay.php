<?php
			include "connexion.php";
            include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment </title>
    <link rel="stylesheet" href="stylepa.css">
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
        .model{
            background: linear-gradient(to right,#0dcaf0,#dee4b0);
            text-align: center;
        }
        .label-class{
            color:black ;
            font-weight: bold;
            
        }
    </style>
      
</head>

<body>
<?php 
   
   //insert data 
   if (isset($_POST['submite'])) {
       $nom=$_POST['nome']; 
       $Payment=$_POST['payment'];
       $Bill=$_POST['bill'];
       $Amount=$_POST['amount'];
       $Balance=$_POST['balance'];
       $Date=$_POST['date'];
       $query="INSERT INTO `payment_details`( `name`, `payment _schedule`, `bill_number`, `amount_paid`, `balance_amount`, `date`) VALUES ('$nom',' $Payment','$Bill','$Amount',' $Balance','$Date')";
       if (mysqli_query($conn,$query)) {//    echo" <script> alert('ajouter is success')</script>";
    }  else {"error";}
   }
?>
        <!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content model">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
      <!-- <h2  style="text-align: center;">Payment Details</h2> -->
        <form action="#" method="POST">
            <label  class="label-class ">
                Nom:
                <input type="text" name="nome" >
            </label>
            <br><br>
            <label    class="label-class">
                Payment Schedule :
                <input type="text" name="payment"  >
            </label>
            <br><br>
            <label class="label-class">
            Bill Number :
                <input type="text" name="bill" >
            </label><br><br>

            <label class="label-class">
                Amount Paid:
                <input type="text" name="amount" >
            </label>
                <?php //echo $enroll; ?>
                <br><br>
            <label class="label-class">
            Balance amount:
                <input type="text" name="balance" >
            </label>
            <br><br>
            <label class="label-class">
                Date :
                <input type="date" name="date" >
            </label>
            <br><br>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submite" class="btn btn-primary">Ajouter </button>
        </div>
        </form> 
      </div>
     
    </div>
  </div>
</div>
    <div class="container-fluid">
        <div class="row flex-nowrap"><!-- col1-->
            <?php include('sidebar.php');?>
            <div class="col "><!-- col2-->
                <?php include 'navbar.php' ?>
                <div class="d-flex justify-content-between mt-3   ">
                    <div >
                        <button type="button" class="btn btn-primary fs-3 fw-bold me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">payment details</button>
                    </div>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <i class="bi bi-chevron-expand fs-4 fw-bold" style="color:#00C1FE;"></i>
                        
                    </div>
                </div>
                <!-- table-->
                <div class="table-responsive-md">
                       <table  width="100%" style="height: 352px; text-align:center" class="table table-hover bg-light  fw-bold" >
                            <tr class="bg-light">
                                <td>id</td>
                                <td>Name</td>
                                <td>Payment Schedule</td>
                                <td>Bill Number</td>
                                <td>Amount Paid</td>
                                <td>Balance amount</td>
                                <td>Date</td>
                            </tr>
                            <tbody style="height: 352px; text-align:center">
                                <?php
                                            $query=" SELECT * FROM `payment_details` ";
                                            $paym=mysqli_query($conn,$query);
                                            while ($payment=mysqli_fetch_array($paym)) {//payment=arrary and['id .. in table student]
                                                    echo'
                                                    <tr style=" border-bottom-width: 11px;" >
                                                        <td>'. $payment['id'].'</td>
                                                        <td>'. $payment['name'].'</td>
                                                        <td>'. $payment['payment _schedule'].'</td>
                                                        <td>'. $payment['bill_number'].'</td>
                                                        <td>'. $payment['amount_paid'].'</td>
                                                        <td>'. $payment['balance_amount'].'</td>
                                                        <td>'. $payment['date'].'</td>
                                                        <td class="text-primary align-middle">
                                                        <i class="far fa-eye text-info"></i>
                                                        </td>
                                                </tr>';	
                                            }
                                            mysqli_close($conn);

                                ?>	
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
