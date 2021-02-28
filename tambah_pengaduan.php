<?php
// php script
require_once("functions/function_masyarakat.php");
require_once("functions/function_pengaduan.php");

if(!isset($_SESSION['signed'])){
    header('Location: login.php');
}

$user = user($_SESSION['signed']['username']);


if (isset($_POST['submit'])) {
  tambah_pengaduan($_POST);
}

// html
include("views/header.php");
?>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="tambah_pengaduan.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Pengaduan</h4>
                        <label>TANGGAL PENGADUAN
                        <input type="text" name="tgl_pengaduan" placeholder="" required>
                        </label>
                        <label>NIK
                        <input type="text" name="nik" placeholder="" value="<?php echo $user['nik']; ?>" required readonly>
                        </label>
                        <label>ISI LAPORAN
                        <input type="text" name="isi_laporan" placeholder="" required>
                        </label>
                        <label>FOTO
                        <input type="file" name="foto" placeholder="" required>
                        </label>
                        <p><input type="submit" name="submit" class="button expanded" value="DAFTAR"/></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("views/footer.php");
?>
