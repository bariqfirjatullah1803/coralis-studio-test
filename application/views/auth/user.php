<div class="container">
  <div class="card my-5 mx-auto w-auto">
    <div class="card-header">
      My Profile <a class="btn btn-danger btn-sm mx-1" href="<?= base_url('auth/logout')?>">Logout</a>
    </div>
    <div class="card-body">
    <?= $this->session->flashdata('message'); ?>
      <?= form_open_multipart('user');?>
      <div class="row">
        <div class="col-6 text-center py-5">
          <img id="photoView" src="<?=base_url('uploads/') . $user['image']?>" class="rounded-circle"
            alt="<?=$user['image']?>" style="width:300px;height:300px;object-fit:cover">
        </div>
        <div class="col-6 py-5">
          <div class="mb-3">
            <label for="email" class="form-label text-start">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$user['email']?>" disabled>
            <?=form_error('email', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label text-start">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="name" value="<?=$user['name']?>">
            <?=form_error('name', '<small class="text-danger pl-3">', '</small>');?>
          </div>
          <div class="mb-3">
            <label for="inputPhoto" class="form-label">Photo Profil</label>
            <input type="file" class="form-control" name="image" id="inputPhoto" accept="image/jpeg, image/jpg">
            <small class="text-danger pl-3">*<span class="text-dark">Max size 10 Mb</span></small>
            <small class="text-danger pl-3"><?=$error?></small>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>