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
  </head>
  <body>
  <form class="insert_form" action="add_post.php"  method="post" enctype ="multipart/form-data">

      <h1 class="titre_center">Insert new post
      </h1>

      

        <div>
          <label> Post Title:
          </label> 
          <input type="text" name="title" size="40"/> 
        </div>

        <div>
          <label> Post description:
          </label> 
          <input type="text" name="description" size="40"/>
        </div> 
      </div>

      
	  <label> Post price:
        </label>
		<input type="text" name="price" size="40"/> 
      </div>

        <label class="lbl"> Image:
        </label>
        <input type="file" name="image" size="40"/>      
      </div>

    
       

      <div class="submitt">
        <input  type="submit" name="submit"/>
      </div>

        </form>
  </body>


  <?php include ('includes/footer.php');?>
</html> <!-- enb html -->
<?php

if(isset($_POST['submit']))
{
if($_POST['title']=='' or $_POST['description']=='' or $_POST["price"]=='')
{
echo("<script>alert ('fill all the field ')</script>");
exit();
}

else
{
$title=$_POST['title'];
$description=$_POST['description'];
$price=$_POST['price'];
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

$sql ="INSERT INTO products (product_title,product_description,product_price,product_image) values('$title','$description','$price' ,'$image_name')";
if(query($sql))
{
	echo("<script>alert ('post has been submitted !!')</script>");
}
}
}
?>
