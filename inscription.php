
<!DOCTYPE html>
<html lang="en">
<?php
         //connextion db 
        include "connexion.php";
?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
        <script src="styleboot/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <title>inscription</title>
        <script src="inscription.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <style>
            h1{
                font-weight: bold;
                color: orangered;  
            }
            button{
                color: white;
            }
        </style>
    </head>
<body >
   <div id="forme1" class="  container  mt-5 align-item:center " style="font-weight : bold;text-align :center importent;">
        <form   class="  bg-white p-5 "  method="POST" name="forminscription" style="text-align:center;"  id="form1" onsubmit="return testfirst()" >
                <h1 >Inscription</h1>
                    <label  class="label-class">
                        First Name: 
                        <input type="text" class="form-control form-control-lg" name="firstname"   >
                        <span  id="firstname" style="color: red; font-weight: bold;"></span>
                    </label>
                    <br><br>
                    <label  class="label-class">
                        last Name: 
                        <input type="text" class="form-control form-control-lg" name="lastname"  id="lastname" >
                        <span  id="lastnameid" style="color: red; font-weight: bold;"></span>
                    </label>
                    <br><br>
                    <label    class="label-class">
                        Email :
                        <input type="email" class="form-control form-control-lg" name="email" id="email"  >
                        <span  id="emailid" style="color: red; font-weight: bold;"></span>
                    </label>
                    <br><br>
                    <label class="label-class">
                        Password :
                        <input type="password" class="form-control form-control-lg" name="password"   id="password">
                        <span  id="passwordid" style="color: red; font-weight: bold;"></span>
                    </label> <br><br>
                    <label class="label-class">
                         confirm Password :
                        <input type="password" class="form-control form-control-lg" name="confpassword"   id="confpassword"  >
                        <span  id="confpasswordid" style="color: red; font-weight: bold;"></span>
                    </label> <br><br>
                    <span  style="font-weight: bold">J'accpete</span> 
                    <input class="form-check-input"  class="form-control form-control-lg"type="checkbox"  name="checkaccp" id="checkaccp" onclick="siclickscheck()">
                    <br><br>
                    <button type="submit" class="btn btn-info"  name="submite" value="S'inscrire" >S'inscrire</button>
            </form> 
    </div>
    <?php 
        if (isset($_POST['submite'])) {
            $FIRSTNAME=$_POST['firstname'];
            $LASTNAME=$_POST['lastname'];
            $EMAIL=$_POST['email'];
            $PASSWORD=md5($_POST['password']);//hach
            $conpass= $_POST['confpassword'];
            // verification si email et deja existe sur base donner;
                $queryem="SELECT`email` FROM `comptes` WHERE  email='$EMAIL'"; 
                $result=mysqli_query($conn,$queryem);   
                    if (mysqli_num_rows($result)==0) {
                         $query="INSERT INTO `comptes`(`first_name`, `last_name`, `email`, `password`) VALUES ('$FIRSTNAME','$LASTNAME','$EMAIL','$PASSWORD')";
                            if (mysqli_query($conn,$query)) {
                                header("Refresh:3;url=index.php");
                                echo"<script>
                                    Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Le compte et bien Ajouter ',
                                    showConfirmButton: false,
                                    timer: 1500})
                                    </script>";
                                }
                    }else{
                        echo"<script>
                        Swal.fire({
                        icon: 'error',
                        title: 'Votre Email et Déja Existe !!!',
                        })
                      </script>";
                    }
        }
    
    ?>

</body>
</html>
