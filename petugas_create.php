<?php
require_once("functions/function_petugas.php");
require_once('core/auth.php');

if (isset($_POST['submit'])) {
  tambah_petugas($_POST);

  header('location:petugas_index.php');
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
            <h1>Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="petugas_index.php">Petugas</a></li>
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
                  Tambah Petugas
                </h3>
              </div>
              <!-- /.card-header -->
              <form class="" action="petugas_create.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama_petugas" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telp" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="" required>
                  </div>
                  <div class="form-group">
                    <label for="">Level</label>
                    <select class="form-control" name="level" required>
                      <option value="">- Pilih -</option>
                      <?php foreach ($adminRolesList as $name => $role): ?>
                        <option value="<?php echo $role; ?>"><?php echo $name ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
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
