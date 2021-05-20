

<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>

<!--===============================================================================================-->

<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form"  method="POST" action="contact.php">
					<span class="contact2-form-title">
						Contact Us
					</span>

					

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
              <button type="submit" name="submit" class="btn btn-primary button" href="index.php">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

  <?php
  
if(isset($_POST['submit']))
{
if (isset( $_POST['email'], $_POST['message'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO contacts (email,message) VALUES('$email','$message')";
  if (query($sql)) {
    echo("<script>alert ('message send ***')</script>");
     } 
   }
}
?>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<?php include ('includes/footer.php')  ?>
</body>
</html>
