<?php
require_once("functions/function_petugas.php");
require_once('core/auth.php');

if (isset($_GET['id'])) {
  delete_petugas($_GET);

  header('location:petugas_index.php');
}
