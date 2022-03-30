
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
                <h1>Categories</h1>
                <p>Dashboard / users</p>
              </div>
<div class="row">
          <div class="col-lg-12">
            <?php include ('message.php'); ?>
            <div class="users-table table-wrapper">
              <a href="add_categories.php" class=" btn btn-primary float-end">Add Category</a>
                 <table class="posts-table">
          			<thead>
          				<tr>
          					<th> ID</th>
          					<th> Name</th>
          					<th> Status</th>
          					<th> Edit</th>
          					<th> Delete</th>
          				</tr>
          			</thead>
          		<tbody>

          			<?php 
          			$category = "SELECT * FROM categories WHERE status !='2'";
          			$category_run = mysqli_query($con, $category);

          			if(mysqli_num_rows($category_run) > 0)
          			{
          				foreach ($category_run as $item)
          			 {
          			 	?>
          			 	<tr>
          			 		<td><?=$item['id']; ?></td>
                    <td><?=$item['name']; ?></td>
                    <td>
                      <?php
                          if($item['status'] == '1') {echo 'Hidden';} else { echo 'visible';}
                          ?>
                    </td>
          			 		<td><a href="category_edit.php?id=<?=$item['id'];?>" class="btn btn-success"> Edit </a> </td>
          			 		<td>
          			 		<form action="update_user.php" method="POST">
          			 		<button type="submit"  name="category_delete" value="<?=$item['id']; ?>" class="btn btn-danger"> Delete </button>
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
          				<td colspan="5">No Record Found</td>
          			</tr>
          			<?php
          		}

          			 ?>
     
          		</tbody>
         	 </table>

          		
          	</div>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
</main>
         


 