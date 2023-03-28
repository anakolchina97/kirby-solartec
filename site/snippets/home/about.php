<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container about px-lg-0">
      <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
              <div class="position-relative h-100">
                  <img class="position-absolute img-fluid w-100 h-100" src="<?= $children->find('about')->images() ?>" style="object-fit: cover;" alt="">
              </div>
          </div>
          <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
              <div class="p-lg-5 pe-lg-0">
                  <h6 class="text-primary"><?= $children->find('about')->subtitle() ?></h6>
                  <h1 class="mb-4"><?= $children->find('about')->titletext() ?></h1>
                  <p><?= $children->find('about')->text() ?></p>
                  <p><i class="fa fa-check-circle text-primary me-3"></i>Diam dolor diam ipsum</p>
                  <p><i class="fa fa-check-circle text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                  <p><i class="fa fa-check-circle text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                  <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
              </div>
          </div>
      </div>
  </div>
</div>