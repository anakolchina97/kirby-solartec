<form action="<?= $page->url() ?>" method="POST">
  <div class="row g-3">
    <div class="col-12 col-sm-6">
      <input type="text" class="form-control border-0" placeholder="Your Name" name="name" style="height: 55px;">
    </div>
    <div class="col-12 col-sm-6">
      <input type="email" class="form-control border-0" placeholder="Your Email" name="email" style="height: 55px;">
    </div>
    <div class="col-12 col-sm-6">
      <input type="text" class="form-control border-0" placeholder="Your Mobile" name="mobile" style="height: 55px;">
    </div>
    <div class="col-12 col-sm-6">
      <select class="form-select border-0" style="height: 55px;" name="service">
        <option selected>Select A Service</option>
        <option value="1">Service 1</option>
        <option value="2">Service 2</option>
        <option value="3">Service 3</option>
      </select>
    </div>
    <div class="col-12">
      <textarea class="form-control border-0" placeholder="Special Note" name="note"></textarea>
    </div>
    <div class="col-12">
      <input class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="register" value="Submit" />
    </div>
  </div>
</form>