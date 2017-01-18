<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Admin Panel</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?php echo base_url(); ?>index.php/admin"> Dashboard</a>
                            </li>
                            <li>
                              <i class="fa fa-list-alt"></i><a href="<?php echo base_url(); ?>index.php/admin/welcome/video"> Video</a>
                            </li>
                            <li class="active">
                              <i class="fa fa-list-alt"></i> Tambah Data Video
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Tambah Data Video
                      </div>
                      <div class="panel-body">
                        <form role="form" action="<?php echo base_url(); ?>index.php/admin/welcome/insert_video" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Nama Video</label>
                            <input class="form-control" type="text" name="nama_video" value="">
                          </div>
                          <div class="form-group">
                            <label>URL Video</label>
                            <input type="text" class="form-control" placeholder="URL" name="url" required=""> 
                            <!-- <input class="form-control" type="text" name="name" value=""> -->
                          </div>
                          <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea type="textarea" class="form-control" name="deskripsi" value=""> </textarea>
                          </div>
                          <button type="submit" name="submit" value="tambah" class="btn btn-success">Simpan</button>
                          <button type="reset" class="btn btn-warning">Bersihkan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
