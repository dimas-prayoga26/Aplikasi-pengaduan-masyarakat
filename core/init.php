<?php

session_start();

require_once("model/db.php");

$namaFile = basename($_SERVER["SCRIPT_FILENAME"], '.php');
