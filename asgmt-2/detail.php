<?php
if (!isset($_GET['id'])) {
  die('No id: go back to the <a href="index.php">games page</a>');
}

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

if (!is_numeric($_GET['id']) || $_GET['id'] < 0 || $_GET['id'] >= count($games)) {
  die('Invalid: go back to the <a href="index.php">games page</a>');
}


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/main.css">

  <title><?= $games[$_GET['id']]['name'] ?></title>
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
  <main class="container">
    <h1><?= $games[$_GET['id']]['name'] ?></h1>
    <img src="<?= $games[$_GET['id']]['picture'] ?>" style="max-width:500px" />
    <p>Address: <?= $games[$_GET['id']]['address'] ?></p>
    <p>Price per night: <?= $games[$_GET['id']]['price'] ?></p>
    <p>Rating: <span class="badge badge-secondary"><?= $games[$_GET['id']]['rating'] ?></span></p>
  </main>

  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>