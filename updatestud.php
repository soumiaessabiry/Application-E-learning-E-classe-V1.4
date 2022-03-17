<?php 
include ('connexion.php');
//update data cours
$upd=$_GET['id'];
$query=" UPDATE `students` SET `name`=' $nom',`email`='$Email',`phone`='$Phone',`enroll_number`='$Enroll',`date_of_admission`=' $Date' WHERE id='$upd'";
mysqli_query($conn,$query);
header('location:./indexstudent.php');
?>