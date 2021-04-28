<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
define('MYADMINSCRIPT',true);
session_start();

include('config/config.php');

$mydb_link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
mysqli_set_charset($mydb_link, "utf-8");

include('libs/functions.php');
include('config/variables.php');




include('admin/modules/'.$mod.'.php');






?>