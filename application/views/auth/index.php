<div class="container">
  <form class="card my-5" method="POST" action="<?= base_url('auth')?>">
    <div class="card-header">
      Login Form
    </div>
    <div class="card-body">
      <?= $this->session->flashdata('message'); ?>
      <div class="mb-3">
        <label for="Email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?=set_value('email')?>">
        <?=form_error('email', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <?=form_error('password', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <h6><a href="<?= base_url('auth/forgotPassword')?>">Forgot Password?</a></h6>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
      <h6 class="mt-3">Don't have an account? <a href="<?= base_url('auth/registration')?>">Create account</a></h6>
    </div>
  </form>
</div>