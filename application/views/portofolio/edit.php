<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Portofolio</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('portofolio'); ?>">List Data</a></li>
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
					<form action="<?php base_url("portofolio/edit") ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $data_portofolio->id?>" />

							<div class="form-group">
								<label for="nama_portofolio">Nama Portofolio*</label>
								<input class="form-control <?php echo form_error('nama_portofolio') ? 'is-invalid':'' ?>" type="text" name="nama_portofolio" placeholder="nama_portofolio" value="<?php echo $data_portofolio->nama_portofolio ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_portofolio') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" name="deskripsi" placeholder="Deskripsi..."><?php echo $data_portofolio->deskripsi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>
								
								<div class="form-group">
								<label for="name">Foto</label>
								<input class="form-control-file <?php echo form_error('foto') ? 'is-invalid':'' ?>" type="file" name="foto" />
								<input type="hidden" name="foto_lama" value="<?php echo $data_portofolio->foto ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('foto') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="status_id">Status Id</label>
								<select class="form-control" id="status_id" name="status_id">
									<option value="" selected disabled>Pilih</option>
									<option value="0" <?php if ($data_portofolio->status_id == "0") : echo "selected";
															endif; ?>>0</option>
									<option value="1" <?php if ($data_portofolio->status_id == "1") : echo "selected";
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
