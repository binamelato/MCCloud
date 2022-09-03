<?
echo"
<div>
				<div class='pr_ava'>
					<img src='".$fzm_host."/include/avatars/".$qew_avatar."'>
				</div>
				<div class='pod_av0'><a href='/".$au_nm."'>".$au_nm."</a></div>
				<div class='pod_av0'>
					<img class='sagio _mji_' src='".$fzm_host."/content/sys/user-group.png'>
					<div class='pod_se _mji_'>";
$dokk = mysqli_query($link, "SELECT id FROM o_followers WHERE f_master='{$p_auth}'");//подписки
$nm_dkk = mysqli_num_rows($dokk);
echo"	
					<div id='chis_l'>".$nm_dkk."</div>
					</div>
					<img class='sagio _mji_' src='".$fzm_host."/content/sys/music.png'>
					<div class='pod_se _mji_'>";
$cvx = mysqli_query($link, "SELECT id FROM o_track WHERE o_author='{$p_auth}'");//треки
$nm_cvx = mysqli_num_rows($cvx);
echo"
					<div id='chis_l'>".$nm_cvx."</div>
					</div>
				</div>";
				
if(isset($_SESSION['nLog'])){
if($p_auth == $_SESSION['nLog']){
	echo"
		<div class='d_ui_pn' style='margin-top:10px;width:50px;margin:auto;'>
		</div>
		";
}else{
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_followers WHERE f_master='{$p_auth}' And f_author='{$_SESSION['nLog']}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
				echo"
				<div class='d_ui_pn' style='margin-top:10px;width:50px;margin:auto;'>
				<form class='_mji_' method='post'>
					<input id='fol_by' name='add_auth'  type='hidden' value='".$p_auth."'>
					<input id='fol_by' name='add_foll'  type='submit' value='Follow'>
				</form>
				</div>
				";
}else{
				echo"
				<div class='d_ui_pn' style='margin-top:10px;width:60px;margin:auto;'>
				<form class='_mji_' method='post'>
					<input id='fol_by' name='add_auth'  type='hidden' value='".$p_auth."'>
					<input id='fol_by' name='del_foll'  type='submit' value='Unfollow'>
				</form>
				</div>
				";
}
}
}
echo"
</div>";
?>