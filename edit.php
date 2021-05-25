
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!-- end includes -->
    <?php
$edit_id=@$_GET['id'];
@$query= "SELECT * FROM products where product_id ='$edit_id'";
$show = $connexion->query($query);
$display=$show->fetch_assoc();
?>
    <form  class="formedit"action="edit.php?edit_form=<?php echo $edit_id?>"  method="post" enctype ="multipart/form-data">
      <h1> Update Product  her 
      </h1>

      <h3>title</h3>
      <input type="text" name="title" size="59" value="<?php echo @$display['product_title']; ?>"/>


       <h3>price</h3>
      <input name="product_price"  type="text" size="59" value="<?php echo @$display['product_price']; ?>">

      <h3>old price</h3>
      <input name="old_price"  type="text" size="59" value="<?php echo @$display['old_price']; ?>">
     
      <h3>Description</h3>
     
     
<textarea name="product_description" id="product_description" cols="60" rows="6">
<?php echo @$display['product_description']; ?></textarea>



      <h3>short description</h3>      
<textarea name="short_desc" id="product_description" cols="60" rows="2">
<?php echo @$display['short_desc']; ?></textarea>


<h3>image</h3>
      <input type="file" name="image" size="59" value="<?php echo @$display['product_image']; ?>"/>

      <br>      <br>      <br>
      <input type="submit" name="update" value="Enregistrer" />
    </form>

    <?php
if(isset($_POST['update']))
{
$edit_id=$_GET['edit_form'];
$title=$_POST['title'];
$product_price=$_POST['product_price'];
$old_price=$_POST['old_price'];
$product_description=$_POST['product_description'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp,"images/$image_name");
@$query="UPDATE products set product_title='$title',product_price='$product_price',old_price='$old_price',
product_description='$product_description',short_desc='$short_desc',
product_image='$image_name' where product_id='$edit_id'";

@$result = query($query);
@$product = fetch_array($result);
if($product != null){

echo("<script> alert('updeted !!!!!' )</script>");
}
}
?>
  </body>
</html>
<?php include ('includes/footer.php')  ?>