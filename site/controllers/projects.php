<?php

return function ($kirby, $page) {


  // if the form has been submitted…
  if ($kirby->request()->is('POST') && get('register')) {

    // check the honeypot and exit if is has been filled in
    if (empty(get('website')) === false) {
      go($page->url());
      exit;
    }

    $data = [
      'name'    => get('name'),
      'email' => get('email'),
      'mobile' => get('mobile'),
      'note'   => get('note'),
    ];

    $rules = [
      'name'  => ['required'],
      'email' => ['required', 'email'],
    ];

    $messages = [
      'name'  => 'Please enter your <a href="#name">name</a>',
      'email' => 'Please enter a valid <a href="#email">email address</a>',
    ];

    // some of the data is invalid
    if ($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    } else {

      // authenticate as almighty
      $kirby->impersonate('kirby');

      // everything is ok, let's try to create a new registration
      try {
        // we store registrations as subpages of the current page
        $registration = $page->createChild([
          'slug'     => md5(str::slug($data['name'] . microtime())),
          'template' => 'registration',
          'content'  => $data
        ]);

        if ($registration) {
          // store referer and name in session
          $kirby->session()->set([
            'referer' => $page->uri(),
            'regName'  => esc($data['name'])
          ]);
          // go('success');
        }
      } catch (Exception $e) {
        $alert = ['Your registration failed: ' . $e->getMessage()];
      }
    }
  }

  // return data to template
  return [
    'alert' => $alert ?? null,
    'data'  => $data ?? false,
  ];
};
