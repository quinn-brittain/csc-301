<?php
$games = [
  [
    'name' => 'Civilization VI',
    'address' => 'null',
    'picture' => 'img/civilization-6.jpg',
    'price' => 59.99,
    'platform' => ['fa-windows', 'fa-apple', 'fa-linux'],
    'rating' => 92,
  ],
  [
    'name' => 'Temtem',
    'address' => 'null',
    'picture' => 'img/temtem.jpg',
    'price' => 34.99,
    'platform' => ['fa-windows'],
    'rating' => 89,
  ],
  [
    'name' => 'Stardew Valley',
    'address' => 'null',
    'picture' => 'img/stardew-valley.jpg',
    'price' => 14.99,
    'platform' => ['fa-windows', 'fa-apple'],
    'rating' => 97,
  ],
  [
    'name' => 'Red Dead Redemption 2',
    'address' => 'null',
    'picture' => 'img/red-dead-redemption-2.jpg',
    'price' => 59.99,
    'platform' => ['fa-windows', 'fa-apple'],
    'rating' => 68,
  ],
  [
    'name' => 'Kings',
    'address' => 'null',
    'picture' => 'img//kings.jpg',
    'price' => 0.99,
    'platform' => ['fa-windows', 'fa-apple'],
    'rating' => 35,
  ]
];

foreach ($games as &$game)
if ($game['rating'] >= 70) {
  $game['ratingSymbol'] = 'fa-thumbs-up';
  $game['ratingColor'] = 'badge-success';
} elseif ($game['rating'] >= 40) {
  $game['ratingSymbol'] = 'fa-grip-lines';
  $game['ratingColor'] = 'badge-warning';
} else {
  $game['ratingSymbol'] = 'fa-thumbs-down';
  $game['ratingColor'] = 'badge-danger';
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">

  <title>Welcome to Spleen</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <a class="navbar-brand" href="#" data-ss1579982651="1">Spleen</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" data-ss1579982651="1">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-ss1579982651="1">Features</a>
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
    <div class="container" style="width:70%">
      <?php for ($i = 0; $i < count($games); $i++) : ?>
        <a href="detail.php?id=<?= $i ?>" style="max-height:200px">
          <div class="card text-white bg-primary mb-3" style="min-width:40rem; max-width:60rem; max-height:200px">
            <div class="card-body p-0">
              <div class="media">
                <img src="<?= $games[$i]['picture'] ?>" class="mr-3" alt="..." style="max-width:300px; max-height:200px">
                <div class="media-body mt-2 mb-0 mr-2">
                  <h4 class="card-title"><?= $games[$i]['name'] ?></h4>
                  <p class="card-text mb-2">Some quick example text to build on the card</p>
                  <p class="mb-2">Price: $<?= $games[$i]['price'] ?></p>
                  <div class="d-flex flex-row">
                    <div class="badge <?= $games[$i]['ratingColor'] ?> d-flex flex-row fs-1 h5 pt-1 pb-1 mr-3" style="font-size:13px">
                      <i class="fas mr-1 <?= $games[$i]['ratingSymbol'] ?>"></i>
                      <p class="mb-0"><?= $games[$i]['rating'] ?>%</p>
                    </div>
                    <div>
                      <?php foreach ($games[$i]['platform'] as &$os) : ?>  
                        <i class="fab mr-1 <?= $os ?>"></i>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        <hr>
      <?php endfor; ?>
    </div>
    <div class="container" style="width:30%">
      <div class="card mb-3">
        <h3 class="card-header">Card header</h3>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <h6 class="card-subtitle text-muted">Support card subtitle</h6>
        </div>
        <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
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

  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>