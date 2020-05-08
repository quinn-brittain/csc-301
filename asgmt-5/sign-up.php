<!doctype html>
<html lang="en">

<?php
$title = 'Spectre - Sign up';
require_once 'head.php'
?>

<body>
  <?php 
  $page = 'home';
  require 'nav.php' 
  ?>

  <main class="container">
    <form class="card pb-3 mb-3 d-flex flex-row justify-content-between" action="action_page.php">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" class="btn">Cancel</button>
          <button type="submit" class="btn">Sign Up</button>
        </div>
      </div>
    </form> 
  </main>

  <?php
  require_once 'script.php'
  ?>
</body>

</html>