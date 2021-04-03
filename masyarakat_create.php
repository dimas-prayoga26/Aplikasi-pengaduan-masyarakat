<?php
require_once("functions/function_masyarakat.php");
require_once('core/auth.php');

if (isset($_POST['submit'])) {
  tambah_masyarakat($_POST);

  header('location:masyarakat_index.php');
}
// else {
//   header('location:petugas_create.php');
// }
// exit;

// if(tambah_petugas($_POST)) {
// header('location:petugas_index.php');
// } else {
// header('location:petugas_create.php');
// }
// exit;

include("views/admin_header.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Masyarkat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="masyarakat_index.php">Masyarkat</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  Tambah Masyarkat
                </h3>
              </div>
              <!-- /.card-header -->
              <form class="" action="masyarakat_create.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" class="form-control" name="nik" value="massa" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="pass" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Telpon</label>
                    <input type="text" class="form-control" name="telp" value="" required>
                  </div>
                  <!-- <?php if (!in_array($role, [ROLE_USER])): ?>
                    <div class="form-group">
                      <label for="">status</label>
                      <select class="form-control" name="status" required>
                        <option value="">- Pilih -</option>
                        <?php foreach ($pengaduanStatusList as $name => $status): ?>
                          <option value="<?php echo $status; ?>"><?php echo $name ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div> -->
                  <?php endif; ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="submit" value="submit">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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
