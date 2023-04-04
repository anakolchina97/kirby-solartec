<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <?php foreach ($site->find('snippets')->find('features')->children() as $feature) : ?>
        <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="<?= $feature->delay() ?>">
          <div class="d-flex align-items-center mb-4">
            <div class="btn-lg-square bg-primary rounded-circle me-3">
              <i class="<?= $feature->icon() ?>"></i>
            </div>
            <h1 class="mb-0" data-toggle="counter-up">
              <?= $feature->count() ?>
            </h1>
          </div>
          <h5 class="mb-3"><?= $feature->titlecard() ?></h5>
          <span><?= $feature->text() ?></span>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>