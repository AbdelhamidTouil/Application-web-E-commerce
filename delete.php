
<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>


<?php
$delete=$_GET['id'];
$query="DELETE FROM products WHERE product_id ='$delete'";
print_r($query);

$result = query($query);
$product = fetch_array($result);
if($product != null){



    


echo("<script> alert('Deleted ');</script>");
}
?>
