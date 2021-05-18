
<!-- includes -->

<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>

<!DOCTYPE html>
<html lang="en">
<body>
  <form class="container" method="POST" action="login.php">
    <div class="form-group">
      <label for="Username">Username : </label>
      <input type="text" class="form-control" id="Username" name='username' placeholder="Enter Username">
    </div>

  
    
    <div class="form-group">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="password" name='password' placeholder="Password">
    </div>
    <button type="submit"  name="send" class="btn btn-primary button" href="index.php">Submit</button>
  </form>
  <?php

  if(isset($_POST['send'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['nom'] = $username;
    $_SESSION['password'] = $password;
    
    if(isset($username ,$password))
    {
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' LIMIT 1 ";
    $result = query($sql);
    $user = fetch_array($result);
    
    if ($user != null) {
      $_SESSION['logged']=true;
      $_SESSION['nom'] = $user['username'];
      $_SESSION['password'] = $user['password'];
      redirect('index.php');
      echo "you're now signed in Welcome ***";
    } 
    else{
      echo "email ou mot de pass est incorect  ***";
    }
  }
}
  ?>

</body>

</html>