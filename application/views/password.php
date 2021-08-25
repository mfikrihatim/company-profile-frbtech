<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ganti Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ganti password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content px-4">
        <div class="card-body">
            <form method="post" action="<?php base_url(); ?>password">
                <div class="form-group mb-2" data-aos="fade-up" data-aos-delay="100">
                  <label class="form-label h6">Username :</label>
                  <input type="text" class="form-control" name="user" value="" required readonly>
                </div>
                <div class="form-group mb-2" data-aos="fade-up" data-aos-delay="200">
                    <label class="form-label h6">Password lama :</label>
                    <input type="text"  class="form-control" name="passlama" value="" readonly>
                </div>
                <div class="form-group mb-2" data-aos="fade-up" data-aos-delay="200">
                    <label class="form-label h6">Password Baru :</label>
                    <input type="text"  class="form-control" name="password" required>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                  <i class="fa"></i><input class="btn btn-primary py-2 text-light" type="submit" name="ubah" value="Ubah">
                </div>
            </form>
        </div>

        <table class="table mt-3">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status ID</th>
                <th>Action</th>
            </tr>

            

        </table>
    </section>

</div>