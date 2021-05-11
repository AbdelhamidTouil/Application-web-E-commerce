<?php
 $query = "SELECT * from categories";
 $result = query($query);
 ?>
   <!-- start navbar -->
 
   <nav class="navbar navbar-expand-lg navbar-light bg-white  ">
  <div class="container-fluid">
  
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="product.php">Products</a>
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
        <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="add_post.php">Add Post</a>
        </li>
      </ul>

      <form action="search.php" method="post" class="d-flex">
        <input class="form-control me-2" type="search" name="search" placeholder="Search prodacts" aria-label="Search">
        <button class="btn_search " type="submit"> SEARCH </button>
      </form>

    </div>
</nav>
       