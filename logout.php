<?php

require_once("functions/function_masyarakat.php");

if ($session = $_SESSION['signed']) {
  logout($session);
  header('location:login.php');
  exit;
}
