<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Excellence</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('excellence'); ?>">List Data</a></li>
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
						<form action="<?php base_url('excellence/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group row">
								<label for="judul" class="col-sm-2 col-form-label">Judul*</label>
								<div class="col-sm-10">
									<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul" placeholder="Judul" />
									<small class="invalid-feedback">
										<?php echo form_error('judul') ?>
									</small>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi*</label>
								<div class="col-sm-10">
									<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi..."></textarea>
									<small class="invalid-feedback">
										<?php echo form_error('deskripsi') ?>
									</small>
								</div>
							</div>

							<div class="form-group row">
								<label for="icon" class="col-sm-2 col-form-label">Icon</label>
								<div class="col-sm-10">
									<input class="form-control-file <?php echo form_error('icon') ? 'is-invalid':'' ?>" type="file" name="icon" />
									<small class="invalid-feedback">
										<?php echo form_error('icon') ?>
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

					<div class="card-footer small text-muted">
						* required fields
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
