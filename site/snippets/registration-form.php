<form class="registration-form" action="<?= $page->url() ?>" method="POST">

  <div class="form-element">
    <label for="name">Name <abbr title="required">*</abbr></label>
    <input type="text" id="name" name="name" value="<?= $data['name'] ?? null ?>" required />
  </div>

  <div class="form-element">
    <label for="company">Company</label>
    <input type="text" id="company" name="company" value="<?= $data['company'] ?? null ?>" />
  </div>

  <div class="form-element">
    <label for="email">Email <abbr title="required">*</abbr></label>
    <input type="email" name="email" id="email" value="<?= $data['email'] ?? null ?>" required />
  </div>

  <div class="form-element">
    <label for="message">Message</label>
    <textarea name="message" id="message"><?= $data['message'] ?? null ?></textarea>
  </div>

  <div class="honey">
    <label for="website">If you are a human, leave this field empty</label>
    <input type="website" name="website" id="website" value="<?= isset($data['website']) ? esc($data['website']) : null ?>" />
  </div>

  <input class="registration-button" type="submit" name="register" value="Register" />

</form>