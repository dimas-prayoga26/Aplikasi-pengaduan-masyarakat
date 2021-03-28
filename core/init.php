<?php

session_start();

require_once("model/db.php");

$namaFile = basename($_SERVER["SCRIPT_FILENAME"], '.php');

const P_STATUS_NEW = '0';
const P_STATUS_PROSES = 'proses';
const P_STATUS_SELESAI = 'selesai';

$pengaduanStatusList = ['new' => P_STATUS_NEW, 'proses' => P_STATUS_PROSES , 'selesai' => P_STATUS_SELESAI];
