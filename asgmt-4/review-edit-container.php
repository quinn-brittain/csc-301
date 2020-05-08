<section class="review_container card p-3 mb-3 d-flex flex-column justify-content-between">
  <h4>How do you like <?= $game['title'] ?>?</h4>
  <h6 class="text-muted">Edit Your Review</h6>
  <form class="d-flex flex-column" method="post" action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id'] ?>" onsubmit="0">
    <textarea required class="mb-3 p-2 bg-secondary border-0 text-white rounded" name='review-body' maxlength="8000"><?= $review['reviewBody'] ?></textarea>
    <div class="mb-2 d-flex flex-row justify-content-between">
      <div class="form-check mt-t">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name='comments-allow' value='true' <?php if ($review['commentsAllowed']) { echo 'checked'; } ?>>Allow Comments?
        </label>
      </div>
      <h6 class="mt-1">Would you recommend this game?</h6>
    </div>
    <div class="d-flex flex-row justify-content-between">
      <div class="d-flex flex-row justify-content-between">
        <button class="btn btn-primary my-2 my-sm-0" type="submit" name="editReview" value="true">Update Review</button>
        <form method="post" action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id'] ?>" onsubmit="0">
          <button class="btn btn-primary my-2 my-sm-0 ml-3 btn-danger" type="submit" name="deleteReview" value="true" onclick="return confirm('Are you sure you want to delete this review?')">Delete Review</button>
        </form>
      </div>
      <div class="d-flex flex-row">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-outline-success rounded mr-3 <?php if ($review['raiting']) { echo 'active'; } ?>">
            <input required type="radio" name="rating" id="yes" value="true" autocomplete="off" <?php if ($review['raiting']) { echo 'checked'; } ?>><i class="fas fa-thumbs-up mr-2"></i>Yes
          </label>
          <label class="btn btn-outline-danger rounded <?php if (!$review['raiting']) { echo 'active'; } ?>">
            <input required type="radio" name="rating" id="no" value="false" autocomplete="off" <?php if (!$review['raiting']) { echo 'checked'; } ?>><i class="fas fa-thumbs-down mr-2"></i>No
          </label>
        </div>
      </div>
    </div>
  </form>
</section>