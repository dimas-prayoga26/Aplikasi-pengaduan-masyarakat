<?php
require_once("functions/function_verifikasi.php");
require_once('core/auth.php');
require_once("core/init.php");
include("views/admin_header.php");

$sqli = mysqli_query($link , "SELECT * FROM pengaduan WHERE id_pengaduan");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VERFIKASI PENGADUAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Petugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php include('views/alert.php'); ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <a href="pengaduan_create.php" class="btn btn-block btn-xs btn-outline-primary">Tambah</a>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO Pengaduan</th>
                      <th>Tanggal Pengaduan</th>
                      <th>Nik</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <?php
                    while($data_petugas = mysqli_fetch_assoc($sqli)) {

                   ?>
                  <tbody>
                    <tr>
                      <td><?=$data_petugas['id_pengaduan']?></td>
                      <td><?=$data_petugas['tgl_pengaduan']?></td>
                      <td><?=$data_petugas['nik']?></td>
                      <td><?=$data_petugas['isi_laporan']?></td>
                      <td><?=$data_petugas['foto']?></td>
                      <td><span class="badge <?php if($data_petugas['status'] == P_STATUS_NEW): echo "bg-danger";
                       elseif($data_petugas['status'] == P_STATUS_PROSES): echo "bg-primary";
                       elseif($data_petugas['status'] == P_STATUS_SELESAI): echo "bg-success";
                       endif; ?>"><?=$data_petugas['status']?></span></td>
                      <td>
                        <a class="btn btn-info btn-sm" href="pengaduan_lihat.php?id=<?php echo $data_petugas['id_pengaduan']; ?>">
                            <i class="fa fa-check "></i>
                            Detail & Verifikasi
                        </a>
                        <?php } ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("views/admin_footer.php");
?>
