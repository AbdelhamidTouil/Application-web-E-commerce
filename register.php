
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>
<?php include ('navigation.php')  ?>



<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="register.php" method="post">
          <fieldset>
            <legend class="text-center">Register</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="username">Username</label>
              <div class="col-md-9">
                <input id="name" name="Username" type="text" placeholder="username" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="password">Your password</label>
              <div class="col-md-9">
              <input id="password" name="password" type="password" placeholder="Your password" class="form-control">
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
    















  <?php

if (isset($_POST['Username'], $_POST['email'], $_POST['password'])) {
  $Username = $_POST['Username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO users (username, email,password) VALUES( '$Username' , '$email', '$password') ";
  if (query($sql)) {
    echo '<div class="alert alert-success mt-2">welcome </div>';
  } else {
    echo '<div class="alert alert-danger mt-2">wrong </div>';;
  }
 
}
?>











<?php include ('includes/footer.php')  ?>
