<?php
require_once("core/init.php");

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
