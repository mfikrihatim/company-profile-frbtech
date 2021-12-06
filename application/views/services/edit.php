<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Services</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('services'); ?>">List Data</a></li>
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
					<form action="<?php base_url("services/edit") ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $data_services->id?>" />

							<div class="form-group row">
								<label for="judul" class="col-sm-2 col-form-label">Judul*</label>
								<div class="col-sm-10">
									<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul" placeholder="judul" value="<?php echo $data_services->judul ?>" />
									<small class="invalid-feedback">
										<?php echo form_error('judul') ?>
									</small>
								</div>
							</div>
							<div class="form-group row">
								<label for="name" class="col-sm-2 col-form-label">deskripsi*</label>
								<div class="col-sm-10">	
									<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi..."><?php echo $data_services->deskripsi ?></textarea>
									<small class="invalid-feedback">
										<?php echo form_error('deskripsi') ?>
									</small>
								</div>
							</div>
							<div class="form-group row">
								<label for="icon" class="col-sm-2 col-form-label">icon</label>
								<div class="col-sm-10">
									<input class="form-control-file <?php echo form_error('icon') ? 'is-invalid':'' ?>" type="file" name="icon" />
									<input type="hidden" name="icon_lama" value="<?php echo $data_services->icon ?>" />
									<img src="<?php echo site_url() . "upload/services/"   . $data_services->icon ?>" width="100" height="100">
									<small class="invalid-feedback">
										<?php echo form_error('icon') ?>
									</small>
								</div>
							</div>
							<div class="form-group row">
								<label for="status_id" class="col-sm-2 col-form-label">Status Id</label>
								<div class="col-sm-10">
									<select class="form-control" id="status_id" name="status_id">
										<option value="" selected disabled>Pilih</option>
										<option value="0" <?php if ($data_services->status_id == "0") : echo "selected";
																endif; ?>>0</option>
										<option value="1" <?php if ($data_services->status_id == "1") : echo "selected";
																endif; ?>>1</option>
									</select>
									<small class="text-danger">
										<?php echo form_error('status_id') ?>
									</small>
								</div>
							</div>
							<div class="form-group row row">
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
