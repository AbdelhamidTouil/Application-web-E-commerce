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
    <title>Document
    </title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  </head>
  <body>
<!-- formulaire -->
<form  action="add_post.php"  method="post" enctype ="multipart/form-data">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" id="Title" placeholder="Title">
    </div>

    <div class="form-group col-md-6">
      <label for="Price">Price</label>
      <input type="text" class="form-control" name="price" id="Price" placeholder="Price">
    </div>
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <textarea  class="form-control"  name= "description" id="Description" placeholder="Description">
</textarea>
  </div>

  <div class="form-group">
    <label for="short_description">short description</label>
    <input type="text" class="form-control" name="short_description" id="short_description" placeholder="short description">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Qte">image</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>

    <div class="form-group col-md-4">
      <label for="Category">Category</label>
      <select id="Category" class="form-control" name="category">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Qte</label>
      <input type="text" class="form-control" name="qte" id="qte">
    </div>
  </div>

  <div class="form-group col-md-2">
      <label for="old_price">old_price</label>
      <input type="text" class="form-control" name="old_price" id="old_price">
    </div>
  </div>



  <button type="submit" class="btn btn-primary" name="submit">Publish</button>
</form>
<!-- end formulaire-->
  </body>


  <?php include ('includes/footer.php');?>
</html> <!-- enb html -->
<?php

if(isset($_POST['submit']))
{
if($_POST['title']==''  or $_POST['description']=='' or $_POST["price"]=='')

{
echo("<script>alert ('fill all the field ')</script>");
}

else
{
$title=$_POST['title'];
$price=$_POST['price'];
$old_price=$_POST['old_price'];
$description=$_POST['description'];
$short_description=$_POST['short_description'];
$qte=$_POST['qte'];
$category=$_POST['category'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
if($image_type == "image/jpeg" or $image_type == "image/jpg" or $image_type == "image/png" or $image_type == "image/gif" )
{
if($image_size<=1000000000)
{
move_uploaded_file($image_tmp,"images/$image_name");
}
else
{
echo("<script> alert('larger image only 1 MB file sise is valid' )</script>");
}
}
else
{
echo("<script> alert('invalid file type' )</script>");
}

$sql ="INSERT INTO products (product_title,product_price, old_price,product_description,short_desc,product_quantity,product_image)
 values('$title','$price','$old_price','$description','$short_description' ,'$qte','$image_name')";
if(query($sql))
{
	echo("<script>alert ('post has been submitted !!')</script>");
}
}
}
?>
