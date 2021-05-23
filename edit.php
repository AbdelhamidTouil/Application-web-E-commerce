
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
      <h1> inseert new post her 
      </h1>

      <h3>title</h3>
      <input type="text" name="title" size="60" value="<?php echo @$display['product_title']; ?>"/>

      <h3>image</h3>
      <input type="file" name="image" size="60" value="<?php echo @$display['product_image']; ?>"/>

       <h3>price</h3>
      <input name="product_price"  type="text"  value="<?php echo @$display['product_price']; ?>">
      
     
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
move_uploaded_file($image_tmp,"images/$image_name");
@$query="UPDATE products set product_title='$title',product_price='$product_price',
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
