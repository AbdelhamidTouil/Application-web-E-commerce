
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end  includes -->

<!-- start row-->
<div class="row">


<?php
 $query = "SELECT * from contacts";
 $result = query($query);
while ($row = fetch_array($result))
{
 ?>

 <!--cart   product-->
<div class="card mt-4 mx-8" style="width: 18rem; height:100%;">
<div class="email"><a href=""><?php echo $row['email'] ?></a></div>
<p class="message"><?php echo $row['message'] ?></p>
</div>

<!-- end card -->
<?php 
}
 ?>

</div><!-- end row-->
<?php include ('includes/footer.php')  ?>
