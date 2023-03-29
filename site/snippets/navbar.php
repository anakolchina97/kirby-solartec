<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
    <h2 class="m-0 text-primary">Solartec</h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <?php foreach ($site->children()->listed() as $item): ?>
        <a href="<?= $item->url() ?>" class="nav-item nav-link <?php e($item->isActive(), ' active') ?> ">
          <?= $item->title() ?>
        </a>
      <?php endforeach; ?>
      <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
          <div class="dropdown-menu bg-light m-0">
            <?php foreach ($site->children()->find('dropdown')->children()->listed() as $item): ?>
              <a href="<?= $item->url() ?>" class="dropdown-item <?php e($item->isActive(), ' active') ?>">
                <?= $item->title() ?>
              </a>
            <?php endforeach; ?>
          </div>
      </div>
      <?php foreach ($site->children()->find('aftermenu')->children()->listed() as $item): ?>
        <a href="<?= $item->url() ?>" class="nav-item nav-link <?php e($item->isActive(), ' active') ?>"><?= $item->title() ?></a>
      <?php endforeach; ?>
    </div>
    <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
  </div>
</nav>