<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>


    
<div class="row">
<?php

$id=$_GET['id'];
 $query = "SELECT * from products where product_id ='$id'";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>
<!--cart 2 -->
<div class="card mt-4" style="width: 47rem;">
<h5 class="card-title">Shop</h5>
  <img src="images/<?php echo $row['product_image'] ?>" class="card-img-top w_60" alt="image not found">
  
    <h3 class="card-text"><?php echo $row['product_title'] ?></h3>
  
 <p><span class="badge badge-success bg-dark"><?php echo $row['product_price'] ?></span>
 <span class="prix_ancienne"> <strike><?php echo $row['old_price'] ?></strike> </span></p>
  <p class="description"> <?php echo $row['product_description'] ?></p>
    <a href="#" class="card-link">see more</a>
</div>
<!-- end card 2-->
<div class="col-md-4 mt-3 ">
<form action="cart.php" method="post">

    <div class="form-group">
      <label for="qte">Qte *</label>
      <input type="number" class="form-control" id="qte"style="width:8ch" >
    </div>
  
   
    <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
   add to cart
  </button>
  
  </form>
</div>

<?php } ?>

</div>










</div>
<?php include ('includes/footer.php')  ?>
