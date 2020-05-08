<?php

require_once './utils/json-utils.php';
require_once 'reviews.php';

if (isset($user) && ($user && $owned)) {
  if (!isset($review)) {
    $review = getReview($reviews, $user);
  }

  if ($_POST != null) {
    if (isset($_POST['editReview']) && (!isset($_POST['rating']) || !isset($_POST['review-body']))) {
      require 'review-edit-container.php';

    } elseif (isset($_POST['editReview']) && (isset($_POST['rating']) && isset($_POST['review-body'])) && isset($review)) {
      if (isset($_POST['comments-allow'])) {
        $commentsAllow = $_POST['comments-allow'];
      } else {
        $commentsAllow = false;
      }

      $editReview = [
        'user' => $user,
        'raiting' => filter_var($_POST['rating'], FILTER_VALIDATE_BOOLEAN),
        'commentsAllowed' => filter_var($commentsAllow, FILTER_VALIDATE_BOOLEAN),
        'date' => getdate(),
        'reviewBody' => htmlspecialchars($_POST['review-body']),
      ];
      modifyJSON($reviewFile, getReviewIndex($reviews, $user), $editReview);
      $review = $editReview;
      unset($_POST['editReview']);

    } elseif (isset($_POST['deleteReview']) && isset($review)) {
      deleteJSON($reviewFile, getReviewIndex($reviews, $user));
      unset($review);

    } elseif (getReviewIndex($reviews, $user) == null && (isset($_POST['rating']) && isset($_POST['review-body']))) {
      if (isset($_POST['comments-allow'])) {
        $commentsAllow = $_POST['comments-allow'];
      } else {
        $commentsAllow = false;
      }

      $newReview = [
        'user' => $user,
        'raiting' => filter_var($_POST['rating'], FILTER_VALIDATE_BOOLEAN),
        'commentsAllowed' => filter_var($commentsAllow, FILTER_VALIDATE_BOOLEAN),
        'date' => getdate(),
        'reviewBody' => htmlspecialchars($_POST['review-body']),
      ];
      writeJSON($reviewFile, $newReview);
      $review = $newReview;

    }
  }

  if (!isset($review)) {
    require 'review-write-container.php';
  } elseif (isset($review['user']) && $review['user'] == $user && !isset($_POST['editReview'])) {
    require 'review-show-container.php';
  }
}