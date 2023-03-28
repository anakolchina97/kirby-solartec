<?php
  return function ($page) {
    $related = $page->related()->toPages();

    return [
      'related' => $related,
    ];
  }
?>
