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
    <title>course </title>
    <link rel="stylesheet" href="stylepa.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="inscription.css"> -->
    <script src="styleboot/js/bootstrap.min.js"></script>
    <style>
        .btn:hover{
            background-color: #00C1FE;
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
            $nomlag=$_POST['nom'];
            $Duree=$_POST['duree'];
            $Discription=$_POST['discription'];
            $Prix=$_POST['prix'];
            $query= "INSERT INTO courses ( nom, duree, discription, prix) VALUES ('$nomlag','$Duree','$Discription','$Prix')";
            if(mysqli_query($conn,$query))            
            {
                // echo "   insert student is success";
                header('location:indexcour.php');
            }else {
                "error";
            }
            
        }

   
    ?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content model">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        
            <form class="conainer" action="" method="POST" >
                <label  class="label-class">
                Nom de langage:
                    <input type="text" name="nom" >
                </label>
                
                <br><br>
                <label    class="label-class">
                    Duree de coure :
                    <input type="text" name="duree"  >
                </label>
                <br><br>
                <label class="label-class">
                    Discription :
                    <input type="text" name="discription" >
                </label><br><br>

                <label class="label-class">
                    Prix:
                    <input type="text" name="prix" >
                </label>	
                <br><br>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submite" value="Ajouter" >Ajouter</button>
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
                <div class="d-flex justify-content-between mt-3 ">
                    <div >
                        <p class="fs-3 fw-bold me-3 ">Course</p> 
                    </div>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add course</button>
                        <i class="bi bi-chevron-expand fs-4 fw-bold" style="color:#00C1FE;"></i> 
                    </div>
                </div>
                <!-- table-->
                <div class="table-responsive-md">
                       <table  width="100%" style=" text-align:center ;font-size:1.7vw;" class="table table-hover bg-light  fw-bold" >
                            <tr class="bg-light " >
                                <th >id</th>
                                <th>nom de langage</th>
                                <th>duree de coure</th>
                                <th>discription</th>
                                <th>Prix</th>
                            </tr>
                            <tbody style="height: 352px; text-align:center; ">
                                <?php
                                            $student=" SELECT * FROM `courses` ";
                                            $cour=mysqli_query($conn,$student);
                                            while ($course=mysqli_fetch_array($cour)) {//payment=arrary and['id .. in table cours]
                                                    echo'
                                                    <tr style=" border-bottom-width: 11px;" >
                                                    
                                                        <td>'. $course['id'].'</td>
                                                        <td>'. $course['nom'].'</td>
                                                        <td>'. $course['duree'].'</td>
                                                        <td>'. $course['discription'].'</td>
                                                        <td>'. $course['prix'].'</td>
                                                        <td class="text-primary ">
														<a href="deletcour.php?id='. $course['id'].'"><span style="color:red;"><i class="fas fa-trash supr " ></i></span></a>
													</td>
                                                        
                                                </tr>';	
                                            }
                                ?>	
                            </tbody>
                        </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>
