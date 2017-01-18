 <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video Terkini
                    <small>Fakta Menarik Fisika</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <?php $no=1; foreach($record->result_array() as $list){?>
        <div class="row">

            <div class="col-md-8">
                <iframe width="750" height="500" src="<?php echo $list['url'];?>" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-md-4">
                <h2><?php echo $list['nama_video']; ?></h2>
                <h3>Deskripsi</h3>
                <p><?php echo $list['deskripsi']; ?></p>
                <h3>URL</h3>
                <a href="<?php echo $list['url']; ?>"> Link Video</a>
                
                
            </div>

        </div>
        <?php } ?>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Video</h3>
            </div>

            <div class="col-sm-4 col-xs-6">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/iz25XuAzeiw" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-sm-4 col-xs-6">
               <iframe width="300" height="150" src="https://www.youtube.com/embed/iz25XuAzeiw" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="col-sm-4 col-xs-6">
                <iframe width="300" height="150" src="https://www.youtube.com/embed/iz25XuAzeiw" frameborder="0" allowfullscreen></iframe>
            </div>
            

        </div>
        <!-- /.row -->

        <hr>