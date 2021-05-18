
<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>


<div class="row">


<!--card cities -->
<div class="card mt-4  mx-4" style="width: 14rem;">
  <div class="card-header">
  Cities
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Oujda <span class="city  p-2 float-end">1</span></li>
    <li class="list-group-item">Tanger <span class="city  p-2 float-end">2</span></li>
    <li class="list-group-item">Rabat <span class="city  p-2 float-end">3</span></li>
    <li class="list-group-item">caza <span class="city  p-2 float-end">1</span></li>
    <li class="list-group-item">berkan <span class="city  p-2 float-end">2</span></li>
    <li class="list-group-item">jrrada <span class="city  p-2 float-end">3</span></li>
  </ul>
</div> <!-- end card-->
<!--end card cities-->


<div class="w3-content w3-section" style=" max-width:700px ; max-height:400px">
  <img class="mySlides" src="images/pc.jpg" style="width:100% ;height:100%">
  <img class="mySlides" src="images/tablete.jpg" style="width:100% ;height:100%">
  <img class="mySlides" src="images/product5.jpg" style="width:100%; height:100%">
</div>




</div>



<div class="row">

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
</div><!-- end card-->
<!-- end card 2-->
<?php 
}
 ?>


</div>









</div><!-- end row-->
<script src="includes/javascript/script.js"></script>
<?php include ('includes/footer.php')  ?>
