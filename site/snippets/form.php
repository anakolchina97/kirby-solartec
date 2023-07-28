<form action="<?= $page->url() ?>" method="POST">
  <div class="row g-3">
    <div class="col-md-6">
      <div class="form-floating">
        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
        <label for="name">Your Name</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
        <label for="email">Your Email</label>
      </div>
    </div>
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control" id="subject" name="subjects" placeholder="Subject">
        <label for="subject">Subject</label>
      </div>
    </div>
    <div class="col-12">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
        <label for="message">Message</label>
      </div>
    </div>
    <div class="col-12">
      <input class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="register" value="Send Message" />
    </div>
  </div>
</form>