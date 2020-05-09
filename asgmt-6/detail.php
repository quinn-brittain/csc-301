<?php
if (!isset($_GET['id'])) {
  header("Location: index.php?error=404");
}

require_once './utils/Utils.php';
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
  <?php 
  $page = 'browse';
  require 'nav.php' 
  ?>

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
          <button type="button" class="btn btn-secondary h-25 mr-1"><</button> 
          <div class="rounded w-25 h-25 bg-secondary">
        </div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
        <button type="button" class="btn btn-secondary h-25 ml-1">></button>
      </div>
      </div>

    </section>
    <?php
    if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $owned = true; // TODO Add ownership to users
    }
    require 'review-container.php';
    ?>
    <section class="d-flex flex-row">
      <div class="container mr-0 pl-0" style="width:70%; max-width:1080px">
        <section class="card mb-3 d-flex flex-column justify-content-between">
          <div class="card-header d-flex flex-row justify-content-between">
            <h4 class="pt-1">Customer Reviews</h4>
          </div>
        </section>
        <?php foreach ($reviews as &$review) : ?>
          <?php if (isset($user) && $review['user'] == $user) continue ?>
          <section class="card mb-3 d-flex flex-column justify-content-between">
            <div class="pl-3 pr-3">
              <div class="d-flex flex-row justify-content-between">
                <div class="d-inline-flex flex-row pt-4 pb-1">
                    <?php if ($review['raiting']) : ?>
                      <span class="badge badge-success"><i class="fas fa-thumbs-up h4 m-1"></i></span>
                    <?php else : ?>
                      <span class="badge badge-danger"><i class="fas fa-thumbs-down h4 m-1"></i></span>
                    <?php endif ?>
                  <h4 class="ml-2 mt-1">
                    <?php 
                      if ($review['raiting']) { 
                        echo 'Recomended'; 
                      } else {
                        echo 'Not Recomended'; 
                      }
                    ?>
                  </h4>
                </div>
                <div class="d-flex flex-column align-items-end">
                  <div class="bg-secondary mt-2" style="width: 32px; height: 32px"></div>
                  <h5 class="pt-1 mb-0"><?= $review['user'] ?></h5>
                </div>
              </div>
              <hr class="p-0 m-2">
              <div class="pl-1 pr-1">
                <p class="text-muted mt-1 mb-1 font-weight-bold small">POSTED: <?= $review['date']['month'].' '.$review['date']['mday'].', '.$review['date']['year']?></p>
                <p><?= $review['reviewBody'] ?></p>
              </div>
            </div>
          </section>
        <?php endforeach ?>
      </div>
      <div class="container ml-0 mb-3 pr-0 pl-0" style="width:400px">
        <div class="card mb-3">
          <h3 class="card-header">Card header</h3>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
          </div>
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link" data-ss1579982651="1">Card link</a>
            <a href="#" class="card-link" data-ss1579982651="1">Another link</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link" data-ss1579982651="1">Card link</a>
            <a href="#" class="card-link" data-ss1579982651="1">Another link</a>
          </div>
        </div>
      </div>
    </section>
    
  </main>

  <?php
  require_once 'script.php'
  ?>
</body>

</html>