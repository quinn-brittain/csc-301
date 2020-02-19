<?php
if (!isset($_GET['id'])) {
  header("Location: index.php?error=404");
}

require_once './utils/json-utils.php';
require_once 'games.php';
require_once 'reviews.php';

if (!is_numeric($_GET['id']) || $_GET['id'] < 0 || $_GET['id'] >= count($games)) {
  header("Location: index.php?error=404");
}
?>

<!doctype html>
<html lang="en">

<?php
require_once 'head.php'
?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">

    <div class="navbar-brand fas fa-ghost mr-2" style="font-size: 40px"></div>
    <a class="navbar-brand" href="index.php" data-ss1579982651="1">Spectre</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" data-ss1579982651="1">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" data-ss1579982651="1">Browse <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-ss1579982651="1">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-ss1579982651="1">About</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

  </nav>
  <main class="container">

    <h2><?= $game['title'] ?></h2>
    <section class="card pb-3 mb-3 d-flex flex-row justify-content-between">

      <div class="mr-3" style="height:100%">
        <img src="<?= $game['picture'] ?>" class="w-100 rounded"></img>
        <div class="ml-3 mt-2">
          <p class=""><?= $game['summary'] ?></p>
          <hr class="my-4">
          <section class="d-flex flex-row mb-2">
            <div class="mr-3">
              <p class="mb-3">Recent Ratings:</p>
              <p class="mb-3">Date Released:</p>
              <p class="mb-0">Developer:</p>
              <p class="mb-0">Publisher:</p>
            </div>
            <div>
              <div class="badge <?= $game['rating-color'] ?> d-inline-flex flex-row p-1 mt-1 mb-3">
                <i class="rating fas mr-1 <?= $game['rating-symbol'] ?>"></i>
                <p class="rating mb-0"><?= $game['rating'] ?>%</p>
              </div>
              <p class="mb-3"><?= $game['release-date'] ?></p>
              <p class="mb-0"><?= $game['developer'] ?></p>
              <p class="mb-0"><?= $game['publisher'] ?></p>
            </div>
          </section>
          <p class="mb-0">Common User Tags:</p>
          <?php
          $j = 0;
          foreach ($game['tags'] as &$tag) :
          ?>
            <?php if (4 >= $j && $j >= 0) : ?>
              <span class="badge badge-pill badge-secondary"><?= $tag ?></span>
            <?php
            endif;
            $j++
            ?>
          <?php endforeach; ?>
        </div>
      </div>
      <div>
        <video src="" class="bg-secondary rounded" style="width:600px; height:337px"></video>
        <div class="rounded d-flex flex-row w-100 h-50">
          <button type="button" class="btn btn-secondary h-25 mr-1">
            <</button> <div class="rounded w-25 h-25 bg-secondary">
        </div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <button type="button" class="btn btn-secondary h-25 ml-1">></button>
      </div>
      </div>

    </section>
    <?php
    $user = 'user'; // TODO Add users
    $owned = true; // TODO Add ownership to users
    if (!($_POST == null)) {
      echo 'Posted';
    }
    if ($owned && !isset($reviews[$user])) {
      require 'review-write-container.php';
    } else if ($owned && isset($reviews[$user])) {
      require 'review-container.php';
    }
    echo '<pre>';
    print_r($_POST);
    ?>
  </main>

  <?php
  require_once 'script.php'
  ?>
</body>

</html>