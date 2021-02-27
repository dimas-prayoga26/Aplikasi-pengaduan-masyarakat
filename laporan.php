<?php
// php script
include("controllers/pengaduan_controller.php");

// html
include("views/header.php");
?>
    <div class="row">
        <div data-alert class="alert-box" style="display:none;">
        Ini standard error
        <a href="#" class="close">&times;</a>
        </div>
    </div>
    <div class="row">
        <div class="medium-6 medium-centered large-4 large-centered columns">
            <div class="row log-in-form">
                <form action="laporan.php" method="POST">
                    <div class="row column">
                        <h4 class="text-center">Pengaduan</h4>
                        <label>Tanggal Pengaduan
                        <input type="text" name="tgl-pengaduan" placeholder="tgl-pengaduan">
                        </label>
                        <label>NIK
                        <input type="text" name="nik" placeholder="NIK">
                        </label>
                        <label>Isi Laporan
                        <input type="text" name="isi_laporan" placeholder="Isi Kan Laporan Anda">
                        </label>
                        <label>Foto
                        <input type="file" name="foto" placeholder="Foto">
                        </label>
                        <p><input type="submit" name="submit" class="button expanded" value="Submit"/></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include("views/footer.php");
?>
