<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container about px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="
            <?php if ($page->aboutFiles()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('about')->images() ?>
            <?php else : ?>
              <?= $page->images() ?>
            <?php endif ?>
          " style="object-fit: cover;" alt="">
        </div>
      </div>
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <h6 class="text-primary">
            <?php if ($page->aboutSubtitle()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('about')->subtitle() ?>
            <?php else : ?>
              <?= $page->aboutSubtitle() ?>
            <?php endif ?>
          </h6>
          <h1 class="mb-4">
            <?php if ($page->aboutTitle()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('about')->titleText() ?>
            <?php else : ?>
              <?= $page->aboutTitle() ?>
            <?php endif ?>
          </h1>
          <p>
            <?php if ($page->aboutText()->isEmpty()) : ?>
              <?= $site->find('snippets')->find('about')->text() ?>
            <?php else : ?>
              <?= $page->aboutText() ?>
            <?php endif ?>
          </p>
          <?php if ($page->aboutList()->isEmpty()) : ?>
            <?php foreach ($site->find('snippets')->find('about')->list() as $list) : ?>
              <?= $list ?>
            <?php endforeach ?>
          <?php else : ?>
            <?php foreach ($page->aboutList() as $list) : ?>
              <?= $list ?>
            <?php endforeach ?>
          <?php endif ?>
          <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</div>