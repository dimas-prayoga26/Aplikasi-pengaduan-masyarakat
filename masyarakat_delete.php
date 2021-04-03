<?php
require_once("functions/function_masyarakat.php");
require_once('core/auth.php');

if (isset($_GET['nik'])) {
  delete_masyarakat($_GET);

  header('location:masyarakat_index.php');
}
