<?
session_start(); 
require_once ('../../func/gen0.php');
/*
if(isset($_POST['q_up'])){
	$par1 = $_POST['q_par'];//привести к числу
	$par2 = $_SESSION['nLog'];
	$querl = mysqli_query($link, "SELECT 1 FROM `za_usl` WHERE z_nick='{$par2}' and z_id = '{$par1}'");
	$nu_r = mysqli_num_rows($querl);
if($nu_r == 0){
		$quera = mysqli_query($link, "SELECT id,heal,max_hale FROM `zayavk` WHERE id='{$par1}'");
		$rat = mysqli_fetch_array($quera);
		$sm_p1 = $rat['heal'];
		$sm_p2 = $rat['max_hale'];
		$nen1 = $sm_p1+1;
		$nen2 = $sm_p2+1;
		$nen3 = '2013-05-13 11:37:00';//date("y.m.d G:i"); //
		mysqli_query($link, "INSERT INTO `za_usl`(`z_id`, `z_nick`, `z_date`) VALUES ('{$par1}','{$par2}','{$nen3}')");
		mysqli_query($link, "UPDATE `zayavk` SET `heal`='{$nen1}', `max_hale`='{$nen2}' WHERE `id` = '{$par1}'");
}else{echo"";}
}
if(isset($_POST['q_down'])){
	$par1 = $_POST['q_par'];//привести к числу
	$par2 = $_SESSION['nLog'];
	$querl = mysqli_query($link, "SELECT 1 FROM `za_usl` WHERE z_nick='{$par2}' and z_id = '{$par1}'");
	$nu_r = mysqli_num_rows($querl);
if($nu_r == 0){
		$quera = mysqli_query($link, "SELECT id,heal,max_hale FROM `zayavk` WHERE id='{$par1}'");
		$rat = mysqli_fetch_array($quera);
		$sm_p1 = $rat['heal'];
		$sm_p2 = $rat['max_hale'];
		$nen1 = $sm_p1;
		$nen2 = $sm_p2+1;
		$nen3 = '2013-05-13 11:37:00';//date("y.m.d G:i"); //
		mysqli_query($link, "INSERT INTO `za_usl`(`z_id`, `z_nick`, `z_date`) VALUES ('{$par1}','{$par2}','{$nen3}')");
		mysqli_query($link, "UPDATE `zayavk` SET `heal`='{$nen1}', `max_hale`='{$nen2}' WHERE `id` = '{$par1}'");
}else{echo"";}
}*/
require_once ('../../system/include/header.php');
?>

<body>
<div class="in_fol"><? require_once ('../../system/include/signup_in.php'); ?></div>
<div id="gkHeader" class="mess frontpage">
<div class="mess">
			<div id="auth_foln" style='position:absolute;left:20px;z-index:199;'>

			</div>
		</div>
		<div style='height:188px;background-image:url("/content/ie_prev/82.jpg");background-size:cover;'></div>
</div>
<div id='header_t'>
<div class="hup_hap">
	<div class=''>
	<div class="obve_nx _mji_" style=''>
	<div id='que_pan'>
<?/*
if (isset($_GET['par'])) 
{ 
$profile = $_GET['par'];*/
$q_new = mysqli_query($link, "SELECT * FROM news WHERE page_n='{$profile}'");
	while ($qq_new = mysqli_fetch_array($q_new))
	{
	$id_ws = $qq_new['id'];
	$name_ws = $qq_new['name_n'];
	$text_ws = $qq_new['text_n'];
	$page_ws = $qq_new['page_n'];
	$autor_ws = $qq_new['autor_n'];
	$pic_ws = $qq_new['pic_n'];
	$data_ws = $qq_new['data'];
		echo"
		<div class='q_id_1'>
			<div class='qu_hled'><a href='/blog'>blog</a> / <a href='/blog/".$id_ws."'>".$name_ws."</a></div>
			<div class='qu_head'><a>".$name_ws."</a><div class='qu_cat'>blog</div></div>
			<div class='qu_cat ss_ui_v mmn_d'>".$text_ws." </div>
			<div class='qu_bod _mji_ ss_ui_t'>Author: ".$autor_ws." |</div>
			<div class='qu_pod _mji_ ss_ui_t'>Date: ".$data_ws."</div>
			";
		echo"
		</div>
		";
	}
/*}*/
?>
		
	</div>

	</div>
	<div class='_mji_' style='width:300px;'>
		<div class='med_i_xx'>
			<div class=''>
				<?
				require_once ('../include/blog/right_cat.php');
				?>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?
require_once ('../../system/include/footer.php');
?>
