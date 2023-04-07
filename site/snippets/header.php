 <div class="container-fluid page-header py-5 mb-5">
   <div class="container py-5">
     <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $page->title() ?></h1>
     <nav aria-label="breadcrumb animated slideInDown">
       <ol class="breadcrumb">
         <?php foreach ($site->breadcrumb() as $crumb) : ?>
           <li class="breadcrumb-item <?= e($crumb->isActive(), 'text-white active"') ?>">
             <a class="text-white" href="<?= $crumb->url() ?>">
               <?= html($crumb->title()) ?>
             </a>
           </li>
         <?php endforeach ?>
       </ol>
     </nav>
   </div>
 </div>