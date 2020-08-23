<?
if(isset($_POST['z_messto'])) {
	$lsx_author = $_SESSION['nLog'];
	$lsx_to = $_POST['to_pe'];
	$lsx_text = $_POST['mess_pe'];	
	$lsx_date = date("y.m.d G:i:s");
	if(isset($lsx_to)){
		if(isset($lsx_text)){
			if($lsx_text != ''){
	$query = mysqli_query ($link, "INSERT INTO `z_mess`(`r_author`,`r_master`,`r_text`,`r_ip`,`r_date`,`chit`) VALUES ('{$lsx_author}','{$lsx_to}','{$lsx_text}','','{$lsx_date}','1')");
}}
}
}
$fuoo = mysqli_query($link, "SELECT chit,id FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' and `r_author`='{$_GET['par']}' and `chit`='1' order by id DESC Limit 1");
	$foo = mysqli_fetch_array($fuoo);
	$f_chit = $foo['chit']-1;
	mysqli_query ($link, "UPDATE `z_mess` SET `chit` = '{$f_chit}' WHERE `r_master`='{$_SESSION['nLog']}' and `r_author`='{$_GET['par']}' and `chit`='1'");
	
?>