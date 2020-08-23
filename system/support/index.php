<?
session_start(); 
require_once ('../../func/gen0.php');
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
		$nen1 = $sm_p1;/*1-1*/
		$nen2 = $sm_p2+1;
		$nen3 = '2013-05-13 11:37:00';//date("y.m.d G:i"); //
		mysqli_query($link, "INSERT INTO `za_usl`(`z_id`, `z_nick`, `z_date`) VALUES ('{$par1}','{$par2}','{$nen3}')");
		mysqli_query($link, "UPDATE `zayavk` SET `heal`='{$nen1}', `max_hale`='{$nen2}' WHERE `id` = '{$par1}'");
}else{echo"";}
}
require_once ('../../system/include/header.php');
?>

<body>
<div class="in_fol"><? require_once ('../../system/include/signup_in.php'); ?></div>
<div id="gkHeader" class="mess frontpage">
<div class="mess">
			<div id="auth_foln" style='position:absolute;left:20px;z-index:199;'>

			</div>
		</div>
		<div style='height:188px;background-image:url("../../content/news/redeemer.jpg");background-size:cover;'></div>
</div>
<div id='header_t'>
<div class="hup_hap">
	<div class=''>
	<div class="obve_nx _mji_" style=''>
	<div id='que_pan'>
<?
if (isset($_GET['par'])) 
{ 
$profile = $_GET['par'];
$query = mysqli_query($link, "SELECT * FROM `zayavk` WHERE id='{$profile}'");
	while ($row = mysqli_fetch_array($query)){
		$id = $row['id'];
		$nick = $row['h_nick'];
		$tema = $row['h_tema'];
		$text = $row['h_text'];
		$razd = $row['h_razd'];
		$kol_ques = $row['h_k_an'];
		$heal = $row['heal'];
		$hale = $row['max_hale'];
		$date_ques = $row['h_date'];
		echo"
		<div class='q_id_1'>
			<div class='qu_hled'><a href='/support'>help</a> / <a href='/support/".$id."'>".$tema."</a></div>
			<div class='qu_head'><a>".$tema."</a><div class='qu_cat'>".$razd."</div></div>
			<div class='qu_cat ss_ui_v mmn_d'>".$text." </div>
			<div class='qu_bod _mji_ ss_ui_t'>Author: ".$nick." |</div>
			<div class='qu_pod _mji_ ss_ui_t'>Date: ".$date_ques."</div>
			";
			$queny = mysqli_query($link, "SELECT 1 FROM `za_usl` WHERE z_nick='{$_SESSION['nLog']}' and z_id='{$profile}'");
			$rony = mysqli_fetch_array($queny);
			if ($rony) {
			echo"
			<div class='q_uphy'>
			<div class='kl_1'>
				<span>Was this article helpful?</span>
			</div>
			<div class='kl_3'>
				<span>".$heal." out of ".$hale." found this helpful</span>
			</div>
			</div>
			";
			}
			else{
			echo"
			<div class='q_uphy'>
			<div class='kl_1'>
				<span>Was this article helpful?</span>
			</div>
			<div class='kl_2'>
			<form method='post'>
				<input type='hidden' name='q_par' value='".$id."'>
				<input type='submit' name='q_up' id='se_kut' value='Yes'>
				<input type='submit' name='q_down' id='se_kut' value='No'>
			</form>
			</div>
			<div class='kl_3'>
				<span>".$heal." out of ".$hale." found this helpful</span>
			</div>
			</div>
			";
			}
		echo"
		</div>
		";
	}
}
?>
		
	</div>

	</div>
	<div class='_mji_' style='width:300px;'>
		<div class='med_i_xx'>
			<div class=''>
				<ul class=''>
					<li><a>Get started</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/1";?>'>What is Warframecloud</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/11";?>'>Search on Warframecloud</a></li>
						</ul>
					<li><a>Account</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/2";?>'>Your Display Name and Profile URL</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/3";?>'>Profile image and header</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/6";?>'>Messaging</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/7";?>'>Commenting</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/8";?>'>Follower</a></li>
						</ul>
					<li><a>tracks</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/5";?>'>Uploading</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/4";?>'>Creating an Album</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/9";?>'>Likes</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/12";?>'>Mandachord</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/10";?>'>Unable to play tracks</a></li>
						</ul>
					<li><a >Security</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/15";?>'>Account security</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/14";?>'>copyright</a></li>
						</ul>
					<li><a >Rules</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/16";?>'>Basic rules</a></li>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/17";?>'>Online conduct</a></li>
						</ul>
					<li><a >Bugs</a></li>
						<ul class='' style='font-size:12px;'>
							<li><a href='<?echo"http://".$_SERVER['HTTP_HOST']."/support/13";?>'>bugs</a></li>
						</ul>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?
require_once ('../../system/include/footer.php');
?>
