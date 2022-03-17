<?php
	include "connexion.php";
 if(isset($_GET['id'])){
    $upd=$_GET['id'];
    $query="SELECT * FROM students WHERE id='$upd'";
    $data=$conn->query($query);
     if (mysqli_num_rows($data)>0){
      $row=$data->fetch_assoc();
   }
 }


 if (isset($_POST['submite'])) {
    $id=$_GET['id'];
    $nom=$_POST['nome'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Enroll=$_POST['enroll'];
    $Date=$_POST['date'];
    $query="UPDATE students SET name='$nom', email='$Email', phone='$Phone' , enroll_number='$Enroll' , date_of_admission ='$Date' WHERE id='$id'";

    mysqli_query($conn,$query);
    header('location:indexstudent.php');;
    
}
?>

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
    <title>Document</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
  <h2  style="text-align: center;">Updat student</h2>
    <form action="modifier.php?id=<?= $_GET['id'] ?>" method="POST">
			<input type="hidden" value="<?= $row['id']?>" name="nome" >
        <label  class="label-class">
			 Nom:
			<input type="text" value="<?= $row['name']?>" name="nome" >
		</label>
		  <?php //echo $nom; ?>
		<br><br>
		<label    class="label-class">
            Email :
			<input type="email" value="<?= $row['email']?>" name="email"  >
		</label>
        <br><br>
		<label class="label-class">
            Phone :
			<input type="text" name="phone" value="<?= $row['phone']?>"  >
		</label><br><br>

		<label class="label-class">
			Enroll number:
			<input type="text" name="enroll" value="<?= $row['enroll_number']?>"  >
		</label>
		    <?php //echo $enroll; ?>
            <br><br>
		<label class="label-class">
		     Date of admossion:
			<input type="date" name="date"  value="<?= $row['date_of_admission']?>" >
		</label>
		<br><br>
		<input type="submit" name="submite" value="Save">
	</form> 
</body>
</html>