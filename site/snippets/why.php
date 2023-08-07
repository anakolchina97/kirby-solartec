<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container feature px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="p-lg-5 ps-lg-0">
          <h6 class="text-primary">
            <?php if ($page->whySubtitle()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('why')->subtitle() ?>
            <?php else : ?>
              <?= $page->whySubtitle() ?>
            <?php endif ?>
          </h6>
          <h1 class="mb-4">
            <?php if ($page->whyTitle()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('why')->titleText() ?>
            <?php else : ?>
              <?= $page->whyTitle() ?>
            <?php endif ?>
          </h1>
          <p class="mb-4 pb-2">
            <?php if ($page->whyText()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('why')->text() ?>
            <?php else : ?>
              <?= $page->whyText() ?>
            <?php endif ?>
          </p>
          <div class="row g-4">
            <?php if ($page->whyItems()->isEmpty()) : ?>
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
            <?php else : ?>
              <?php foreach ($page->whyItems()->toStructure() as $item) : ?>
                <div class="col-6">
                  <div class="d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle">
                      <i class="fa <?= $item->whyItemIcon() ?> text-white"></i>
                    </div>
                    <div class="ms-4">
                      <p class="mb-0"><?= $item->whyItemSubtitle() ?></p>
                      <h5 class="mb-0"><?= $item->whyItemTitle() ?></h5>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php endif ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <?php if ($page->whyFiles()->isEmpty()) : ?>
            <img class="position-absolute img-fluid w-100 h-100" src="<?= $site->find('snippets')->find('why')->images() ?>" style="object-fit: cover;" alt="<?= image($site->find('snippets')->find('why')->images())->alt() ?>">
          <?php else : ?>
            <?php if ($image = $page->Whyfiles()->toFile()) : ?>
              <img class="position-absolute img-fluid w-100 h-100" style="object-fit: cover;" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</div>