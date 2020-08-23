<?
$cpcv = 2;
	$quei = mysqli_query($link, "SELECT 1 FROM users WHERE login='{$dot1}'");
	$roi = mysqli_fetch_array($quei);
	if ($roi) {
		$quex = mysqli_query($link, "SELECT * FROM profile WHERE login='{$dot1}'");
		$rox = mysqli_fetch_array($quex);
	$au_nm = $rox['login'];
	$au_id = $rox['id'];
	$au_avatar = $rox['avatar'];
	$au_rating = $rox['rating'];
	$au_fon = $rox['afon'];
	$au_kkd = $rox['kkode'];
			$qlex = mysqli_query($link, "SELECT * FROM o_titul WHERE id='{$au_kkd}'");
			$rlx = mysqli_fetch_array($qlex);
			$au_ll = $rlx['s_titul'];
			$qlel = mysqli_query($link, "SELECT * FROM prof_opt WHERE f_idprofile='{$au_nm}'");
				$rll = mysqli_fetch_array($qlel);
				$lu_ll = $rll['f_up'];
echo"
<div id='header' class='_g'>
	<div style='background:url(".$fzm_host."/include/afon/".$au_fon.");background-position:0px ".$lu_ll."px;' class='sai_mu'>
		<div>";
		if($dot1 == $_SESSION['nLog']){
		echo"<div class=' _prof_f _mji_'>
				<img class='ui_av' src='".$fzm_host."/include/avatars/".$au_avatar."'>";
		}else{echo"<div class=' _prof_d _mji_'>
		<img class='ui_av' src='".$fzm_host."/include/avatars/".$au_avatar."'>";}
		echo"
			</div>
			<div class='_mji_ _kik_'>
				<span>".$au_nm."</span>
				<div class='ev_ie'>
					<span>[".$au_ll."]</span>
				</div>
			</div>
		</div>
	</div>
</div>";

?>
<div id="header" class="_t">
<?
require('system/include/profile/prof_menu.php');
?>
	<div class="ui_pr_tr">
		<div class="_kji_ kap_pp">
		<div id="porta_s" >
<?  
	$quertr50 = mysqli_query($link, "SELECT 1 FROM o_album WHERE `a_author`='{$dot1}' and `type_dost`='1'");
	$kj_mum = mysqli_num_rows($quertr50);
	if($kj_mum != 0){
	$omonga = mysqli_query($link, "SELECT * FROM `o_album` WHERE `a_author`='{$dot1}' and `type_dost`='1'");
	while ($xox5 = mysqli_fetch_array($omonga)){
	$idadis = $xox5['id'];
	$karmen = $xox5['a_name'];
	$epis = $xox5['a_lab'];
	echo"		
<div class='krug_g2'>
	<div class='krug_fd'>
		<div class='_mji_  _yji_ oystg'>
			<div class='track_lab_l' data=".$idadis.">
				<img src='".$fzm_host."/content/octava/tracks/label/".$epis."' class='krug_im'>
			</div>
			<div class='kijo'>";
			require('system/include/profile/albums_func.php');
			echo"
			</div>
		</div>
		<div class='_mji_ _yji_'>
			<div id='osr_os'>
				<div id='ag1' class='audiogallery' style='opacity:0;'>
					<div class='items'>";
						require('system/include/profile/albums_track.php');
						echo"	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>";
		}}else{
		echo"<div class='oioi_toto t0_zelist'></div>
				<div class='t1_menderl'>
					<p>Nothing to hear here.</p>
				</div>";
		}
?>			
	</div>
	</div>
	<div class='_kji_ kas_pp' >
<?
require('system/include/profile/ui_rightprof.php');
?>
	</div>
	</div>
</div>
<?
}else{
echo'this user is not yet!';
}
?>
