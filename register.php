
<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>

<!DOCTYPE html>
<html lang="en">
<body>
  <form class="container" method="POST" action="register.php">
    <div class="form-group">
      <label for="Username">Username : </label>
      <input type="text" class="form-control" id="Username" name='Username' placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="email">E-mail : </label>
      <input type="text" class="form-control" id="email" name='email' placeholder="Enter an email">
    </div>
    <div class="form-group">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="Password" name='password' placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary button" href="index.php">Submit</button>
  </form>
  <?php

  if (isset($_POST['Username'], $_POST['email'], $_POST['password'])) {
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, email,password) VALUES( '$Username' , '$email', '$password') ";
    if (query($sql)) {
      echo "you're now signed up Welcome ***";
    } 
  }
  ?>

</body>

</html>