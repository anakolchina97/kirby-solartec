<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="owl-carousel header-carousel position-relative">
    <?php foreach ($children->find('slider')->images() as $image) : ?>
      <div class="owl-carousel-item position-relative" data-dot="<img src='<?= $image->url() ?>'>">
        <img class="img-fluid" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        <div class="owl-carousel-inner">
          <div class="container">
            <div class="row justify-content-start">
              <div class="col-10 col-lg-8">
                <h1 class="display-2 text-white animated slideInDown">
                  <?= $image->title()->or('Empty title') ?>
                </h1>
                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                  <?= $image->text()->or('Empty text') ?>
                </p>
                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>