<?php

require_once("core/init.php");

const ROLE_USER = 'user';
const ROLE_ADMIN = 'admin';
const ROLE_PETUGAS = 'petugas';

$auth = null;
$role = null;
$user = null;

$adminRoles = [ROLE_ADMIN,ROLE_PETUGAS];
$adminRolesList = ['Admin' => ROLE_ADMIN, 'Petugas' => ROLE_PETUGAS];

if (isset($_SESSION['signed'])) {
  $user = $_SESSION['signed']['user'];
  $role = $_SESSION['signed']['role'];
  if (in_array($role, $adminRoles)) {
    $auth = ['nama' => $user['nama_petugas']];
  } else {
    $auth = ['nama' => $user['nama']];
  }
}

if (in_array($namaFile, ['login', 'register', 'admin_login'])) {
  if (isset($_SESSION['signed'])) {
    header('location:index.php');
    exit;
  }
} else {
  if(!isset($_SESSION['signed'])) {
    $_SESSION['error'] = 'Silahkan login terlebih dahulu';
    header('location:login.php');
    exit;
  }
}
