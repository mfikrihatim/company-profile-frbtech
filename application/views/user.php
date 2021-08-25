<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <th>Username</th>
                <th>Password</th>
                <th>Status ID</th>
                <th>Action</th>
            </tr>
        
            <?php 

            $no=1;
            foreach ($user as $user) : ?>   
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $status_id ?></td>
            </tr>
            <?php endforeach ?>

        </table>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM INPUT USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url().'user/post_data'; ?>">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button type="button" class="btn btn-danger py-2 px-4" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary py-2 px-4">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>