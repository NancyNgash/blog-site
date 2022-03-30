<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
			<?php
				if (isset($_GET['title'])) 
				{
					$slug = mysqli_real_escape_string($con, $_GET['title']);

					$posts = "SELECT * FROM post WHERE slug='$slug' ";
						$posts_run = mysqli_query($con, $posts);

						
						if (mysqli_num_rows($posts_run) > 0) 
						{
								foreach ($posts_run as $postItems) 
								{
									?>
									<a href="post.php?title=<?=$postItems['slug'];?>">
											<div class="card card-body shadow-sm mb-4">
												<h5> <?=$postItems['name'];?></h5>
														<div>
													<label class="text-dark me-2"> Posted on:<?= date('d-M-Y', strtotime($postItems['created_at']));?></label>
												</div>
												<div>
													<?php if ($postItems['image'] !=null):?> 
													<img src="uploads/posts/<?=$postItems['image'];?>" class="w-75" alt= "<?=$postItems['name'];?>"/>
												<?php endif; ?>
												</div>
												<div>
													<?=$postItems['description'];?>
												</div>
						
											</div>
									</a>
									<?php
								}
						}
					
					else
						{
							?>
								<h4>No such post Found</h4>
							<?php
						}
				}
				else
				{
					?>
					<h4>No such URL Found</h4>
					<?php
				}
				?>
			</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-header">
							<h4>Advert Area</h4>
						</div>
						<div class="card-body">
							Advert
						</div>
					</div>
				</div>
		</div>
	</div>
</div>


 <?php
include('includes/footer.php');
?>
