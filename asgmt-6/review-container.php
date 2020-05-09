<?php

require_once './utils/Utils.php';
require_once 'reviews.php';
require_once 'Review.php';

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

      $editReview = new Review($user, $_POST['rating'], $commentsAllow, $_POST['review-body']);
      Utils::modifyJSON($reviewFile, getReviewIndex($reviews, $user), $editReview->getArray());
      $review = $editReview->getArray();
      unset($_POST['editReview']);

    } elseif (isset($_POST['deleteReview']) && isset($review)) {
      Utils::deleteJSON($reviewFile, getReviewIndex($reviews, $user));
      unset($review);

    } elseif (getReviewIndex($reviews, $user) == null && (isset($_POST['rating']) && isset($_POST['review-body']))) {
      if (isset($_POST['comments-allow'])) {
        $commentsAllow = $_POST['comments-allow'];
      } else {
        $commentsAllow = false;
      }

      $newReview = new Review($user, $_POST['rating'], $commentsAllow, $_POST['review-body']);

      Utils::writeJSON($reviewFile, $newReview->getArray());
      $review = $newReview->getArray();

    }
  }

  if (!isset($review)) {
    require 'review-write-container.php';
  } elseif (isset($review['user']) && $review['user'] == $user && !isset($_POST['editReview'])) {
    require 'review-show-container.php';
  }
}