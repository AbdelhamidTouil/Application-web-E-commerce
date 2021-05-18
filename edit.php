
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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Header --> 
  
    <?php
$edit_id=$_GET['id'];

$query= "SELECT * from products where product_id='$edit_id'";
while($row=fetch_array($query))
{
    $id=$row['product_id'];
    $title=$row["product_title"];
    $image=$row["product_image"];
    
    $product_price=$row["product_price"];
}
?>
    <form  class="formedit"action="edit.php?edit_form=<?php echo $edit_id?>"  method="post" enctype ="multipart/form-data">
      <h1> inseert new post her 
      </h1>
      <h3>post tite:
      </h3>
      <input type="text" name="id" size="60"  value="<?php echo "$id"; ?>"/>
      <h3>author
      </h3>
      <input type="text" name="title" size="60" value="<?php echo "$title"; ?>"/>
      <h3>image
      </h3>
      <input type="file" name="image" size="60" value="<?php echo "$image"; ?>"/>
      <h3>post content
      </h3>
      <textarea name="product_price"  rows="5" cols="63" >
        <?php echo "$product_price"; ?>
      </textarea> 
      <br>
      <input type="submit" name="update" value="Enregistrer" />
    </form>
    <!-- footer --> 
    <?php include ('footer.php');?> 
    <?php
if(isset($_POST['update']))
{
$edit_id=$_GET['edit_form'];
$title=$_POST['product_title'];

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
