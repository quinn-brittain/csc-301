<section class="review_container card p-3 mb-3 d-flex flex-column justify-content-between">
  <h4>How do you like <?= $game['title'] ?>?</h4>
  <h6 class="text-muted">Write a Review</h6>
  <form class="d-flex flex-column" method="post" action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id'] ?>">
    <textarea class="mb-3 p-2 bg-secondary border-0 text-white rounded" name='body' maxlength="8000"></textarea>
    <div class="mb-2 d-flex flex-row justify-content-between">
      <div class="form-check mt-t">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name='comments' value='true' checked>Allow Comments?
        </label>
      </div>
      <h6 class="mt-1">Would you recommend this game?</h6>
    </div>
    <div class="d-flex flex-row justify-content-between">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Post Review</button>
      <div class="d-flex flex-row">
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label class="btn btn-outline-success rounded mr-3">
            <input type="radio" name="rating" id="yes" value="true" autocomplete="off"><i class="fas fa-thumbs-up mr-2"></i>Yes
          </label>
          <label class="btn btn-outline-danger rounded">
            <input type="radio" name="rating" id="no" value="false" autocomplete="off"><i class="fas fa-thumbs-down mr-2"></i>No
          </label>
        </div>
      </div>
    </div>
  </form>
</section>