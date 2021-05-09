
<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php') ?>
<?php include ('navigation.php')  ?>



<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Sign in</legend>
    
              <!-- Email input-->
              <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
           
    
            <!-- password body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="password">Your password</label>
              <div class="col-md-9">
              <input id="password" name="password" type="password" placeholder="Your password" class="form-control">
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" name="send" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>




  <?php

if (isset($_POST['send'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '$email' && password ='$password'";
  $result = query($sql);
  $user = fetch_array($result);
  if ($user != null) {
   $_SESSION['logged'] = true;
   $_SESSION['username']= $user['username'];
   $_SESSION['user_id'] = $user['user_id'];
  redirect('index.php');
  } else {
    echo '<div class="alert alert-danger mt-2">wrong </div>';;
  }
 
}
?>











<?php include ('includes/footer.php')  ?>
