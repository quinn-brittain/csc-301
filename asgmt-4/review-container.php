<?php

require_once './utils/json-utils.php';
require_once 'reviews.php';

if ($user && $owned) {
  if ($_POST != null) {
    echo 'Posted';
    if (isset($_POST['rating']) && isset($_POST['review-body'])) {
      if (isset($_POST['comments-allow'])) {
        $commentsAllow = $_POST['comments-allow'];
      } else {
        $commentsAllow = false;
      }

      $newReview = [
        'user' => $user,
        'raiting' => $_POST['rating'],
        'commentsAllowed' => $commentsAllow,
        'reviewBody' => htmlspecialchars($_POST['review-body']),
      ];
      writeJSON($reviewFile, $newReview);
    }
  }

  if (!isset($review)) {
    $review = getReview($reviews, $user);
  }

  if (!(isset($review))) {
    require 'review-write-container.php';
  } else if (isset($reviews['user']) && $reviews['user'] == $user) {
    require 'review-edit-container.php';
  }
}