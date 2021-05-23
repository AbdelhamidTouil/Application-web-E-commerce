
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')?>
<!-- end  includes -->
<!--start container-->
<div class="container-fluid">
	<!--start row-->
	<div class="row">
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">

					<li class="nav-item">
						<a class="nav-link active" href="#">
							<span data-feather="home"></span>
                                Dashboard 
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" href="index.php">
							<span data-feather="home"></span>
                                Home
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link active" href="index.php">
							<span data-feather="product.php"></span>
                                Product
						</a>
					</li>

					
					<li class="nav-item">
						<a class="nav-link" href="insert_post.php">
							<span data-feather="users"></span>
							<a href="add_post.php" >Add products</a>
						</a>
					</li>

					
					<li class="nav-item">
						<a class="nav-link" href="insert_post.php">
							<span data-feather="users"></span>
							<a href="message.php" ><i class="fa fa-comment" aria-hidden="true"></i></a>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
				<h1 class="h2">Dashboard
            </h1>
			</div>
			
			<?php 
$query= "SELECT * FROM products ";
$result=query($query);
while($row=fetch_array($result))
{
$id=$row['product_id'];
$title=$row["product_title"];
$image=$row["product_image"];

$product_price=$row["product_price"];
?>
			<form action="dashbord.php" method="post">
				<div class="table-responsive">
					<table class="table table-striped table-sm">
						<thead>
							<tr>
								<th>id
                    </th>
								<th>title
                    </th>
								<th>image
                    </th>
								<th>price
                    </th>
								<th>delete
                    </th>
								<th>edit
                    </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<?php echo "$id"; ?>
								</td>
								<td>
									<?php echo "$title"; ?>
								</td>
								<td>
									<?php echo "$image"; ?>
								</td>
								<td>
									<?php echo "$product_price"; ?>
								</td>
								<!-- start button delete-->
								<td>
									<a  class="btn btn-primary" href="delete.php?id=
										<?php echo "$id";?>">delete
									</a>
								</td>
								<!--end button  delete-->
								
								<!-- start button update-->
								<td>
									<a  class="btn btn-primary" href="edit.php?id=
										<?php echo "$id";?>">update
									</a>
								</td>
									<!-- end button update-->
							</tr>
						</tbody>
					</table>
					<!--end table-->
				</div>
			</form>
			<!--end form-->
			<?php } ?>
		</main>
		<!--end main-->
	</div>
	<!--end  row-->
</div>
<!--start container-->
<?php include ('includes/footer.php')  ?>

