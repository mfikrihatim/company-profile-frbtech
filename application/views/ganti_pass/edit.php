<div class="content-wrapper">
<div class="container py-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Ganti Password</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('ganti_pass'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">
					<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
                <div class="card-body">
					<form action="<?php base_url("ganti_pass/edit") ?>" method="post" enctype="multipart/form-data" >
					<input type="hidden" name="id" value="<?php echo $data_user->id?>" />
                    
					<div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="username" value="<?php echo $data_user->username ?>" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('username') ?>
							</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password lama</label>
                        <div class="col-sm-10">
							<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="text" name="password_lama" placeholder="password lama" value="<?php echo $data_user->password ?>" readonly/>
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
                        </div>
                    </div>

					<div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password baru</label>
                        <div class="col-sm-10">
							<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="text" name="password" placeholder="password" />
							<div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
                        </div>
                    </div>

					<div class="form-group row">
                        <label for="status_id" class="col-sm-2 col-form-label">status_id</label>
                        <div class="col-sm-10">
							<input class="form-control <?php echo form_error('status_id') ? 'is-invalid':'' ?>" type="text" name="status_id" placeholder="status_id" value="<?php echo $data_user->status_id ?>" readonly/>
							
							<small class="text-danger">
								<?php echo form_error('status_id') ?>
							</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>	
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
