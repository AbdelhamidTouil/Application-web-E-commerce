<?php
 $query = "SELECT * from categories";
 $result = query($query);
 ?>
<!--------------------------->

<link rel="stylesheet" href="includes/styles.css">



<header class="header">
        <nav class="navbar">
        <div >
			<a href="" class="logo"  id="logo" style='font-size: 40px;'>
			 <span class="touil">Touil</span> <span class="shop">Shop</span> </a>
		</div>

            <ul class="nav-menu">



            <li class="nav-item">
            <form action="search.php" method="post" class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Search prodacts" aria-label="Search">
        <button class="btn_search " type="submit"> Search </button>
      </form>
      </li>
          

                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link">Proucts</a>
                </li>
                <li class="nav-item dropdown bg-white">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" >
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <?php while ($categorie = fetch_array($result)) {?>
              
            <li><a class="dropdown-item" href="category.php?id=<?php echo $categorie['cat_id']; ?>"><?php  echo $categorie['cat_title']?></a></li>
            <?php } ?>
          </ul>
           </li>
                
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>

                <?php   if(isset($_SESSION['logged']) && $_SESSION['logged']==true &&  $_SESSION['nom'] == 'abdelhamid' &&  $_SESSION['password'] == 'abdou123') {?>
        <li class="nav-item">
        <a class="nav-link" href="dashbord.php">Dashbord</a>
        </li>
        <?php } ?>
       

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

            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <script src="includes/main.js"></script>
   <!-- start navbar -->
 
 








     

