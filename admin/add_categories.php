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
                  Add Category
                <a href="view_categories.php" class="btn btn-danger float-end"> BACK</a>
                </h4>
              </div>
              <div class="card-body" >
                   <form action="update_user.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
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
               			 	  <label class="users-table__checkbox ms-20">
                        		<input type="checkbox" name="navbar_status">Navbar Status
                      		</label>
               			 </div>
                     <div class="col-md-6 mb-3">
                        <label class="users-table__checkbox ms-20">
                            <input type="checkbox" name="status">Status
                          </label>
                     </div>
               			 <div class="col-md-6 mb-3">
               			 	<button type="submit" name="add_category" class="btn btn-primary"> Save Category</button>
               			 </div>
                	</div>
                </div>
              </div>
                </form>