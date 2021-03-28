<?php
require_once("functions/function_verifikasi.php");
require_once('core/auth.php');
require_once('core/init.php');

if(isset($_POST['proses'])) {
  update_pengaduan($_POST);

    header('location:verifikasi_index.php');
}

$id = $_GET['id'];
$ambilData = mysqli_query($link , "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
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
            <h1>Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="verifikasi_index.php">pengaduan</a></li>
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
                  Detail Pengaduan
                </h3>
              </div>
              <!-- /.card-header -->
              <form class="" action="lihat_pengaduan.php" method="post">
                <div class="card-body">
                  <div class="header">
                    <!-- <input type="hidden" name="kembali" value="submit">
                    <button type="submit" class="btn btn-primary">Kembali</button> -->
                    <input type="hidden" name="proses" value="submit">
                    <button type="submit" class="btn btn-danger" >Proses Verifikasi</button>
                  </div><br>
                  <div class="form-group" >
                    <label for="">Tanggal Pengaduan</label>
                    <input type="hidden" name="id_petugas" value="<?php echo $data['id_pengaduan']; ?>">
                    <input type="text" class="form-control"  name="nama_petugas" value="<?php echo $data['tgl_pengaduan']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="comment">Tulis Laporan</label>
                    <textarea class="form-control" rows="5" id="comment"><?php echo $data['isi_laporan']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Bukti Foto</label>
                    <div class="">
                      <img src="foto/<?php echo $data['foto']; ?>" alt="" width="800">
                    </div>
                  </div>

                </div>
                <!-- /.card-body -
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
