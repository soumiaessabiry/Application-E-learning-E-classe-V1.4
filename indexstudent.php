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
            <title>student</title>
            <link rel="stylesheet" href="stylestudent.css">
            <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
            <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
            <!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
            <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
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
					$Email=$_POST['email'];
					$Phone=$_POST['phone'];
					$Enroll=$_POST['enroll'];
					$Date=$_POST['date'];
					$query="INSERT INTO `students`(`name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ('$nom','  $Email','  $Phone','$Enroll','$Date')";
					if (mysqli_query($conn,$query)){
						echo "   insert student is success";
						header('location:./indexstudent.php');
					}else
					{
						 "error";
					}
				}
			?>
			<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content model">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					   <h2  style="text-align: center;">Add new student</h2>
						<form action="#" method="POST">
							<label  class="label-class">
								Nom:
								<input type="text"  name="nome" >
							</label>
							<?php //echo $nom; ?>
							<br><br>
							<label    class="label-class">
								Email :
								<input type="email" name="email"  >
							</label>
							<br><br>
							<label class="label-class">
								Phone :
								<input type="text" name="phone" >
							</label><br><br>

							<label class="label-class">
								Enroll number:
								<input type="text" name="enroll" >
							</label>
								<?php //echo $enroll; ?>
								<br><br>
							<label class="label-class">
								Date of admossion:
								<input type="date" name="date" >
							</label>
							<br><br>
							<div class="modal-footer">
						      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						      <button   type="submit" name="submite" class="btn btn-primary">Add student</button>
					        </div>
						</form> 
					</div>
					
					</div>
				</div>
				</div>
			<!--fin modal  -->
            <div class="container-fluid ">
				<?php include('sidebar.php'); ?>
					<!-- ******************************** search******************************************* -->
					<div class=" col"  >
						<?php include 'navbar.php' ?>
						<div class="d-flex justify-content-between mt-3   ">
							<div class="">
								<a href="indexstudent.php " class=" phov fs-3 fw-bold me-3">Students List</a>
							</div>
							<div class="d-flex justify-content-between align-items-center gap-3">
								<i class="bi bi-chevron-expand fs-2 fw-bold" style="color:#00C1FE;"></i>
								<div> 
									<form class="d-flex">
										<!-- <a href="insrtestuent.php"><button type="button" class="btn" style="background:#00C1FE ;"></button></a> -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD NEW STUDENT</button>
									</form>	
								</div>
							</div>
						</div>
					   <!-- ******************************** table******************************************** -->
					   <div class="table-responsive-sm">
					   <table  width="100%" style="text-align:center; font-size:1.7vw;"  class="table table-hover">
							<thead>
									       <tr class="bg-light mt-5" style="color: #ACACAC;  height: 70px;">
												<th scope="col"></th>
												<th scope="col"  class="align-middle">id</th>
												<th scope="col"  class="align-middle">Name</th>
												<th scope="col" class="align-middle">Email</th>
												<th scope="col" class="align-middle">Phone</th>
												<th scope="col" class="align-middle">Enroll number</th>
												<th scope="col" class="align-middle">Date of admission</th>
												<th scope="col" class="align-middle"></th>
											</tr>
							</thead>
							<tbody style=" text-align:center">
									<?php
										 $query="SELECT * FROM `students` ";
										 $data=mysqli_query($conn,$query);
										 while ($student=mysqli_fetch_array($data)) {//students=arrary and['id .. in table student]
												echo'
												<tr style=" border-bottom-width: 11px;" >
												
													<td scope="row">
														<img src="photo2.jpg" alt="Pro-img" width="65" height="55">
													</td>
													<td>'. $student['id'].'</td>
													<td>'. $student['name'].'</td>
													<td>'. $student['email'].'</td>
													<td>'. $student['phone'].'</td>
													<td>'. $student['enroll_number'].'</td>
													<td>'. $student['date_of_admission'].'</td>
													<td class="text-primary ">
														<a href="modifier.php?id='. $student['id'].'"><span style="color:green;"><i class="fas fa-pen pe-3 edite"></i></span></a>
														<a href="deletstuent.php?id='. $student['id'].'"><span style="color:red;"><i class="fas fa-trash supr " ></i></span></a>
														
														
													</td>
											    </tr>';	
										 }
										 mysqli_close($conn);
									?>	
							</tbody>
					    </table>
					</div> 
      	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
   </body>
 </html>

 