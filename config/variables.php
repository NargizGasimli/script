<?php

if (!defined('MYADMINSCRIPT')) {
	exit();
}

$general=[];
$general['site_title']='Sript';

$post=$_POST;
mysqlEscapeArr($mydb_link,$post);
$get=$_GET;
mysqlEscapeArr($mydb_link,$get);



$myModules=["home","users"];
$mod = (isset($_GET['mod']) && in_array($_GET['mod'],$myModules))?$_GET['mod']:"home"


?>