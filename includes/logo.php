

<div class="section_logo">
	<div class ="row">
		<div class="col-md-4" >
			<a href="" class="btn btn-link"  id="logo" style='font-size: 40px;'>
			 <span class="touil">Touil</span> <span class="shop">Shop</span> </a>
		</div>

		<div class="col-md-8">

<?php if(@$_SESSION['count'] > 0) {?>
<div class="float-end">
				<div class="dropdown">
					<a class="btn btn-link dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-cart-arrow-down" aria-hidden="true" style="color:red;"></i>Cart
  </a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

							<li>
							<a class="dropdown-item " href="cart.php" >  <?php  echo !empty($_SESSION['count'])? $_SESSION['count'].": " :""?>products  </a>
						</li>

					</ul>
				</div>
			</div>
			<?php }else{?>


				<div class="float-end">
				<div class="dropdown">
					<a class="btn btn-link dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Cart
  </a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

							<li>
							<a class="dropdown-item " href="cart.php" >  <?php  echo !empty($_SESSION['count'])? $_SESSION['count'].": " :""?>products  </a>
						</li>

					</ul>
				</div>
			</div>


				<?php }?>

			<div class="float-end">
				<div class="dropdown">
					<a class="btn btn-link dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-user-plus" aria-hidden="true"></i>Connexion
  </a>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">



					<?php   if(isset($_SESSION['logged']) && $_SESSION['logged']==true) {?>
						<li>
							<a class="dropdown-item" href="profile.php"> <i class="fa fa-user-circle" aria-hidden="true"></i>
							<?php  echo $_SESSION['nom'];?></a>
						</li>
						<li>
							<a class="dropdown-item" href="logout.php"> <i class="fa fa-power-off"></i>Disconnected</a>
						</li>
						<?php }else{?>

						
							<li>
							<a class="dropdown-item" href="register.php"> <i class="fa fa-user-circle" aria-hidden="true"></i>
							register</a>
						</li>
						<li>
							<a class="dropdown-item" href="login.php"><i class="fas fa-user-circle" aria-hidden="true"></i>login</a>
						</li>

						
						<?php } ?>



					</ul>
				</div>
			</div>

		</div>
	</div>
</div>