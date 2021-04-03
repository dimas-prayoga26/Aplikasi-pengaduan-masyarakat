<?php
require_once("functions/function_pengaduan.php");
require_once('core/auth.php');

if (isset($_GET['id'])) {
  delete_pengaduan($_GET);

  header('location:pengaduan_index.php');
}
