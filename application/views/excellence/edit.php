<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Excellence</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('excellence'); ?>">List Data</a></li>
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
					<form action="<?php base_url("excellence/edit") ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $data_excellence->id?>" />

							<div class="form-group">
								<label for="judul">Judul*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul" placeholder="judul" value="<?php echo $data_excellence->judul ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi..."><?php echo $data_excellence->deskripsi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>
								
								<div class="form-group">
								<label for="name">icon</label>
								<input class="form-control-file <?php echo form_error('icon') ? 'is-invalid':'' ?>" type="file" name="icon" />
								<input type="hidden" name="icon_lama" value="<?php echo $data_excellence->icon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('icon') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status_id">Status Id</label>
								<select class="form-control" id="status_id" name="status_id">
									<option value="" selected disabled>Pilih</option>
									<option value="0" <?php if ($data_excellence->status_id == "0") : echo "selected";
															endif; ?>>0</option>
									<option value="1" <?php if ($data_excellence->status_id == "1") : echo "selected";
															endif; ?>>1</option>
								</select>
								<small class="text-danger">
									<?php echo form_error('status_id') ?>
								</small>
							</div>
							
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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
