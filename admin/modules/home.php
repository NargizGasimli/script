<?php

if (!defined('MYADMINSCRIPT')) {
	exit();
}
if (isset($_SESSION['adm_logged_in'])) {
	if (isset($get['logout']) && $get['logout']=='true') {
		session_destroy();
		header("Location:".ADMIN_SCRIPT);
		exit();
	}
	include('views/back/home/home_main.php');
}else{

if (isset($post['login'],$post['password'])) {
	$result=db_query("SELECT `id`,`password`,`name`,`admin` FROM `users` WHERE `login`='".$post['login']."' && `deleted`=0 && `blocked`=0");
	$errors=[];
	if (mysqli_num_rows($result)>0) {
		$item=mysqli_fetch_assoc($result);
		if (password_verify($post['password'],$item['password'])) {
			$_SESSION['adm_logged_in']=true;
			$_SESSION['adm_id']=$item['id'];
			$_SESSION['adm_name']=$item['name'];
			$_SESSION['is_adm'] = $item['admin'];
			header("Location:". ADMIN_SCRIPT);
			exit();

		}else{
			$errors[]="Please enter right password or login";
		}
	}else{
		$errors[]="Please enter right password or login";
	}
}

include('views/back/home/home_login.php');
}
?>