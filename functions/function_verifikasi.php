<?php
require_once("core/init.php");

function update_pengaduan($request){
global $link;
$hasil = false;
// $id = $request['id_pengaduan'];
$query = mysqli_query($link , "SELECT * FROM pengaduan");

$queryUpdate = "UPDATE pengaduan SET status='proses' WHERE id_pengaduan = '$_GET[id]'";

if(mysqli_query($link , $queryUpdate)) {
  $hasil = true;
  $_SESSION['success'] = 'Pengaduan berhasil Di Proses';
    } else {
  $_SESSION['error'] = 'Pengaduan Gagal Di Proses';
    }
    return $hasil;

}
