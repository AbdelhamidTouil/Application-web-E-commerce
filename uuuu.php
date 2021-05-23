
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end includes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <?php
$edit_id=$_GET['id'];
$query= "SELECT * FROM products where product_id ='$edit_id'";
$show = $connexion->query($query);
$display=$show->fetch_assoc();
?>
   
<!-- formulaire -->
<form action="edit.php?edit_form=<?php echo $edit_id?>"  method="post" enctype ="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Title">Title</label>
      <input type="text" class="form-control" name="title" id="Title" placeholder="Title" value="<?php echo $display['product_title']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="Price">Price</label>
      <input type="text" class="form-control" name="product_price" id="Price" placeholder="Price"  value="<?php echo $display['product_price']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <textarea  class="form-control"  name= "product_description" id="Description" placeholder="Description" value="<?php echo $display['product_description']; ?>">
</textarea>
  </div>

  <div class="form-group">
    <label for="short_description">short description</label>
    <input type="text" class="form-control" name="short_desc" id="short_description" placeholder="short description"value="<?php echo $display['short_desc']; ?>">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Qte">image</label>
      <input type="file" class="form-control" name="image" id="image" value="<?php echo $display['product_image']; ?>">
    </div>

    <div class="form-group col-md-4">
    <label for="inputZip">Qte</label>
      <input type="text" class="form-control" name="qte" id="qte"value="<?php echo $display['product_quantity']; ?>">
    </div>

  <div class="form-group col-md-2">
      <label for="old_price">old_price</label>
      <input type="text" class="form-control" name="old_price" id="old_price" value="<?php echo $display['old_price']; ?>"> 
    </div>
  </div>

  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
<!-- end formulaire-->
    <?php
if(isset($_POST['update']))
{
$edit_id=$_GET['edit_form'];
$title=$_POST['title'];
$qte=$_POST['qte'];
$product_price=$_POST['product_price'];
$old_price=$_POST['old_price'];
$product_description=$_POST['product_description'];
$short_desc=$_POST['short_desc'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp,"images/$image_name");
$query="UPDATE products set product_title='$title',product_price='$product_price',short_desc='$short_desc',
product_description='$product_description',product_quantity='$qte'
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
