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
                  Add Post
                <a href="view_posts.php" class="btn btn-danger float-end"> BACK</a>
                </h4>
              </div>
              <div class="card-body" >
                   <form action="update_user.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <label for="">Category list</label>
                        <?php 
                        $category ="SELECT * FROM categories WHERE status ='0'";

                        $category_run = mysqli_query($con, $category);

                if(mysqli_num_rows($category_run) > 0)
                {
                  ?>
                        <select name="category_id"  required class="form-control">
                          <option value="">..Select Category..</option>
                          <?php
                        foreach($category_run as $categoryitem)
                        {
                          ?>
                          <option value="<?= $categoryitem['id'] ?>"><?= $categoryitem['name']?></option>
                          <?php
                        }
                        ?>
                        </select>
                        <?php
                         }
                          else
                          {
                  ?>
                  <H5>No Category Available</H5>
                        <?php
                      }
                      ?>
                    </div>
                      <div class="col-md-6 mb-3">
                      <label for="">Name</label>
                      <input type="textarea" name="name" required class="form-control"> 
                     </div>
                     <div class="col-md-6 mb-3">
                      <label for="">Slug(URL)</label>
                      <input type="text" name="slug"  required class= "form-control"> 
                     </div>
                     <div class="col-md-6 mb-3">
                      <label for="">Description</label>
                     <textarea name="description" required class="form-control" rows="4"></textarea>  
                     </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Title</label>
                      <input type="text" name="meta_title" max="100" required class="form-control"> 
                     </div>
                     <div class="col-lg-6">
                      <label for="">Meta Description</label>
                      <textarea name="meta_description" required class="form-control" rows="4"></textarea> 
                     </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Keyword</label>
                      <textarea name="meta_keyword" required class="form-control" rows="4"></textarea>
                     </div>

                      <div class="col-md-6 mb-3">
                       <label for="">Image</label>
                      <input type="file" name="image"  required class= "form-control"> 
                     </div>
                     
                     <div class="col-md-6 mb-3">
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" name="status">Status
                          </label>
                     </div>
                     <div class="col-md-6 mb-3">
                      <button type="submit" name="add_post" class="btn btn-primary"> Save Post</button>
                     </div>
                  </div>
                </div>
              </div>
                </form>
                  
              
                  