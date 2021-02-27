<?php

require_once("core/init.php");
require_once("functions/pengaduan_function.php");

if(isset($_POST['submit']) ){
  save_pengaduan($_POST);
}
