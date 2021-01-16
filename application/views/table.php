

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        </div>
          <div class="box">
            <div class="box-header">
              <?php if($this->session->flashdata('success')){?>
              <diV class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close"></i>
                </button>
                <span style="text-align:left;"> <?php echo $this->session->flashdata('success')?></span>
              </div>
            <?php }?>
              <?php if($this->session->flashdata('error')){?>
              <diV class="alert alert-error">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="fa fa-close"></i>
                </button>
                <span style="text-align:left;"> <?php echo $this->session->flashdata('error')?></span>
              </div>
            <?php }?>
              <h3 class="box-title">Data Pelajar Pesantren</h3>
            </div>
            <div class="box-body">
              <div class="pull-right">
                <a href="<?php echo base_url()?>Belajar/tambahdata" class="btn btn-primary">
                  <i class="mdi mid-plus-circle mr-2 fa fa-plus"></i>Tambah Pelajar</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nisn</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($pelajar->result_array() as $data){
                   ?>
                <tr>
                  <td><?php echo $data['nisn'] ?></td>
                  <td><?php echo $data['namasiswa'] ?></td>
                  <td><?php echo $data['kelas'] ?></td>
                  <td><?php echo $data['alamat'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><span data-toggle="tooltip" data-original-title="Edit Data" style="Font-size:10">
                  <a class="btn btn-warning" href="<?php echo site_url('belajar/editdata/'.$data['nisn'])?>">
                    <i class="fa fa-edit"></i></a></span>
                    <span data-toggle="tooltip" data-original-title="Hapus Data" style="Font-size:10">
                    <a class="btn btn-danger" href="<?php echo site_url('belajar/delete/'.$data['nisn'])?>">
                      <i class="fa fa-trash-o"></i></a></span></td>
                </tr>
              <?php }
              ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
