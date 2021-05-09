<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<?php include ('navigation.php')  ?>



  <?php   $search = $_POST['search']; 
  $sql = "SELECT * FROM products WHERE product_title  LIKE '%$search%' 
  ||  product_description  LIKE '%$search%' ";
  $result = query($sql);
  
  ?>
  


  



  <div class="row">
<!--cart   product-->
<?php
if($result -> num_rows > 0)
{
while ($row = fetch_array($result))
{
 ?>

<div class="card mt-4" style="width: 14rem;">
<h5 class="card-title">Shop</h5>
  <img src="images/<?php echo $row['product_image'] ?>" class="card-img-top" alt="image not found">
  
    <h3 class="card-text"><?php echo $row['product_title'] ?></h3>
  
 <p><span class="badge badge-success bg-dark"><?php echo $row['product_price'].'dh' ?></span>
 <span class="prix_ancienne"> <strike><?php echo $row['old_price'].'dh' ?></strike> </span></p>
  <p class="description"> <?php echo $row['product_description'] ?></p>
    <a href="product_description.php?id=<?php echo $row['product_id'] ?>" class="card-link">see more</a>
</div><!-- end card-->
<!-- end card 2-->
<?php 
}
}
else{
    echo 'no product find ';
}
 ?>


</div>










</div><!-- end row-->

















<?php include ('includes/footer.php')  ?>
