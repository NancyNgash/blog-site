
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
                <h2>Registered users</h2>
              </div>

		<div class="row">
          <div class="col-lg-12">
          	<?php include ('message.php'); ?>
          	<div class="users-table table-wrapper">
          		<a href="add_user.php" class=" btn btn-primary float-end">Add User</a>
              <table class="posts-table">
              	 <table class="posts-table">
          			<thead>
          				<tr>
          					<th> ID</th>
          					<th> First Name</th>
          					<th> Last Name</th>
          					<th> Email</th>
          					<th> Role</th>
          					<th> Edit</th>
          					<th> Delete</th>
          				</tr>
          			</thead>
          		<tbody>

          			<?php 
          			$query = "SELECT * FROM users";
          			$query_run = mysqli_query($con, $query);

          			if(mysqli_num_rows($query_run) > 0)
          			{
          				foreach ($query_run as $row)
          			 {
          			 	?>
          			 	<tr>
          			 		<td><?=$row['id']; ?></td>
          			 		<td><?=$row['fname']; ?></td>
          			 		<td><?=$row['lname']; ?></td>
          			 		<td><?=$row['email']; ?></td>
          			 		<td>
          			 			<?php
          			 			if ($row['role_as'] == '1') {
          			 				echo "Admin";
          			 			} elseif ($row['role_as'] == '0') {
	          			 				echo "User";
	          			 		}

          			 			?>

          			 		</td>
          			 		<td><a href="edit.php?id=<?=$row['id'];?>" class="btn btn-success"> Edit </a> </td>
          			 		<td>
          			 		<form action="update_user.php" method="POST">
          			 		<button type="delete"  name="user_delete" value="<?=$row['id']; ?>" class="btn btn-danger"> Delete </button>
          			 		</form>
          			 		</td>
          			 	</tr>
          			 	<?php
         
          				}
          			}
          			else 
          			{
          			?>
          			<tr>
          				<td colspan="6">No Record Found</td>
          			</tr>
          			<?php
          		}

          			 ?>
     
          		</tbody>
         	 </table>
          		
          	</div>
         


 