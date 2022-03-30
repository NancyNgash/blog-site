<?php

if (isset($_SESSION['auth'])) 
{
	if(!isset($_SESSION['message'])){
		$_SESSION['message'] = 'You are already logged in';
	}
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
						<h3> Login </h3>
						</div>
						<form method="POST" action="logincode.php">
						<div class="card-body">
						<div class="form-group mb-3">
							<label>Email ID</label>
							<input type="Email" name="email" placeholder= "Enter email adress" class="form-control">
						</div>
						<div class="form-group mb-3">
							<label>Password</label>
							<input type="password" name="password" placeholder= "Enter Password" class="form-control">
						</div>
						<div class="form-group mb-3">
							<button type= "submit" name="login_btn" class="btn btn-primary">Login</button>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>


 <?php
include('includes/footer.php');
?>