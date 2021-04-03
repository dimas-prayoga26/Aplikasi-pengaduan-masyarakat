<?php
require_once("functions/function_pengaduan.php");
require_once('core/auth.php');
require_once('core/init.php');

if(isset($_POST['proses'])) {
  update_pengaduan($_POST);
    header('location:pengaduan_index.php');
}
// if(isset($_POST['kembali'])){
//
//     header('location:pengaduan_index.php');
// }

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
        <?php include('views/alert.php'); ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaduan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="pengaduan_index.php">pengaduan</a></li>
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
                <div class="card-body">
                  <div class="header">
                    <!-- <input type="hidden" name="kembali" value="submit">
                    <button type="submit" class="btn btn-primary">Kembali</button> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                      Proses Verifikasi
                    </button>
                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">PROSES TANGGAPAN</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Tanggapan , Yakind Akan DI Proses ?&hellip;</p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <form class="" action="pengaduan_update.php" method="post">
                            <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan']; ?>">
                            <input type="hidden" name="proses" value="submit">
                            <button type="button" class="btn btn-default" data-dismiss="modal">TIDAK</button>
                            <button type="submit" class="btn btn-primary">OKE</button>
                          </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                  </div><br>
                  <div class="form-group" >
                    <label for="">Tanggal Pengaduan</label>
                    <input type="text" class="form-control"  name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="comment">Tulis Laporan</label>
                    <textarea class="form-control" name="isi_laporan" rows="5" id="" required><?php echo $data['isi_laporan']; ?></textarea>
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
