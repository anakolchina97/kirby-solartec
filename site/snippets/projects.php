<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h6 class="text-primary"><?= $site->find('snippets')->find('projects')->subtitle() ?></h6>
      <h1 class="mb-4"><?= $site->find('snippets')->find('projects')->titleText() ?></h1>
    </div>
    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-12 text-center">
        <ul class="list-inline mb-5" id="portfolio-flters">
          <li class="mx-2 active" data-filter="*">All</li>
          <li class="mx-2" data-filter=".first">Solar Panels</li>
          <li class="mx-2" data-filter=".second">Wind Turbines</li>
          <li class="mx-2" data-filter=".third">Hydropower Plants</li>
        </ul>
      </div>
    </div>
    <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
      <?php foreach ($site->find('snippets')->find('projects')->children() as $project) : ?>
        <div class="col-lg-4 col-md-6 portfolio-item <?= $project->category() ?>">
          <div class="portfolio-img rounded overflow-hidden">
            <img class="img-fluid" src="<?= $project->images() ?>" alt="<?= image($project->images())->alt() ?>">
            <div class="portfolio-btn">
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="<?= $project->images() ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
              <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="/"><i class="fa fa-link"></i></a>
            </div>
          </div>
          <div class="pt-3">
            <p class="text-primary mb-0"><?= $project->titleText() ?></p>
            <hr class="text-primary w-25 my-2">
            <h5 class="lh-base"><?= $project->text() ?></h5>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>