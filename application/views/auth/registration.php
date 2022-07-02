<div class="container">
  <div class="card my-5">
    <?=form_open_multipart('auth/registration');?>
    <div class="card-header">
      Registration Form
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" name="name" value="<?=set_value('name')?>">
        <?=form_error('name', '<small class="text-danger pl-3">', '</small>');?>
      </div>
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
      <div class="mb-3">
        <label for="repassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="repassword" name="repassword">
        <?=form_error('repassword', '<small class="text-danger pl-3">', '</small>');?>
      </div>
      <div class="row">
        <div class="col-7">
          <div class="mb-3">
            <label for="inputPhoto" class="form-label">Photo Profil</label>
            <input type="file" class="form-control" name="image" id="inputPhoto" accept="image/jpeg, image/jpg">
            <small class="text-danger pl-3">*<span class="text-dark">Max size 10 Mb</span></small>
            <small class="text-danger pl-3"><?=$error?></small>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
          <h6 class="mt-3">Have an account? <a href="<?= base_url('auth')?>">Login</a></h6>
        </div>
        <div class="col-5">
          <img src="#" class="img-fluid d-none" alt="Photo Profil" id="photoView" height="70%" width="70%">
        </div>
      </div>
    </div>
    </form>
  </div>
</div>