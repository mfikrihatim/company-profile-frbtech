<div class="content-wrapper">
<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Setting contact</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('setCon'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
				<div class="card-header">
					<a href="javascript:history.back()"><i class="fas fa-arrow-left"></i> Back</a>
				</div>
                <div class="card-body">
					<form action="<?php base_url('setCon/add') ?>" method="post" enctype="multipart/form-data" >

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= set_value('alamat'); ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('alamat') ?>
                            </small>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value=" <?= set_value('no_telp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('no_telp') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="instagram" name="instagram" value=" <?= set_value('instagram'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('instagram') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value=" <?= set_value('linkedin'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('linkedin') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value=" <?= set_value('whatsapp'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('whatsapp') ?>
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

					<div class="card-footer small text-muted">
						* required fields
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
