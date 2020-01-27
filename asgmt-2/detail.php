<?php
if (!isset($_GET['id'])) {
  header("Location: index.php?error=404");
}

$games = [
  [
    'name' => 'Sid Meier’s Civilization® VI',
    'summary' => 'Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history’s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England). ',
    'picture' => 'img/civilization-6.jpg',
    'release-date' => 'Oct 21, 2016',
    'price' => 59.99,
    'sale' => 75,
    'platform' => ['fa-windows', 'fa-apple', 'fa-linux'],
    'rating' => 92,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Strategy', 'Turn-Based Strategy', 'Historical', '4X']
  ],
  [
    'name' => 'Temtem',
    'summary' => '',
    'picture' => 'img/temtem.jpg',
    'release-date' => 'Jan 21, 2020',
    'price' => 34.99,
    'sale' => 0,
    'platform' => ['fa-windows'],
    'rating' => 89,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Early Access', 'Massive Multiplayer', 'RPG', 'Indie']
  ],
  [
    'name' => 'Stardew Valley',
    'summary' => '',
    'picture' => 'img/stardew-valley.jpg',
    'release-date' => 'Feb 26, 2016',
    'price' => 14.99,
    'sale' => 33.33,
    'platform' => ['fa-windows', 'fa-apple'],
    'rating' => 97,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Farming Sim', 'Life Sim', 'RPG', 'Pixel Graphics', 'Indie']
  ],
  [
    'name' => 'Red Dead Redemption 2',
    'summary' => '',
    'picture' => 'img/red-dead-redemption-2.jpg',
    'release-date' => 'Dec 5, 2019',
    'price' => 59.99,
    'sale' => 20,
    'platform' => ['fa-windows'],
    'rating' => 68,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Adventure', 'Action', 'Open World', 'Master Piece']
  ],
  [
    'name' => 'Kings',
    'summary' => '',
    'picture' => 'img/kings.jpg',
    'release-date' => 'Nov 2, 2018',
    'price' => 0.99,
    'sale' => 50,
    'platform' => ['fa-windows'],
    'rating' => 35,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Casual', 'Strategy', 'Indie']
  ],
  [
    'name' => 'The District',
    'summary' => 'The District - action with elements of survival in the open world.',
    'picture' => 'img/the-district.jpg',
    'release-date' => 'Dec 10, 2017',
    'price' => 0.99,
    'sale' => 50,
    'platform' => ['fa-windows'],
    'rating' => 19,
    'developer' => 'Firaxis Games, Aspyr',
    'publisher' => '2K, Aspyr',
    'tags' => ['Survival', 'Indie', 'Adventure', 'Action', 'Open World']
  ]
];

foreach ($games as &$game) {
  if ($game['rating'] >= 70) {
    $game['rating-symbol'] = 'fa-thumbs-up';
    $game['rating-color'] = 'badge-info';
  } elseif ($game['rating'] >= 40) {
    $game['rating-symbol'] = 'fa-grip-lines';
    $game['rating-color'] = 'badge-warning';
  } else {
    $game['rating-symbol'] = 'fa-thumbs-down';
    $game['rating-color'] = 'badge-danger';
  }
  $game['sale-price'] = floor((($game['sale'] - 100) * -1) * $game['price']) / 100;
}

if (!is_numeric($_GET['id']) || $_GET['id'] < 0 || $_GET['id'] >= count($games)) {
  header("Location: index.php?error=404");
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

    <h2><?= $games[$_GET['id']]['name'] ?></h2>
    <section class="card pb-3 d-flex flex-row justify-content-between">
      <div class="mr-3" style="height:100%">
        <img src="<?= $games[$_GET['id']]['picture'] ?>" class="w-100 rounded"></img>
        <div class="ml-3 mt-2">
          <p class=""><?= $games[$_GET['id']]['summary'] ?></p>
          <hr class="my-4">
          <section class="d-flex flex-row mb-2">
            <div class="mr-3">
              <p class="mb-3">Recent Ratings:</p>
              <p class="mb-3">Date Released:</p>
              <p class="mb-0">Developer:</p>
              <p class="mb-0">Publisher:</p>
            </div>
            <div>
              <div class="badge <?= $games[$_GET['id']]['rating-color'] ?> d-inline-flex flex-row p-1 mt-1 mb-3">
                <i class="rating fas mr-1 <?= $games[$_GET['id']]['rating-symbol'] ?>"></i>
                <p class="rating mb-0"><?= $games[$_GET['id']]['rating'] ?>%</p>
              </div>
              <p class="mb-3"><?= $games[$_GET['id']]['release-date'] ?></p>
              <p class="mb-0"><?= $games[$_GET['id']]['developer'] ?></p>
              <p class="mb-0"><?= $games[$_GET['id']]['publisher'] ?></p>
            </div>
          </section>
          <p class="mb-0">Common User Tags:</p>
          <?php
          $j = 0;
          foreach ($games[$_GET['id']]['tags'] as &$tag) :
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
          <div class="rounded w-25 h-25 bg-secondary"></div>
          <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
          <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
          <div class="rounded ml-1 w-25 h-25 bg-secondary"></div>
          <button type="button" class="btn btn-secondary h-25 ml-1">></button>
        </div>
      </div>
    </section>

  </main>

  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>