<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Set Contact</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Set Contact</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content px-4">
        <button class="btn btn-primary py-2" type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah data</button>

        <table class="table mt-3">
            <tr>
                <th>No</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>instragram</th>
                <th>linkedin</th>
                <th>Whatsapp</th>
                <th>Action</th>
            </tr>
        

        </table>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'user/post_data'; ?>">
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor telepon</label>
                            <input type="text" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" name="instagram" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Linkedin</label>
                            <input type="text" name="linkedin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Whatsapp</label>
                            <input type="text" name="whatsapp" class="form-control">
                        </div>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>