<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h6 class="text-primary"><?= $site->find('snippets')->find('services')->subtitle() ?></h6>
      <h1 class="mb-4"><?= $site->find('snippets')->find('services')->titleText() ?></h1>
    </div>
    <div class="row g-4">
      <?php if ($page->services()->isEmpty()) : ?>
        <?php foreach ($site->find('snippets')->find('services')->children() as $service) : ?>
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?= $service->delay() ?>">
            <div class="service-item rounded overflow-hidden">
              <img class="img-fluid" src="<?= $service->images() ?>" alt="<?= image($service->images())->alt() ?>">
              <div class="position-relative p-4 pt-0">
                <div class="service-icon">
                  <i class="<?= $service->icon() ?>"></i>
                </div>
                <h4 class="mb-3"><?= $service->titleText() ?></h4>
                <p><?= $service->text() ?></p>
                <a class="small fw-medium" href="<?= $service->link() ?>" target="_blank">Read More<i class="fa fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php else : ?>
        <?php foreach ($page->services()->toStructure() as $service) : ?>
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?= $service->delay() ?>">
            <div class="service-item rounded overflow-hidden">
              <img class="img-fluid" src="<?= $service->img() ?>" alt="">
              <div class="position-relative p-4 pt-0">
                <div class="service-icon">
                  <i class="<?= $service->icon() ?>"></i>
                </div>
                <h4 class="mb-3"><?= $service->titleText() ?></h4>
                <p><?= $service->text() ?></p>
                <a class="small fw-medium" href="<?= $service->link() ?>" target="_blank">Read More<i class="fa fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
</div>