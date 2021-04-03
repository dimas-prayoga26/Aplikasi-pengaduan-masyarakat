<?php
require_once("core/init.php");

function tambah_masyarakat($request){
  global $link;
  $hasil = false;
  $nik = $request['nik'];
  $nama = $request['nama'];
  $username = $request['username'];
  $password = $request['pass'];
  $telpon = $request['telp'];

  // $status = isset($request['status']) ? $request['status'] : '0';

  $query = mysqli_query($link , "SELECT * FROM masyarakat");

  $queryInsert = "INSERT INTO masyarakat (nik , nama , username , password , telp)
                  VALUES('$nik', '$nama', '$username', '$password', '$telpon')";

                  // var_dump(mysqli_query($link , $queryInsert));
if(mysqli_query($link , $queryInsert)) {
  $upload = move_uploaded_file($file, 'foto/' . $foto);
  $hasil = true;
  $_SESSION['success'] = 'Akun Masyarakat Berhasil Di Buat';
      } else {
  $_SESSION['error'] = 'Aun Masyarkat Gagal Di Buat';
    }
    return $hasil;
}

function update_masyarakat($request){
  global $link;
  $hasil = false;
  $nik = $request['nik'];
  $nama = $request['nama'];
  $username = $request['username'];
  $pass = $request['pass'];
  $telp = $request['telp'];

  $query = mysqli_query($link , "SELECT * FROM masyarakat");

  $queryUpdate = "UPDATE masyarakat SET nik = '$nik', nama = '$nama',
                  username = '$username' ,password = '$pass' , telp = '$telp' WHERE nik = '$nik'";

if(mysqli_query($link , $queryUpdate)) {
    $hasil = true;
    $_SESSION['success'] = 'Akun Masyarakat Berhasil Di Update';
      } else {
    $_SESSION['error'] = 'Akun Masyarakat Berhasil Di Update';
      }
      return $hasil;
}

function delete_masyarakat($request){
  global $link;
  $hasil = false;
  $nik = $_GET['nik'];

  $query = mysqli_query($link , "SELECT * FROM masyarakat");

  $queryDelete = "DELETE FROM masyarakat where nik='$nik'";

  if(mysqli_query($link , $queryDelete)) {
        $hasil = true;
        $_SESSION['success'] = 'Akun Berhasil Di Delete';
          } else {
        $_SESSION['error'] = 'Akun Gagal Di Delete';
          }
          return $hasil;
}


function register($request){
    global $link;
    $result = false;
    // mencegah sql injection
    $nik = mysqli_real_escape_string($link, $request['nik']);
    $nama = mysqli_real_escape_string($link, $request['nama']);
    $telp = mysqli_real_escape_string($link, $request['telp']);
    $username = mysqli_real_escape_string($link, $request['username']);
    $password = mysqli_real_escape_string($link, $request['password']);

    // cek nik dan username
    $query = "SELECT * FROM masyarakat where nik = '$nik' or username = '$username'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) == 0) {
          // Encrypt password
          // $password = password_hash($password, PASSWORD_DEFAULT);
          $queryInsert = "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES('$nik', '$nama', '$username', '$password', '$telp')";

          if( mysqli_query($link, $queryInsert) ) {
            $result = true;
            $_SESSION['success'] = 'Register berhasil';
          } else {
            $_SESSION['error'] = 'Register gagal';
          }
        } else {
          $_SESSION['error'] = 'nik atau username sudah terdaftar';
        }
    }

    return $result;
}

function login($request){
    global $link;
    // mencegah sql injection
    $username = mysqli_real_escape_string($link, $request['username']);
    $password = mysqli_real_escape_string($link, $request['password']);

    $query = "SELECT * FROM masyarakat WHERE username = '$username'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);

    // if( password_verify($pass, $hash['password']) ) return true;
    // else return false;

    if ($password == $hash['password']) {
      $_SESSION['signed'] = [
        'role' => 'user',
        'user' => $hash
      ];
      $_SESSION['success'] = 'Login berhasil';
      return true;
    } else {
      $_SESSION['error'] = 'Login gagal';
      return false;
    }
}

// clear all session
function logout($session){
    unset($session);
    session_destroy();
    return true;
}

function user($username){
  global $link;
  $query = "SELECT * FROM masyarakat WHERE username = '$username'";

  $result = mysqli_query($link, $query);
  return mysqli_fetch_assoc($result);
}
