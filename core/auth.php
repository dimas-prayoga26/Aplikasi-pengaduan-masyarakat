<?php

require_once("core/init.php");

$auth = null;
$role = null;

if (isset($_SESSION['signed'])) {
  $auth = $_SESSION['signed']['user'];
  $role = $_SESSION['signed']['role'];
}

if (in_array($namaFile, ['login', 'register'])) {
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
