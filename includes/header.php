
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="includes/css/style.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <title>Touil Shop</title>
    <?php
 $query = "SELECT * from categories";
 $result = query($query);
 ?>
   <!-- start navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
  <div class="container-fluid">
  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="product.php">Products</a>
        </li>

        <li class="nav-item dropdown bg-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
         <?php while ($categorie = fetch_array($result)) {?>
              
            <li><a class="dropdown-item" href="#"><?php  echo $categorie['cat_title']?></a></li>
            <?php } ?>
          </ul>
           </li>

        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</nav>

  </head>
  <body>
 