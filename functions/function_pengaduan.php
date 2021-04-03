<?php
require_once("core/init.php");
require_once("core/auth.php");
function tambah_pengaduan($request){
  global $link;
  $hasil = false;
  $tgl_pengaduan = $request['tgl_pengaduan'];
  $nik = $request['nik'];
  $isi_laporan = $request['isi_laporan'];
  $foto = $_FILES['foto']['name'];
  $file = $_FILES['foto']['tmp_name'];
  $status = isset($request['status']) ? $request['status'] : '0';

  $query = mysqli_query($link , "SELECT * FROM pengaduan");

  $queryInsert = "INSERT INTO pengaduan (tgl_pengaduan , nik , isi_laporan , foto , status)
                  VALUES('$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')";

                  // var_dump(mysqli_query($link , $queryInsert));
if(mysqli_query($link , $queryInsert)) {
  $upload = move_uploaded_file($file, 'foto/' . $foto);
  $hasil = true;
  $_SESSION['success'] = 'Pengaduan Berhasil Di Buat';
      } else {
  $_SESSION['error'] = 'Pengaduan Gagal Di Buat';
    }
    return $hasil;
}


function update_pengaduan($request) {
global $link;
$hasil = false;
$id = $request['id_pengaduan'];
$query = mysqli_query($link , "SELECT * FROM pengaduan");

$queryUpdate = "UPDATE pengaduan SET status='proses' WHERE id_pengaduan = '$id'";

if(mysqli_query($link , $queryUpdate)) {
  $hasil = true;
  $_SESSION['success'] = 'Pengaduan berhasil Di Proses';
} else {
  $_SESSION['error'] = 'Pengaduan Gagal Di Proses';
}
return $hasil;

}

function delete_pengaduan($request){
  global $link;
  $hasil = false;
  $id = $_GET['id'];

  $query = mysqli_query($link , "SELECT * FROM pengaduan");

  $queryDelete = "DELETE FROM pengaduan where id_pengaduan='$id'";

  if(mysqli_query($link , $queryDelete)) {
        $hasil = true;
        $_SESSION['success'] = 'pengaduan Berhasil Di Delete';
          } else {
        $_SESSION['error'] = 'pengaduan Gagal Di Delete';
          }
          return $hasil;
}
