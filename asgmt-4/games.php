<?php
require_once './utils/json-utils.php';

$games = readJSON('./data/games.json');

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

if (isset($_GET['id'])) {
    $game = $games[$_GET['id']];
    $title = $game['name'];
}
