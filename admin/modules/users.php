<?php

if (!defined('MYADMINSCRIPT')) {
	exit();
}
if (isset($_SESSION['adm_logged_in'])) {

	if (!isset($get['act'])) $get['act'] = "default";
	switch ($get['act']) {
		case 'add':{

			if (isset($post['name'])) {

				$errors=[];
				if (isset($post['surname'],$post['age'],$post['email'],$post['salary'],$post['position'])) {
					if (!empty(trim($post['name']) && trim($post['surname']) && trim($post['email']) &&trim($post['salary']) && trim($post['position']))) {
				echo "123";
				die();
					}else{
						$errors[]="Fields cannot be empty";
					}
					
				}else{
					$errors[]="You must fill required fields";
				}
			}

			include('views/back/users/users_add.php');
			break;	
		}
		default:{
			$result = db_query("SELECT * FROM `users` ORDER BY `id` DESC");
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
			include('views/back/users/users_main.php');
			break;
		}
	}

}else{

include('views/back/home/home_login.php');
}
?>