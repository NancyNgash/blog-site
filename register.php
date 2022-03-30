<?php

if (isset($_SESSION['auth'])) 
{
	$_SESSION['message'] = 'You are already logged in';
	header("Location: index.php");
	exit(0);
}

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class=" col-md-5">

				<?php include('message.php'); ?>


				<div class="card">
					<div class="card-header">
						<h3> Register </h3>
					</div>
					<div class="card-body">
						<form action="registercode.php" method="POST">
						<div class="form-group mb-3">
							<label>First Name</label>
							<input required type="text" name="fname" placeholder= "Enter First Name" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Last Name</label>
							<input required type="text" name="lname" placeholder= "Enter last Name" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Email ID</label>
							<input required type="Email" name="email" placeholder= "Enter email adress" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Password</label>
							<input required type="Password" name="password" placeholder= "Enter Password" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Confirm Password</label>
							<input required type="Password" name="cpassword" placeholder= "Confirm Password" class="form-control">
						</div>
						<div class="form-group mb-3">
							<button type= "Submit" name="register_btn" class="btn btn-primary">Register</button>
						</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


 <?php
include('includes/footer.php');
?>