<div class="container-fluid bg-dark p-0">
  <div class="row gx-0 d-none d-lg-flex">
    <div class="col-lg-7 px-5 text-start">
      <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="fa fa-map-marker-alt text-primary me-2"></small>
        <small><?= $site->find('snippets')->find('topbar')->address() ?></small>
      </div>
      <div class="h-100 d-inline-flex align-items-center">
        <small class="far fa-clock text-primary me-2"></small>
        <small><?= $site->find('snippets')->find('topbar')->schedule() ?></small>
      </div>
    </div>
    <div class="col-lg-5 px-5 text-end">
      <div class="h-100 d-inline-flex align-items-center me-4">
        <small class="fa fa-phone-alt text-primary me-2"></small>
        <small><?= $site->find('snippets')->find('topbar')->phone() ?></small>
      </div>
      <div class="h-100 d-inline-flex align-items-center mx-n2">
        <?php
        $numItems = count($site->find('snippets')->find('topbar')->children());
        $i = 0;
        ?>

        <?php foreach ($site->find('snippets')->find('topbar')->children() as $topbar) : ?>
          <a class="btn btn-square btn-link rounded-0 <?php echo ++$i !== $numItems ? 'border-0 border-end border-secondary' : ''; ?>" href="<?= $topbar->link() ?>"><i class="<?= $topbar->icon() ?>"></i></a>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>