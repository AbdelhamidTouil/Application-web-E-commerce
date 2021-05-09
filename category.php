<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<?php include ('navigation.php')  ?>



  <?php   $id = $_GET['id']; 
  $sql = "SELECT * FROM products WHERE product_category_id = '$id'";
  $result = query($sql);
  $product = fetch_array($result);
  ?>
  


  <?php 
 if($product != null){

 ?>  
<div class="row">

<!--cart 2 -->

<div class="card mt-4 mx-3"  style="width: 18rem;">
<h5 class="card-title">Shop</h5>
  <img src="images/<?php echo $product['product_image']; ?>" class="  card-img-top" alt="image not found">
  
   <h3 class="card-text"><?php echo $product['product_title']; ?></h3>
  
  <p><span class="badge badge-success bg-dark"><?php echo $product['product_price'].'dh'; ?></span>
  <span class="prix_ancienne"> <strike><?php echo $product['old_price'].'dh'; ?></strike> </span></p>
   <p class="description"> <?php echo $product['product_description']; ?></p>
   <a href="product_description.php?id=<?php echo $product['product_id'] ?>" class="card-link">see more</a>
</div>

<!-- end card 2-->
</div>
<?php } 
 else{
     echo '!!!!!!!!!!!!!!!!!';
 }
?>














</div>
<?php include ('includes/footer.php')  ?>
