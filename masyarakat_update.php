<?php
require_once("functions/function_masyarakat.php");
require_once('core/auth.php');
require_once('core/init.php');

if(isset($_POST['update'])) {
  update_masyarakat($_POST);

  header('location:masyarakat_index.php');
}

$nik = $_GET['id'];
$ambilData = mysqli_query($link , "SELECT * FROM masyarakat WHERE nik='$nik'");
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
                  Update Masyarkat
                </h3>
              </div>
              <!-- /.card-header -->
              <form class="" action="masyarakat_update.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">NIK</label>
                    <!-- <input type="hidden" name="nik" value="<?php echo $data['id_petugas']; ?>"> -->
                    <input type="text" class="form-control" name="nik" value="<?php echo $data['nik']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" value="">
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="pass"  value="<?php echo $data['password']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="">Telpon</label>
                    <input type="text" class="form-control" name="telp"  value="<?php echo $data['telp']; ?>" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="">Level</label>
                    <?php echo $data['level'] ?>
                    <select class="form-control" name="level" required>
                      <option value="">- Pilih -</option>
                      <?php foreach ($adminRolesList as $name => $role): ?>
                        <option value="<?php echo $role; ?>" <?php if ($data['level'] == $role): echo 'selected'; endif; ?>><?php echo $name ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div> -->
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
