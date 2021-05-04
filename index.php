<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>


    
<div class="row">
<!--card1 -->
<div class="card mt-4  mx-2" style="width: 18rem;">
  <div class="card-header">
  Cities
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Oujda <span class="city  p-2 float-end">1</span></li>
    <li class="list-group-item">Tanger <span class="city  p-2 float-end">2</span></li>
    <li class="list-group-item">Rabat <span class="city  p-2 float-end">3</span></li>
  </ul>
</div>
<!--end card1-->
<!--cart 2 -->
<?php
 $query = "SELECT * from products";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>

<div class="card mt-4" style="width: 18rem;">
<h5 class="card-title">Shop</h5>
  <img src="images/<?php echo $row['product_image'] ?>" class="card-img-top" alt="image not found">
  
    <h3 class="card-text"><?php echo $row['product_title'] ?></h3>
  
 <p><span class="badge badge-success bg-dark"><?php echo $row['product_price'].'dh' ?></span>
 <span class="prix_ancienne"> <strike><?php echo $row['old_price'].'dh' ?></strike> </span></p>
  <p class="description"> <?php echo $row['product_description'] ?></p>
    <a href="product_description.php?id=<?php echo $row['product_id'] ?>" class="card-link">see more</a>
</div>
<!-- end card 2-->
<?php 
}
 ?>


</div>










</div>
<?php include ('includes/footer.php')  ?>
