<?
$cpcv = 5;
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
	<div style='background:url(http://".$_SERVER['HTTP_HOST']."/include/afon/".$au_fon.");background-position:0px ".$lu_ll."px;' class='sai_mu'>
		<div>";
		if($dot1 == $_SESSION['nLog']){
		echo"<div class=' _prof_f _mji_'>
			<img class='ui_av' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$au_avatar."'>";
		}else{echo"<div class=' _prof_d _mji_'>
		<img class='ui_av' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$au_avatar."'>";}
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
	$dot1 = $_GET['par'];
	$hiwa = mysqli_query($link, "SELECT 1 FROM o_awards WHERE `a_nick`='{$dot1}'");
	$ji_mum = mysqli_num_rows($hiwa);
	if($ji_mum != 0){
	$giwa = mysqli_query($link, "SELECT * FROM o_awards WHERE `a_nick`='{$dot1}'");
	while ($ros5 = mysqli_fetch_array($giwa)){
	$ah_ward = $ros5['a_award'];
		$miwa = mysqli_query($link, "SELECT * FROM awards WHERE `id`='{$ah_ward}'");
		$ros4 = mysqli_fetch_array($miwa);
		$w_pic = $ros4['w_pic'];
		$w_opis = $ros4['w_opis'];
	echo"		
			<div class='krug_g2 pprt1'>
				<div class='krug_4'>
						<img src='http://".$_SERVER['HTTP_HOST']."/content/awards/".$w_pic."' class='krug_im'>
					<div class='kijo'>
						<a class='dec_b'>".$w_opis."</a>
					</div>

				</div>
			</div>";
		}
	}else{
		echo"<div class='oioi_toto t0_zelist'></div>
				<div class='t1_menderl'>
					<p>".$dot1." have not personal blogs yet.</p>
				</div>";
	}
?>			
	</div>
	</div>
	<div class='_kji_ kas_pp'>
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
