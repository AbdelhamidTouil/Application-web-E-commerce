
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end  includes -->

<!-- start row  -->
    <div class="row">
    <?php
 $query = "SELECT * from products";
 $result = query($query);
 while ($row = fetch_array($result))
{
 ?>
<!-- start card product  -->
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                <img src="images/<?php echo $row['product_image'];?>" class="rounded " 
                width="200" height="200">
                    <h5><?php echo $row['product_title'] ?></h5>
                    <div class="mt-3 info"> <span class="text1 d-block"><?php echo $row['product_description'] ?></span> <span class="text1"><?php echo $row['short_desc'] ?></span> </div>
                    <div class=" cost mt-3 text-dark"> <span><?php echo $row['product_price'].'dh' ?></span> <span class="prix_ancienne"> <strike><?php echo $row['old_price'].'dh' ?></strike> </span>
                        <div class=" star mt-3 align-items-center">  <a href="product_description.php?id=<?php echo $row['product_id'] ?>" class="card-link">see more</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card product  -->
    <?php } ?>
  
</div>
<!-- end row  -->
<?php include ('includes/footer.php')  ?>
