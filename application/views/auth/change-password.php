<div class="container">
  <form class="card my-5" method="POST" action="<?= base_url('auth/changePassword')?>">
    <div class="card-header">
      Change your password for <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
    </div>
    <div class="card-body">
      <?= $this->session->flashdata('message'); ?>
      <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <?=form_error('password', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <div class="mb-3">
        <label for="repassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="repassword" name="repassword">
        <?=form_error('repassword', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Reset</button>
    </div>
  </form>
</div>