
<!--start includes-->
<?php include ('includes/function.php') ?>
<?php include ('includes/header.php')  ?>
  <!--end  includes-->

  <?php
 $id = $_GET['id']; // recuperation de id_product
 $query = "SELECT * from products where product_id ='$id'";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>
 <!-- start form  -->
<form action="cheekout.php" method="post">
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="images/<?php echo $row['product_image'] ?>" width="250" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="images/<?php echo $row['product_image'] ?>" width="70"> <img onclick="change_image(this)" src="images/<?php echo $row['product_image'] ?>" width="70"> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">New</span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                     
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Products</span>
                                <h5 class="text-uppercase"><?php echo $row['product_title'] ?></h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $row['product_price'].'dh'.'&nbsp ' ?></span>
                                    <div class="ml-2"> <small class="dis-price"><strike><?php echo $row['old_price'].'dh' ?></strike></small> </div>
                                </div>
                            </div>

                            <p class="product_description"> <?php echo $row['product_description'] ?></p>
                            <p class="short_desc"> <?php echo $row['short_desc'] ?></p>
                            <label for="qte">Qte *</label>
                                    <input type="number" class="form-control"  name="qte" style="width:8ch" value="1"  min="1">
                                    <input type="hidden" name="product" value="<?php echo $row['product_title']; ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>">
                            <div class="cart mt-4 align-items-center">
                             <!-- start button submit  -->
                             <button type="submit" 
                              class="btn btn-danger text-uppercase mr-2 px-4">Add to cart
                             </button> 
                             <!-- end button submit  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </form>
   <!-- end form  -->
<?php  } ?>
<?php include ('includes/footer.php')  ?>
