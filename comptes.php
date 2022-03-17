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
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="styleboot/js/bootstrap.min.js"></script>
    <title>comptes</title>
</head>
<body>
   
    <table  width="100%" style="text-align:center border=1;"  class="table table-hover">
			<thead>
				<tr class="bg-light mt-5" style="color: #ACACAC;  height: 30px;">
					<th scope="col"  class="align-middle">id</th>
					<th scope="col"  class="align-middle">First Name</th>
					<th scope="col"  class="align-middle">last Name</th>
					<th scope="col" class="align-middle">Email</th>
					<th scope="col" class="align-middle">Password </th>
					
				</tr>
			</thead>

			<tbody style="text-align:center">
					<?php
						 $query="SELECT * FROM `comptes` ";
						 $data=mysqli_query($conn,$query);
						 while ($compte=mysqli_fetch_array($data)) {//compte=arrary and['id .. in table student]
								echo'
								<tr style=" border-bottom-width: 11px;" >
									<td>'. $compte['id'].'</td>
									<td>'. $compte['first_name'].'</td>
									<td>'. $compte['last_name'].'</td>
									<td>'. $compte['email'].'</td>
									<td>'. $compte['password'].'</td>
							    </tr>';	
						 }
						 mysqli_close($conn);

					?>	
			</tbody>
		</table>
    
</body>
</html>