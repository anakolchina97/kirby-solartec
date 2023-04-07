<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h6 class="text-primary"><?= $site->find('snippets')->find('testimonial')->subtitle() ?></h6>
      <h1 class="mb-4"><?= $site->find('snippets')->find('testimonial')->titleText() ?></h1>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
      <?php foreach ($site->find('snippets')->find('testimonial')->children() as $testimonial) : ?>
        <div class="testimonial-item text-center">
          <div class="testimonial-img position-relative">
            <img class="img-fluid rounded-circle mx-auto mb-5" src="<?= $testimonial->images() ?>">
            <div class="btn-square bg-primary rounded-circle">
              <i class="fa fa-quote-left text-white"></i>
            </div>
          </div>
          <div class="testimonial-text text-center rounded p-4">
            <p><?= $testimonial->text() ?></p>
            <h5 class="mb-1"><?= $testimonial->name() ?></h5>
            <span class="fst-italic"><?= $testimonial->position() ?></span>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>