<section class="review_container card mb-3 d-flex flex-column justify-content-between">
  <form method="post" action="<?= $_SERVER['PHP_SELF'].'?id='.$_GET['id'] ?>" onsubmit="0">
  <div class="card-header d-flex flex-row justify-content-between">
    <h4 class="pt-1">You reviewed this game on <?= $review['date']['month'].' '.$review['date']['mday'].', '.$review['date']['year']?></h4>
    <!-- <h6 class="text-muted"><?= $review['helpful'] ?> people found it helpful</h6> -->
    <button class="btn btn-primary my-2 my-sm-0" type="submit" name="editReview" value="true">Edit Review</button>
  </div>
  </form>
  <div class="pl-3 pr-3">
    <div class="d-flex flex-row justify-content-between">
      <div class="d-inline-flex flex-row pt-4 pb-1">
          <?php if ($review['raiting']) : ?>
            <span class="badge badge-success"><i class="fas fa-thumbs-up h4 m-1"></i></span>
          <?php else : ?>
            <span class="badge badge-danger"><i class="fas fa-thumbs-down h4 m-1"></i></span>
          <?php endif ?>
        <h4 class="ml-2 mt-1">
          <?php 
            if ($review['raiting']) { 
              echo 'Recomended'; 
            } else {
              echo 'Not Recomended'; 
            }
          ?>
        </h4>
      </div>
      <div class="d-flex flex-column align-items-end">
        <div class="bg-secondary mt-2" style="width: 32px; height: 32px"></div>
        <h5 class="pt-1 mb-0"><?= $review['user'] ?></h5>
      </div>
    </div>
    <hr class="p-0 m-2">
    <div class="pl-1 pr-1">
      <p class="text-muted mt-1 mb-1 font-weight-bold small">POSTED: <?= $review['date']['month'].' '.$review['date']['mday'].', '.$review['date']['year']?></p>
      <p><?= $review['reviewBody'] ?></p>
    </div>
  </div>
</section>