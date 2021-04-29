<?php

if (!defined('MYADMINSCRIPT')) {
	exit();
}
if (isset($_SESSION['adm_logged_in'])) {

	if (!isset($get['act']))$get['act'] = "default";
	switch ($get['act']) {
		case 'edit':{
			$result= db_query("SELECT * FROM `users` WHERE `id`='".(int)$get['id']."'");
			if (mysqli_num_rows($result)>0) {
				$item=mysqli_fetch_assoc($result);

				if (isset($post['name'])) {
				$errors=[];
				if (isset($post['surname'],$post['age'],$post['email'],$post['salary'],$post['age'],$post['position_id'],$post['login'],$post['password'])) {

					if (!empty(trim($post['name'])) && !empty(trim($post['surname'])) && !empty(trim($post['age'])) && !empty(trim($post['salary'])) && !empty(trim($post['email'])) && !empty(trim($post['position_id']))&& !empty(trim($post['login']))&& !empty(trim($post['password']))) {
						$admin=(isset($post['admin']))?1:0;
						$blocked=(isset($post['blocked']))?1:0;
						$deleted=(isset($post['deleted']))?1:0;
						$password_encrypted = password_hash($post['password'], PASSWORD_BCRYPT);

						$result=db_query("UPDATE `users` SET 
							`name`='".$post['name']."',
							`surname`='".$post['surname']."',
							`age`='".$post['age']."',
							`email`='".$post['email']."',
							`salary`='".$post['salary']."',
							`position_id`='".$post['position_id']."',
							`login`='".$post['login']."',
							`password`='".$password_encrypted."',
							`admin`='".$admin."',
							`blocked`='".$blocked."',
							`deleted`='".$deleted."'
							WHERE `id`='".(int)$get['id']."'
							");
						if ($result) {
							$success="Users added successfully";
							$result= db_query("SELECT * FROM `users` WHERE `id`='".(int)$get['id']."'");
							$item=mysqli_fetch_assoc($result);
						}else{
							$errors[]="Internal error occured ";
						}
					}else{
						$errors[]="Fields cannot be empty";
					}
					
				}else{
					$errors[]="You must fill required fields";
				}
			}


			include('views/back/users/users_edit.php');
			}else{
				header("Location:".ADMIN_SCRIPT."?mod=users");
			}
			break;
		}
		case 'add':{
			if (isset($post['name'])) {
				$errors=[];
				if (isset($post['surname'],$post['age'],$post['email'],$post['salary'],$post['age'],$post['position_id'],$post['login'],$post['password'])) {

					if (!empty(trim($post['name'])) && !empty(trim($post['surname'])) && !empty(trim($post['age'])) && !empty(trim($post['salary'])) && !empty(trim($post['email'])) && !empty(trim($post['position_id']))&& !empty(trim($post['login']))&& !empty(trim($post['password']))) {
						$admin=(isset($post['admin']))?1:0;
						$blocked=(isset($post['blocked']))?1:0;
						$deleted=(isset($post['deleted']))?1:0;
						$password_encrypted = password_hash($post['password'], PASSWORD_BCRYPT);

						$result=db_query("INSERT INTO `users` SET 
							`name`='".$post['name']."',
							`surname`='".$post['surname']."',
							`age`='".$post['age']."',
							`email`='".$post['email']."',
							`salary`='".$post['salary']."',
							`position_id`='".$post['position_id']."',
							`login`='".$post['login']."',
							`password`='".$password_encrypted."',
							`admin`='".$admin."',
							`blocked`='".$blocked."',
							`deleted`='".$deleted."'
							");
						if ($result) {
							$success="Users added successfully";
						}else{
							$errors[]="Internal error occured ";
						}
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
			$result = db_query("SELECT * FROM `users`");
			$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
			
			//$result=db_query("SELECT * FROM `positions` WHERE id='$users['position_id']'");
			$result=db_query("SELECT
								  users.id AS users_id,
								  positions.name AS position_name,
								  positions.id AS position_id
								FROM users
								JOIN positions ON users.position_id=positions.id");
			$positions = mysqli_fetch_all($result, MYSQLI_ASSOC);
			

			include('views/back/users/users_main.php');
			break;
		}
	}

}else{

include('views/back/home/home_login.php');
}
?>