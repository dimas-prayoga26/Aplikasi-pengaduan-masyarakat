<?php
require_once("core/init.php");

function tambah_petugas($request){
  global $link;
  $hasil = false;
  $nama_petugas = $request['nama_petugas'];
  $telpon = $request['telp'];
  $username = $request['username'];
  $password = $request['password'];
  $level = $request['level'];

  $query = mysqli_query($link , "SELECT * FROM petugas");

  $queryInsert = "INSERT INTO petugas (nama_petugas , telp , username , Password , level)
                  VALUES('$nama_petugas', '$telpon', '$username', '$password', '$level')";

if(mysqli_query($link , $queryInsert)) {
  $hasil = true;
  $_SESSION['success'] = 'Akun Berhasil Di Buat';
      } else {
  $_SESSION['error'] = 'Akun Gagal Di Buat';
    }
    return $hasil;
}

  function update_petugas($request){
    global $link;
    $hasil = false;
    $id = $request['id_petugas'];
    $nama_petugas = $request['nama_petugas'];
    $telpon = $request['telp'];
    $username = $request['username'];
    $password = $request['password'];
    $level = $request['level'];

    $query = mysqli_query($link , "SELECT * FROM petugas");

    $queryUpdate = "UPDATE petugas SET nama_petugas = '$nama_petugas', telp = '$telpon',
                    username = '$username' ,password = '$password' , level = '$level' WHERE id_petugas = '$id'";

if(mysqli_query($link , $queryUpdate)) {
      $hasil = true;
      $_SESSION['success'] = 'Akun Berhasil Di Update';
        } else {
      $_SESSION['error'] = 'Akun Gagal Di Update';
        }
        return $hasil;
  }

function delete_petugas($request){
  global $link;
  $hasil = false;
  $id = $_GET['id'];

  $query = mysqli_query($link , "SELECT * FROM petugas");

  $queryDelete = "DELETE FROM petugas where id_petugas='$id'";

  if(mysqli_query($link , $queryDelete)) {
        $hasil = true;
        $_SESSION['success'] = 'Akun Berhasil Di Delete';
          } else {
        $_SESSION['error'] = 'Akun Gagal Di Delete';
          }
          return $hasil;
}
function admin_login($request){
    global $link;
    // mencegah sql injection
    $username = mysqli_real_escape_string($link, $request['username']);
    $password = mysqli_real_escape_string($link, $request['password']);

    $query = "SELECT * FROM petugas WHERE username = '$username'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);

    // if( password_verify($pass, $hash['password']) ) return true;
    // else return false;
    if ($password == $hash['password']) {
      $_SESSION['signed'] = [
        'role' => $hash['level'],
        'user' => $hash
      ];
      $_SESSION['success'] = 'SELEMAT DATANG '. strtoupper($hash['level']);
      return true;
    } else {
      $_SESSION['error'] = 'Login gagal';
      return false;
    }
}

  // $id=$_GET['id'];
  //
  // 	global $link;
  // 	mysqli_query($conn , "DELETE FROM petugas where id_petugas='$id'");
  // 	header('location:index.php');

// $ambil_data = mysqli_query($link , "SELECT * FROM petugas WHERE level = '$lvl'");
