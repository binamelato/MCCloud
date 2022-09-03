<?
if(isset($_POST['submit'])){
$master = $_POST['master'];	
$mess = strip_tags($_POST['mess']);	
$author = $_SESSION['nLog'];	
$b_date = date("F j, Y, g:i"); //'2013-05-13 11:37:00';//
if ($mess != ''){
//mysqli_query($link, "SET NAMES utf8");
$poi0 = mysqli_query($link, "SELECT o_author FROM o_track WHERE o_url='{$master}'");
$vpoi0 = mysqli_fetch_array($poi0);
$master_u = $vpoi0['o_author'];
$predl = mysqli_query ($link, "SELECT 1 FROM o_board WHERE `master`='{$master}' and `mess`='{$mess}' and `author`='{$author}' ");
$orage = mysqli_num_rows($predl);
if($orage != 0){}else{
$query = mysqli_query ($link, "INSERT INTO `o_board`(`mess`,`author`,`date`,`master`,`master_u`) VALUES ('{$mess}','{$author}','{$b_date}','{$master}','{$master_u}')");
}}}

if(isset($_POST['add_comm'])){
$comm_id = $_POST['comm_id'];	
$comm = strip_tags($_POST['comm']);	
$comm_author = $_SESSION['nLog'];	
$comm_date = date("F j, Y, g:i"); //'2013-05-13 11:37:00';//
if ($comm != ''){
//mysqli_query($link, "SET NAMES utf8");
$pnedl = mysqli_query ($link, "SELECT 1 FROM o_comments WHERE `comm_id`='{$comm_id}' and `comm`='{$comm}' and `comm_author`='{$comm_author}' ");
$onage = mysqli_num_rows($pnedl);
if($onage != 0){}else{
$query_c = mysqli_query ($link, "INSERT INTO `o_comments`(`comm_id`,`comm`,`comm_author`,`comm_date`) VALUES ('{$comm_id}','{$comm}','{$comm_author}','{$comm_date}')");
}}}

if(isset($_POST['do_add'])){
	$par1 = $_POST['add_auth'];
	$par2 = $_SESSION['nLog'];
	$par3 = $_GET['opt'];
	$q_new = mysqli_query($link, "SELECT * FROM o_track WHERE o_url='{$_GET['g']}' LIMIT 1");
	$q_pa = mysqli_fetch_array($q_new);
	$q_panda = $q_pa['full_like'];
	$new_qu = $q_panda + 1;
	mysqli_query($link, "INSERT INTO `o_like`(`l_master`, `l_author`, `l_object`) VALUES ('{$par1}','{$par2}','{$par3}')");
	mysqli_query ($link, "UPDATE `o_track` SET `full_likes` = '{$new_qu}' WHERE `o_url` = '{$_GET['g']}'");
}
if(isset($_POST['do_infa'])){
	$pas1 = $_POST['add_famst'];
	$pas2 = $_SESSION['nLog'];
	$pas3 = $_GET['opt'];
	mysqli_query($link, "INSERT INTO `o_favorite`(`f_master`, `f_author`, `f_object`) VALUES ('{$pas1}','{$pas2}','{$pas3}')");
}
if(isset($_POST['do_outfa'])){
	$pak1 = $_POST['de_unmst'];
	$pak2 = $_SESSION['nLog'];
	$pak3 = $_GET['opt'];
	mysqli_query($link, "DELETE FROM `o_favorite` WHERE f_object='{$pak3}' and f_author='{$pak2}'");
}
?>