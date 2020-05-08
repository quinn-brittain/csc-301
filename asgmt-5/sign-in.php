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
    <form class="card pb-3 mb-3 d-flex flex-row justify-content-between" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
      <div class="container w-75 pt-2 pb-2">
        <h1>Sign In</h1>
        <p>Don't have an account? <a href="sign-up.php">Create One</a></p>
        <hr>

        <div class="d-flex">
          <div class="form-group mb-4">
            <label class="col-form-label font-weight-bold" for="username">Username</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
          </div>
        </div>

        <div class="d-flex">
          <div class="form-group ">
            <label class="col-form-label font-weight-bold" for="passwd">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="passwd" required>
          </div>
        </div>

        <div class="custom-control custom-checkbox mb-3 mt-1 ml-1">
          <input type="checkbox" class="custom-control-input" name="remember" checked>
          <label class="custom-control-label" for="remember">Remember me</label>
        </div>

        <div>
          <button type="button" class="btn btn-secondary">Cancel</button>
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