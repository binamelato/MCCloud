<?
if(isset($_POST['add_foll'])){
	$par1 = $_GET['par'];
	$par2 = $_SESSION['nLog'];
	mysqli_query($link, "INSERT INTO `o_followers`(`f_master`, `f_author`) VALUES ('{$par1}','{$par2}')");
}
if(isset($_POST['del_foll'])){
	$par3 = $_GET['par'];
	$par4 = $_SESSION['nLog'];
	mysqli_query($link, "DELETE FROM `o_followers` WHERE f_master='{$par3}' and f_author='{$par4}'");
}
if(isset($_POST['ads_foll'])){
	$par1 = $_POST['ds_polz'];
	$par2 = $_SESSION['nLog'];
	if($par1 !=''){
	mysqli_query($link, "INSERT INTO `o_followers`(`f_master`, `f_author`) VALUES ('{$par1}','{$par2}')");
	}
}
if(isset($_POST['rep_send'])){
	$lar1 = $_POST['rep_option'];
	$lar2 = $_POST['rep_text'];
	$lar3 = $_SESSION['nLog'];
	$lar4 = $_GET['par'];
	$lar5 = $_SERVER['REMOTE_ADDR'];//"1.1.1.1";//
	$lar6 = date("Y-m-d");//"17-05-17";//
	if(isset($lar1)){
		if(isset($lar2)){
		$qvaak = mysqli_query($link, "INSERT INTO `z_report`(`r_author`, `r_master`, `r_type`, `r_text`, `r_ip`, `r_date`, `valid`) VALUES ('{$lar4}','{$lar3}','{$lar1}','{$lar2}','{$lar5}','{$lar6}','1')");
		}
	}
}
?>