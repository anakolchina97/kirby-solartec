<?php
return function ($page) {
  $children = $page->children();
  return [
    'children' => $children,
  ];
};
