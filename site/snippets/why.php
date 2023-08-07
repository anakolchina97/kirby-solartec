<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container feature px-lg-0">
    <?php if ($page->why()->isEmpty()) : ?>
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="p-lg-5 ps-lg-0">
            <h6 class="text-primary"><?= $site->find('snippets')->find('why')->subtitle() ?></h6>
            <h1 class="mb-4"><?= $site->find('snippets')->find('why')->titleText() ?></h1>
            <p class="mb-4 pb-2"><?= $site->find('snippets')->find('why')->text() ?></p>
            <div class="row g-4">
              <?php foreach ($site->find('snippets')->find('why')->children() as $why) : ?>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle">
                      <i class="fa <?= $why->icon() ?> text-white"></i>
                    </div>
                    <div class="ms-4">
                      <p class="mb-0"><?= $why->subtitle() ?></p>
                      <h5 class="mb-0"><?= $why->titleText() ?></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="position-absolute img-fluid w-100 h-100" src="<?= $site->find('snippets')->find('why')->images() ?>" style="object-fit: cover;" alt="<?= image($site->find('snippets')->find('why')->images())->alt() ?>">
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="p-lg-5 ps-lg-0">
            <h6 class="text-primary"><?= $site->find('snippets')->find('why')->subtitle() ?></h6>
            <h1 class="mb-4"><?= $site->find('snippets')->find('why')->titleText() ?></h1>
            <p class="mb-4 pb-2"><?= $site->find('snippets')->find('why')->text() ?></p>
            <div class="row g-4">
              <?php foreach ($site->find('snippets')->find('why')->children() as $why) : ?>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle">
                      <i class="fa <?= $why->icon() ?> text-white"></i>
                    </div>
                    <div class="ms-4">
                      <p class="mb-0"><?= $why->subtitle() ?></p>
                      <h5 class="mb-0"><?= $why->titleText() ?></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="position-absolute img-fluid w-100 h-100" src="<?= $site->find('snippets')->find('why')->images() ?>" style="object-fit: cover;" alt="<?= image($site->find('snippets')->find('why')->images())->alt() ?>">
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>