<div class="content-wrapper">
<div class="container py-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Setting Contact</a></li>
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
            <div class="card">
				<div class="card-header">
					<a href="<?php echo site_url('setCon/add') ?>"><i class="fas fa-plus"></i> Add New</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover" id="tableSetCon" width="100%" cellspacing="0">
							<thead>
								<tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Instagram</th>
                                    <th>Linkedin</th>
                                    <th>Whatsapp</th>
                                    <th>Status Id</th>
                                    <th>Action</th>
                                </tr>
							</thead>
							<tbody>
								<?php
                                $no=1; foreach ($data_setCon as $row): ?>
                                    <tr>
										<!-- <td><?= $row->id ?></td> -->
                                        <td><?= $no++?></td>
                                        <td><?= $row->alamat ?></td>
                                        <td><?= $row->no_telp ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= $row->instagram ?></td>
                                        <td><?= $row->linkedin ?></td>
                                        <td><?= $row->whatsapp ?></td>
                                        <td><?= $row->status_id ?></td>
                                        <td>
                                            <a href="<?= site_url('setCon/edit/' . $row->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="javascript:void(0);" data="<?= $row->id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> Hapus</a>
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
    $('#tableSetCon').DataTable();

    //menampilkan modal dialog saat tombol hapus ditekan
    $('#tableSetCon').on('click', '.item-delete', function() {
        //ambil data dari atribute data 
        var id = $(this).attr('data');
        $('#myModalDelete').modal('show');
        //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
        //pada controller setCon
        $('#btdelete').unbind().click(function() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>setCon/delete/',
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
