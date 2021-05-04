<?php include ('includes/function.php') ?>
<?php include ('includes/logo.php') ?>
<?php include ('includes/header.php')  ?>



<?php  $query = "SELECT * from categories";
 $result = query($query); ?>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">First name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Last name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="last name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your email">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="your password">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">confirm password</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="confirm password">
  </div>

  <button type="submit"  name="submit" class="btn btn-primary">
  Register
</button>
<span>alredy a member ? </span> <span>Login </span>
</form>
    











<?php include ('includes/footer.php')  ?>
