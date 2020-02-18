<?php

require_once './utils/json-utils.php';
require_once 'games.php';

$dataDir = "./data/games/$game[name]";

if (file_exists("$dataDir/reviews.json")) {
  $reviews = readJSON("$dataDir/reviews.json");
} else if (file_exists("$dataDir")) {
  writeAllJSON("$dataDir/reviews.json", null);
  $reviews = readJSON("$dataDir/reviews.json");
} else {
  mkdir("$dataDir", 0777, true);
  writeAllJSON("$dataDir/reviews.json", null);
  $reviews = readJSON("$dataDir/reviews.json");
}
