<?php

require_once './utils/Utils.php';
require_once 'games.php';

$reviewFile = "$dataDir/reviews.json";

if (file_exists($reviewFile)) {
  $reviews = Utils::readJSON($reviewFile);
} else if (file_exists("$dataDir")) {
  Utils::writeAllJSON($reviewFile, []);
  $reviews = Utils::readJSON($reviewFile);
} else {
  mkdir("$dataDir", 0777, true);
  Utils::writeAllJSON($reviewFile, []);
  $reviews = Utils::readJSON($reviewFile);
}

if ($reviews == null) {
  $reviews = [];
}

function getReview($reviews, $user) {
  foreach ($reviews as &$review) {
    if ($review['user'] == $user) {
      return $review;
    }
  }
}

function getReviewIndex($reviews, $user) {
  $index = 0;
  foreach ($reviews as &$review) {
    if ($review['user'] == $user) {
      return $index;
    }
    $index++;
  }
  return null;
}