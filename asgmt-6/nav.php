<?php 
require_once 'utils/lib-auth.php';
if (!isset($page)) $page = 'home' 
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">

<div class="navbar-brand fas fa-ghost mr-2" style="font-size: 40px"></div>
<a class="navbar-brand" href="index.php" data-ss1579982651="1">Spectre</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item <?php if ($page == 'home') echo 'active' ?>">
      <a class="nav-link" href="index.php" data-ss1579982651="1">Home <?php if ($page == 'home') echo '<span class="sr-only">(current)' ?></span></a>
    </li>
    <li class="nav-item <?php if ($page == 'browse') echo 'active' ?>">
      <a class="nav-link" href="#" data-ss1579982651="1">Browse <?php if ($page == 'browse') echo '<span class="sr-only">(current)' ?></a>
    </li>
    <li class="nav-item <?php if ($page == 'pricing') echo 'active' ?>">
      <a class="nav-link" href="#" data-ss1579982651="1">Community <?php if ($page == 'community') echo '<span class="sr-only">(current)' ?></a>
    </li>
    <li class="nav-item <?php if ($page == 'about') echo 'active' ?>">
      <a class="nav-link" href="#" data-ss1579982651="1">About <?php if ($page == 'about') echo '<span class="sr-only">(current)' ?></a>
    </li>
  </ul>
  <div class="pr-5">
    <?php if(!is_logged('user/uID')) : ?>
      <a class="pr-3" href="sign-in.php">Sign In</a>
      <a href="sign-up.php">Sign Up</a>
    <?php else : ?>
      <a href="sign-out.php">Sign Out</a>
    <?php endif ?>
  </div>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>

</nav>