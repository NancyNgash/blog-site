
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
           
                <h2>Posts</h2>
              </div>

		<div class="row">
          <div class="col-lg-12">
          	<?php include ('message.php'); ?>
          	<div class="users-table table-wrapper">
          		<a href="add_post.php" class=" btn btn-primary float-end">Add Post</a>
              <table class="posts-table">
          			<thead>
          				<tr>
          					<th> ID</th>
          					<th> Name</th>
                    <th> Category</th>
          					<th> Image </th>
          					<th> Edit</th>
          					<th> Delete</th>
          				</tr>
          			</thead>
          		<tbody>

          			<?php 
          			// $posts = "SELECT * FROM post";
                $posts = "SELECT p.*, c.name AS cname FROM post p, categories c WHERE c.id = p.category_id";
          			$posts_run = mysqli_query($con, $posts);

          			if(mysqli_num_rows($posts_run) > 0)
          			{
          				foreach ($posts_run as $post)
          			 {
          			 	?>
          			 	<tr>
          			 		<td><?=$post['id']; ?></td>
          			 		<td><?=$post['name']; ?></td>
                    <td><?=$post['cname']; ?></td>
                    <td><img src="../uploads/posts/<?= $post['image']?>" width="60px" height ="60px" /></td>
                    <td><?=$post['status'] =='1'? 'Hidden' : 'visible' ?></td>
                    <td>
                      <a href="post-edit.php?id=<?= $post['id'] ?>" class="btn btn-success" > Edit</a>
                    </td>
                    <td>
                       <form action="update_user.php" method="POST">
                    <button type="submit"  name="post_delete" value="<?=$post['id']; ?>" class="btn btn-danger"> Delete </button>
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
         


 