<?php
require_once("core/init.php");

function tambah_pengaduan($request){
  global $link;
  $hasil = false;
  $tgl_pengaduan = $request['tgl_pengaduan'];
  $nik = $request['nik'];
  $isi_laporan = $request['isi_laporan'];
  $foto = $request['foto'];
  $status = 0;

  // if(isset($_POST['submit'])) {
  //   $foto = $_POST['foto']
  //   $nama_file = $_FILES['gambar']['foto'];
  //   $source = $_FILES['gambar']['temp_foto'];
  //   $folder = '../gambar/';
  //
  //   move_uploaded_file($source , $folder.$nama_file);
  // }

  $queryInsert = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES('$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')";

  if(mysqli_query($link, $queryInsert) ) {
    $hasil = true;
    $_SESSION['success'] = 'Pengaduan Anda berhasil Di Kirim!';
  } else {
    $_SESSION['error'] = 'Pengaduan Anda Gagal Di Kirim!';
  }
  return $hasil;
}
