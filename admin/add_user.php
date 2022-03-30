<!DOCTYPE html>
<html>

<?php
include('authentication.php');
include('includes/header.php');
?>

<?php
include('includes/scripts.php');
?>

   <div class="container-fluid px-4">
        <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php');?>
            <div class="card">
              <div class="card-header">
                <h4>
                  Add User
                <a href="view_register.php" class="btn btn-danger float-end"> BACK</a>
                </h4>
              </div>
              <div class="card-body" >
                   <form action="update_user.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6 mb-3">
               			 	<label for="">First Name</label>
               			 	<input type="text" name="fname" class="form-control">	
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	<label for="">Last Name</label>
               			 	<input type="text" name="lname"  class= "form-control">	
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	<label for="">Email</label>
               			 	<input type="text" name="email" class="form-control">	
               			 </div>
               			<div class="col-md-6 mb-3">
               			 	<label for="">Password</label>
               			 	<input type=password name="password" class="form-control">	
               			 </div>
               			  <div class="col-md-6 mb-3">
               			 	<label for="">Status</label>
               			 	<select name="role_as" required class ="form-control">
               			 	<option value="">--Select Role--</option>
               			 	<option value="1" >Admin</option>
               			 	<option value="0" >User</option>
               			 	</select>
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	  <label class="users-table__checkbox ms-20">
                        		<input type="checkbox" name="status">Status
                      		</label>
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	<button type="submit" name="add_user" class="btn btn-primary"> Add User</button>
               			 </div>
                	</div>
                </form>