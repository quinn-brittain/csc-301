<?php
require_once('lib_auth.php');
if(is_logged('user/uID')) header('location: index.php');

if(count($_POST)>0){
	$error=signin('data/users.csv.php','user/uID','index.php');
}

?>

<!doctype html>
<html lang="en">

<?php
$title = 'Spectre - Sign in ';
require_once 'head.php'
?>

<body>
  <?php 
  $page = 'home';
  require 'nav.php' 
  ?>

  <main class="container">
    <?php if(isset($error{0})) : ?>
    <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <p class="m-0"><?= $error ?></p>
    </div>
    <?php endif ?>
    <form class="card pb-3 mb-3 d-flex flex-row justify-content-between" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
      <div class="container w-75 pt-2 pb-2">
        <h1>Sign In</h1>
        <p>Don't have an account? <a href="sign-up.php">Create One</a></p>
        <hr>

        <div class="d-flex">
          <div class="form-group mb-4">
            <label class="col-form-label font-weight-bold" for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
          </div>
        </div>

        <div class="d-flex">
          <div class="form-group ">
            <label class="col-form-label font-weight-bold" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
          </div>
        </div>

        <div class="custom-control custom-checkbox mb-3 mt-1 ml-1">
          <input type="checkbox" class="custom-control-input" name="remember" checked>
          <label class="custom-control-label" for="remember">Remember me</label>
        </div>

        <div>
          <a href="index.php"><button type="button" class="btn btn-secondary">Cancel</button></a>
          <button type="submit" class="btn btn-primary ml-1">Sign In</button>
        </div>
      </div>
    </form> 
  </main>

  <?php
  require_once 'script.php'
  ?>
</body>

</html>