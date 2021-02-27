<?php
require_once("core/init.php");

function tambah_pengaduan($request){
  global $link;
  $tgl_pengaduan = $request['tgl_pengaduan'];
  $nik = $request['nik'];
  $isi_laporan = $request['isi_laporan'];
  $foto = $request['foto'];
  $status = 0;

  $queryInsert = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES('$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')";

  if( mysqli_query($link, $queryInsert) ) {
    $_SESSION['success'] = 'Pengaduan Anda berhasil Di Kirim!';
  } else {
    $_SESSION['error'] = 'Pengaduan Anda Gagal Di Kirim!';
  }
  header('location:tambah_pengaduan.php');
  exit;
}
