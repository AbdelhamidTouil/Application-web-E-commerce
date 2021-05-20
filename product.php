
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end  includes -->

<div class="row"><!-- start row-->

<!--cart   product-->
<?php
 $query = "SELECT * from products";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>

<div class="card mt-4 mx-4" style="width: 14rem; height:25rem;">

<h5 class="card-title"><?php echo $row['product_title'] ?></h5>
  <img src="images/<?php echo $row['product_image']; ?>" class="card-img-top" alt="image not found" style="height:50%">
  
    <h3 class="card-text"><?php echo $row['product_title'] ?></h3>
  
 <p><span class="badge badge-success bg-success"><?php echo $row['product_price'].'dh' ?></span>
 <span class="prix_ancienne"> <strike><?php echo $row['old_price'].'dh' ?></strike> </span></p>
  <p class="description"> <?php echo $row['product_description'] ?></p>
    <a href="product_description.php?id=<?php echo $row['product_id'] ?>" class="card-link">see more</a>
</div>
<!-- end card -->

<?php 

}
 ?>
</div>
</div><!-- end row-->
<?php include ('includes/footer.php')  ?>
