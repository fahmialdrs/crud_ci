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
                            <li class="active">
                              <i class="fa fa-list-alt"></i> Blog
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Data Video
                      </div>
                      <div class="panel-body">
                        <a href="<?php echo base_url(); ?>index.php/admin/welcome/tambahvideo" class="btn btn-primary">Tambah Video</a>
                        <table class="table table-bordered table-hover table-striped" style="margin-top:20px">
                          <thead>
                            <tr>
                              <td>No</td>
                              <td>Nama Video</td>
                              <td>URL Video</td>
                              <td>Deskripsi</td>
                              <td>Action</td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1; foreach($record->result_array() as $list){?>
                            <tr>
                              <td><?php echo $no;?></td>
                              <td><?php echo $list['nama_video'];?></td>
                              <td><?php echo $list['url'];?></td>
                              <td><?php echo $list['deskripsi'];?></td>
                              <td>
                                <!-- <a href="<?php echo base_url(); ?>index.php/admin/welcome/editblog/<?php echo $list['id'] ?>" class="btn btn-primary btn-xs" type="button"><i class="fa fa-wrench"></i> Update</a> -->
                                <a href="<?php echo base_url(); ?>index.php/admin/welcome/do_hapus_video/<?php echo $list['id'] ?>" class="btn btn-primary btn-xs" type="button"><i class="fa fa-cut"></i> Delete</a>
                              </td>
                            </tr>
                            <?php $no++ ; }?>
                          </tbody>
                        </table>
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
