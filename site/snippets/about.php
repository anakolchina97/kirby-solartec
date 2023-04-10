<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container about px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="<?= $site->find('snippets')->find('about')->images() ?>" style="object-fit: cover;" alt="">
        </div>
      </div>
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <h6 class="text-primary"><?= $site->find('snippets')->find('about')->subtitle() ?></h6>
          <h1 class="mb-4"><?= $site->find('snippets')->find('about')->titletext() ?></h1>
          <p><?= $site->find('snippets')->find('about')->text() ?></p>
          <?php foreach ($site->find('snippets')->find('about')->list() as $list) : ?>
            <?= $list ?>
          <?php endforeach ?>
          <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</div>