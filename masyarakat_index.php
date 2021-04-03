<?php
require_once("functions/function_masyarakat.php");
require_once('core/auth.php');
require_once("core/init.php");
include("views/admin_header.php");

$sqli = mysqli_query($link , "SELECT * FROM masyarakat");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MASYARAKAT</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Masyarakat</li>
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
                  <a href="masyarakat_create.php" class="btn btn-block btn-xs btn-outline-primary">Tambah</a>
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
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telp</th>
                    </tr>
                  </thead>
                  <?php
                    // $num = 1;
                    while($data_petugas = mysqli_fetch_assoc($sqli)) {

                   ?>
                  <tbody>
                    <tr>
                      <td><?=$data_petugas['nik']?></td>
                      <td><?=$data_petugas['nama']?></td>
                      <td><?=$data_petugas['username']?></td>
                      <td><?=$data_petugas['password']?></td>
                      <td><?=$data_petugas['telp']?></td>

                      <td>
                        <a class="btn btn-primary btn-sm" href="masyarakat_update.php?id=<?php echo $data_petugas['nik']; ?>">
                            <i class="fas fa-pencil-alt "></i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="masyarakat_delete.php?nik=<?php echo $data_petugas['nik']; ?>">
                            <i class="fas fa-trash "></i>
                            Delete
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
