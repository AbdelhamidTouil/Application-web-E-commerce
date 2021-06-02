
<!-- start includes -->
<?php include ('includes/function.php') ?>
<?php include ('includes/header.php')?>
<!-- end  includes -->

	<div class="bg-contact2">
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



<?php include ('includes/footer.php')  ?>
