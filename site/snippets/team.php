<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h6 class="text-primary"><?= $site->find('snippets')->find('teams')->subtitle() ?></h6>
      <h1 class="mb-4"><?= $site->find('snippets')->find('teams')->titleText() ?></h1>
    </div>
    <div class="row g-4">
      <?php $index = 0;
      foreach ($site->find('snippets')->find('teams')->children() as $team) : $index++; ?>
        <?php
        if ($kirby->path() === '' and $index > 3) {
          continue;
        }
        ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item rounded overflow-hidden">
            <div class="d-flex">
              <img class="img-fluid w-75" src="<?= $team->images() ?>" alt="<?= image($team->images())->alt() ?>">
              <div class="team-social w-25">
                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="<?= $team->facebook() ?>"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="<?= $team->twitter() ?>"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="<?= $team->instagram() ?>"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="p-4">
              <h5><?= $team->name() ?></h5>
              <span><?= $team->position() ?></span>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>