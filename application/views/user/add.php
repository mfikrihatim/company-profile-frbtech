<div class="content-wrapper">
<div class="container py-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>User</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('user'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">
					<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
					<!-- <a class="btn btn-secondary" href="">Kembali</a> -->
				</div>
                <div class="card-body">
					<form action="<?php base_url('user/add') ?>" method="post" enctype="multipart/form-data" >
                    
					<div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
							<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="username" />
							<small class="invalid-feedback">
								<?php echo form_error('username') ?>
							</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
							<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="text" name="password" placeholder="password" />
							<small class="invalid-feedback">
								<?php echo form_error('password') ?>
							</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status_id" class="col-sm-2 col-form-label">Status Id</label>
                        <div class="col-sm-10">
							<select class="form-control <?php echo form_error('status_id') ? 'is-invalid':'' ?>" id="status_id" name="status_id">
								<option value="" selected disabled>Pilih</option>
								<option value="0">0</option>
								<option value="1">1</option>
							</select>
							<small class="invalid-feedback">
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
