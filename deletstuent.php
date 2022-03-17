<?php 
include ('connexion.php');
//delet data student git
$del=$_GET['id'];
$query=" DELETE FROM `students` WHERE id='$del'";
 mysqli_query($conn,$query);

header('location:./indexstudent.php');





?>