<?php
if(isset($_SESSION['user_id'])){
	$que = mysqli_query($link, "SELECT id,avatar FROM profile  WHERE `id`='{$_SESSION['user_id']}'");
	$ro8 = mysqli_fetch_array($que);
	$ava_sd = $ro8['avatar'];
	require_once('nav_auth.php');
}else{	
	require_once('nav_nauth.php');
}
?>