
<!DOCTYPE html>
<html>

<?php
include('authentication.php');
include('includes/header.php');
?>

<?php
include('includes/scripts.php');
?>

   <main class="main users chart-page" id="skip-target">
      <div class="container">
        <div class="row stat-cards">
           <div class="top-cat-title">
                <h1>Users</h1>
                <p>Dashboard / users</p>
                <h2>Edit user</h2>

                <?php
                if(isset($_GET['id']))
                {
                	$user_id = $_GET['id'];
                	$users = "SELECT * FROM users WHERE id = '$user_id'";
                	$users_run = mysqli_query($con, $users);

                	if(mysqli_num_rows ($users_run) > 0)
                	{
                		foreach($users_run as $user)
                		{
                	
                ?>
               

                <form action="update_user.php" method="POST">
                	<input type="hidden" name="user_id" value="<?=$user['id']?>">

                	<div class="card card-body" >
               			 <div class="col-lg-6">
               			 	<label for="">First Name</label>
               			 	<input type="text" name="fname" value="<?=$user['fname'];?>" class="form-control">	
               			 </div>
               			 <div class="col-lg-6">
               			 	<label for="">Last Name</label>
               			 	<input type="text" name="lname" value="<?=$user['lname'];?>" class= "form-control">	
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	<label for="">Email</label>
               			 	<input type="text" name="email" value="<?=$user['email'];?>" class="form-control">	
               			 </div>
               			<div class="col-md-6 mb-3">
               			 	<label for="">Password</label>
               			 	<input type=password name="password"  value="<?=$user['fname'];?>" class="form-control">	
               			 </div>
               			  <div class="col-md-6 mb-3">
               			 	<label for="">Status</label>
               			 	<select name="role_as" required class ="form-control">
               			 	<option value="">--Select Role--</option>
               			 	<option value="1" <?=$user['role_as'] == '1' ? 'selected': '' ?> >Admin</option>
               			 	<option value="0" <?=$user['role_as'] == '0' ? 'selected': '' ?> >User</option>
               			 	</select>
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	  <label class="users-table__checkbox ms-20">
                        		<input type="checkbox" name="status" <?=$user['status'] == '1' ? 'checked': '' ?>>Status
                      		</label>
               			 </div>
               			 <div class="col-md-6 mb-3">
               			 	<button type="submit" name="update_user" class="btn btn-primary"> Update User</button>
               			 </div>
                	</div>
                </form>
                		<?php
                	}
                }
                else
                {
                	?>
                	<h4> No Records Found</h4>
                	<?php
                }
	        }
	        ?>
              </div>
          </div>
      </div>
  </main>
  </html>


