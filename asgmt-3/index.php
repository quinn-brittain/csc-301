<?php
require_once 'data.php'
?>

<!doctype html>
<html lang="en">

<?php
$title = 'Welcome to Spectre';
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
        <li class="nav-item active">
          <a class="nav-link" href="index.php" data-ss1579982651="1">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-ss1579982651="1">Browse</a>
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
  <main class="d-flex flex-row">

    <div class="container mr-0" style="width:70%; max-width:1080px">
      <?php if (isset($_GET['error']) && $_GET['error'] == 404) : ?>
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <p class="m-0"><strong>Oh snap!</strong> It looks like that page was either moved or no longer exists.</p>
        </div>
      <?php endif ?>
      <?php for ($i = 0; $i < count($games); $i++) : ?>
        <a href="detail.php?id=<?= $i ?>" style="width:100%; max-height:200px">
          <section class="browse-game btn text-white btn-primary p-0 mb-3">
            <div class="card-body p-0">
              <div class="media">
                <img src="<?= $games[$i]['picture'] ?>" class="mr-3 rounded-left" alt="...">
                <section class="media-body mt-2 mb-0 mr-2">
                  <h4 class="card-title text-left mb-2"><?= $games[$i]['name'] ?></h4>
                  <section class="content d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column text-left justify-content-between">
                      <div>
                        <?php if ($games[$i]['sale'] > 0) : ?>
                          <h5 class="price text-muted mb-1"><s>$<?= $games[$i]['price'] ?></s></h5>
                        <?php else : ?>
                          <h5 class="price mb-1 justify-content-center">$<?= $games[$i]['price'] ?></h5>
                        <?php endif ?>
                        <div class="d-flex flex-row">
                          <?php if ($games[$i]['sale'] > 0) : ?>
                            <h5 class="mt-1 mr-2">$<?= $games[$i]['sale-price'] ?></h5>
                            <div class="sale bg-success p-1 mb-2">
                              <h5 class="m-0">-<?= round($games[$i]['sale']) ?>%</h5>
                            </div>
                          <?php endif ?>
                        </div>
                      </div>
                      <div class="d-flex flex-row">
                        <div class="badge <?= $games[$i]['rating-color'] ?> d-flex flex-row p-1 mr-3">
                          <i class="rating fas mr-1 <?= $games[$i]['rating-symbol'] ?>"></i>
                          <p class="rating mb-0"><?= $games[$i]['rating'] ?>%</p>
                        </div>
                        <div class="platform">
                          <?php foreach ($games[$i]['platform'] as &$os) : ?>
                            <i class="fab mr-1 <?= $os ?>"></i>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                    <div class="text-right">
                      <p class="release-date card-text mb-2"><?= $games[$i]['release-date'] ?></p>
                      <div class="tags d-flex flex-column">
                        <div>
                          <?php
                          $j = 0;
                          foreach ($games[$i]['tags'] as &$tag) :
                          ?>
                            <?php if (4 >= $j && $j >= 0) : ?>
                              <?php
                              if ($j == 3) {
                                echo '
                                </div>
                                <div>
                                ';
                              }
                              ?>
                              <span class="badge badge-pill badge-secondary"><?= $tag ?></span>
                            <?php
                            endif;
                            $j++;
                            ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </section>
                </section>
              </div>
            </div>
          </section>
        </a>
      <?php endfor; ?>
    </div>
    <div class="container ml-0" style="width:350px">
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

  </main>

  <?php
  require_once 'script.php'
  ?>
</body>

</html>