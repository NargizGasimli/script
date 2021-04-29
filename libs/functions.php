<?php

function mysqlEscapeArr($link, &$arr){
	array_walk_recursive($arr, function(&$item) use($link){
		$item=mysqli_real_escape_string($link,$item);
	});
}
function db_query($query){
	global $mydb_link;
	$result=mysqli_query($mydb_link,$query);
	// if (MODE=='DEBUG') {
	// 	if ($result===false) {
	// 		die(mysqli_error($link));
	// 	}
	// }
	return $result;
}

?>