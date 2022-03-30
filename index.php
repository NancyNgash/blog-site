<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5 bg-dark">
	<div class="container">
		<div class="row">
			<div class=" col-md-12">
				
				<h1 class="text-white">Categories</h1>
				<div class="underline"></div>
			</div>
			<?php
          $homecategory= "SELECT * FROM categories WHERE navbar_status ='0' AND status = '0' ";
          $homecategory_run= mysqli_query($con, $homecategory);

          if (mysqli_num_rows($homecategory_run) > 0) 
          {
            foreach($homecategory_run as $homeItems) 
            {
              ?>
          <div class="col-md-3 md-4">
            <a class="text-decoration-none" href="category.php?title=<?= $homeItems['slug']; ?>">
            <div class="card card-body">
            	<?= $homeItems['name']; ?>
            </div>
         </a>
         	
         </div> 
          <?php
          }
        }
     ?>


		</div>
	</div>
</div>
<div class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class=" col-md-9">
				
				<h1 class="text-dark">Triple N blogsite</h1>
				<div class="underline"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin convallis faucibus ligula, et dapibus tellus vehicula sit amet. Nam vestibulum iaculis mauris vitae congue. Fusce dignissim laoreet volutpat. Aliquam id nunc ultricies, maximus arcu sed, ullamcorper massa. In risus neque, dapibus vitae lorem quis, eleifend accumsan lacus. Curabitur sed ex ut lorem convallis pellentesque. Mauris sed ante consequat, hendrerit est ut, ultrices sapien. Integer eget arcu semper, congue orci sed, auctor mi. Donec quis erat venenatis, aliquam sapien sit amet, pharetra purus. Proin rhoncus mi a auctor consectetur. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed tristique suscipit eros, vel volutpat ante bibendum id. Donec varius elit et tellus mollis, non euismod augue blandit. Sed imperdiet turpis at mauris interdum, eu vehicula odio pellentesque. Donec eu ex ut urna egestas mattis nec eget nulla. Nullam semper dui ac erat condimentum, at semper sem bibendum. </p>
			</div>
</div>
	</div>
</div>

<div class="py-5 bg-white">
	<div class="container">
		<div class="row">
			<div class=" col-md-9">
				<h3 class="text-dark">Latest Posts</h3>
				<div class="underline"></div>
			
			<?php
          $homeposts= "SELECT * FROM post WHERE status = '0' ORDER BY id DESC LIMIT 8 ";
          $homeposts_run= mysqli_query($con, $homeposts);

          if (mysqli_num_rows($homeposts_run) > 0) 
          {
            foreach($homeposts_run as $homePostItems) 
            {
              ?>
          <div class="md-4">
            <a class="text-decoration-none" href="post.php?title=<?= $homePostItems['slug']; ?>">
            <div class="card card-body bg-light">
            	<?= $homePostItems['name']; ?>
            </div>
         </a>
         	</div> 
       
          <?php
          }
        }
     ?>
     </div>
     <div class=" col-md-3">
     	<div class="card">
     		<div class="card-header"></div>
     		<h4>Contact us</h4>
     		<div class="card-body">
     			<p>triplen@gmail.com</p> <br>
     			<p>+25403256895</p>
     		</div>
     	</div>
     </div>
</div>
</div>
</div>

 <?php
include('includes/footer.php');
?>
