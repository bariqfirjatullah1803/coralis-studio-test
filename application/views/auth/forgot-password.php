<div class="container">
  <form class="card my-5" method="POST" action="<?= base_url('auth/forgotPassword')?>">
    <div class="card-header">
      Forgot Your Password
    </div>
    <div class="card-body">
      <?= $this->session->flashdata('message'); ?>
      <div class="mb-3">
        <label for="Email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?=set_value('email')?>">
        <?=form_error('email', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
      <h6 class="mt-3"><a href="<?= base_url('auth/')?>">Back to Login</a></h6>
    </div>
  </form>
</div>