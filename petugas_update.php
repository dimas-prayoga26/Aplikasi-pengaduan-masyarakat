<?php
require_once("functions/function_petugas.php");
require_once('core/auth.php');
require_once('core/init.php');

if(isset($_POST['update'])) {
  update_petugas($_POST);

  header('location:petugas_index.php');
}

$id = $_GET['id'];
$ambilData = mysqli_query($link , "SELECT * FROM petugas WHERE id_petugas='$id'");
$data = mysqli_fetch_assoc($ambilData);

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
                  Update Petugas
                </h3>
              </div>
              <!-- /.card-header -->
              <form class="" action="petugas_update.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="hidden" name="id_petugas" value="<?php echo $data['id_petugas']; ?>">
                    <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" name="telp" value="<?php echo $data['telp']; ?>" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password"  value="<?php echo $data['password']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Level</label>
                    <?php echo $data['level']; ?>
                    <select class="form-control" name="level" required>
                      <option value="">Pilih</option>
                      <option value="admin" <?php if ($data['level'] == 'admin'): echo 'selected'; endif; ?>>admin</option>
                      <option value="petugas" <?php if ($data['level'] == 'petugas'): echo 'selected'; endif; ?>>petugas</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="update" value="submit">
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
