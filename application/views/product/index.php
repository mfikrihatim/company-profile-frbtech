<div class="content-wrapper">
<div class="container py-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div mb-2>
                <!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
                <?php if ($this->session->flashdata('message')) :
                    echo $this->session->flashdata('message');
                endif; ?>
            </div>

            <div class="card mb-3">
				<div class="card-header">
					<a href="<?php echo site_url('product/add') ?>"><i class="fas fa-plus"></i> Add New</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover" id="tableProduct" width="100%" cellspacing="0">
							<thead>
								<tr>
									<!-- <th>id</th> -->
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Link</th>
                                    <th>Status Id</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($data_product as $row): ?>
								<tr>
									<!-- <td><?= $row->id ?></td> -->
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><?= $row->deskripsi ?></td>
									<td><img src="<?php echo base_url('upload/product/'.$row->foto) ?>" width="64" /></td>
                                    <td><?= $row->link ?></td>
                                    <td><?= $row->status_id ?></td>
									<td width="200">
										<a href="<?= site_url('product/edit/' . $row->id) ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                        <a href="javascript:void(0);" data="<?= $row->id ?>" class="btn btn-danger item-delete"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableProduct').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableProduct').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller product
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>product/delete/',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#myModalDelete').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>
