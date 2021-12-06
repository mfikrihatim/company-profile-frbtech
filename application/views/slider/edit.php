<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Slider</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('slider'); ?>">List Data</a></li>
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
					<form action="<?php base_url("slider/edit") ?>" method="post" enctype="multipart/form-data" >
						<input type="hidden" name="id" value="<?php echo $data_slider->id?>" />
						
						<div class="form-group row">
							<label for="foto" class="col-sm-2 col-form-label">foto</label>
							<div class="col-sm-10">
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
								<input type="hidden" name="foto_lama" value="<?php echo $data_slider->foto ?>" />
								<img src="<?php echo site_url() . "upload/slider/"   . $data_slider->foto ?>" width="100" height="100">
								<small class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="judul" class="col-sm-2 col-form-label">Judul*</label>
							<div class="col-sm-10">
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul" placeholder="judul slider" value="<?php echo $data_slider->judul ?>" />
								<small class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</small>
							</div>
						</div>		
						<div class="form-group row">
							<label for="deskripsi" class="col-sm-2 col-form-label">deskripsi*</label>
							<div class="col-sm-10">
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi..."><?php echo $data_slider->deskripsi ?></textarea>
								<small class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="status_id" class="col-sm-2 col-form-label">status_id</label>
							<div class="col-sm-10">
								<select class="form-control" id="status_id" name="status_id">
									<option value="" selected disabled>Pilih</option>
									<option value="0" <?php if ($data_slider->status_id == "0") : echo "selected";
															endif; ?>>0</option>
									<option value="1" <?php if ($data_slider->status_id == "1") : echo "selected";
															endif; ?>>1</option>
								</select>
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
					<div class="card-footer small text-muted">
						* required fields
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
