
<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update
    </title>
 
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Header --> 
  
    <?php
$edit_id=$_GET['id'];

$query= "SELECT * FROM products where product_id ='$edit_id'";
$show = $connexion->query($query);
$display=$show->fetch_assoc();

?>
    <form  class="formedit"action="edit.php?edit_form=<?php echo $edit_id?>"  method="post" enctype ="multipart/form-data">
      <h1> inseert new post her 
      </h1>
      <h3>id
      </h3>
      <input type="text" name="id" size="60"  value="<?php echo $display['product_id']; ?>"/>
      <h3>title
      </h3>
      <input type="text" name="title" size="60" value="<?php echo $display['product_title']; ?>"/>
      <h3>image
      </h3>
      <input type="file" name="image" size="60" value="<?php echo $display['product_image']; ?>"/>
      <h3>price
      </h3>
      <textarea name="product_price"  rows="5" cols="63" >
      <?php echo $display['product_price']; ?>
      </textarea> 
      <br>
      <input type="submit" name="update" value="Enregistrer" />
    </form>

    <?php
if(isset($_POST['update']))
{
$edit_id=$_GET['edit_form'];
$title=$_POST['title'];

$product_price=$_POST['product_price'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp,"/images/$image_name");
$query="UPDATE products set product_title='$title',product_price='$product_price',
product_image='$image_name' where product_id='$edit_id'";

$result = query($query);
$product = fetch_array($result);
if($product != null){

echo("<script> alert('updeted !!!!!' )</script>");
}
}
?>
  </body>
</html>
