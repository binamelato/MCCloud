<?
$cpcv = 3;
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
		<div>
		<div class=' _prof_d _mji_'>
			<img class='ui_av' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$au_avatar."'>
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
	//$dot1 = mysql_real_escape_string(strip_tags(trim($dot1))); 
	if($dot1 == @$_SESSION['nLog']){
	$quertr50 = mysqli_query($link, "SELECT 1 FROM o_playlist WHERE `pl_auth`='{$dot1}'");
	$kj_mum = mysqli_num_rows($quertr50);
	if($kj_mum != 0){
	$omonga = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_auth`='{$dot1}'");
	while ($xox5 = mysqli_fetch_array($omonga)){
	$pl_par0 = $xox5['pl_id'];
	$pl_par1 = $xox5['pl_name'];
	$pl_par2 = $xox5['pl_lab'];
	$pl_par3 = $xox5['pl_date'];
	$pl_par4 = $xox5['pl_genre'];
	$pl_par5 = $xox5['pl_dost'];
	echo"		
<div class='krug_g2'>
	<div class='krug_fd'>
		<div class='_mji_  _yji_ oystg'>";
		if($pl_par5 == 0){
		echo"<div class='kijo ambrel' >
			<img src='http://".$_SERVER['HTTP_HOST']."/content/sys/privat.png'>
			<div>Private</div>
		</div>";
		}else{}
		echo"
			<div class='track_lab_l'>
				<img src='http://".$_SERVER['HTTP_HOST']."/content/octava/playlists/".$pl_par2."' class='krug_im'>
			</div>
			<div class='kijo'>
			<div class='tr-dopa-pti'>
				<div>
					<ul class='tr-non-op'>
						<li><a class='a_fvpl' ><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/gear.png'>Functions</a></li>
					</ul>
				</div>
					<ul class='tr-optis'>
						<li><a class='a_eepl' href='/playlist/".$pl_par1."'><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/playlist.png'>View full</a></li>
						<li><a class='a_eepl' data-id='".$pl_par0."'><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/edit.png'>Edit playlist</a></li>
					</ul>
			</div>
			</div>
			<div></div>
		</div>
		<div class='_mji_ _yji_'>
			<div id='osr_os'>
<div id='ag1' class='audiogallery' style='opacity:0;'>
<div class='items'>
";
$korn=0;
$query55 = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM o_pltrack WHERE `id_pllist`='{$pl_par0}'");
while ($row5 = mysqli_fetch_array($query55)){
$dam_tra = $row5['id_pltrack'];
	$querl55 = mysqli_query($link, "SELECT * FROM o_track WHERE `id`='{$dam_tra}' limit 4");
	$rop5 = mysqli_fetch_array($querl55);
	$p_nm = $rop5['o_name'];
	$p_url = $rop5['o_url'];
	$p_logo = $rop5['o_lab'];
	$p_auth = $rop5['o_author'];
	$p_dat = $rop5['o_date'];
	$korn = $korn+1;
echo"
	<div id='player".$korn."' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_url.".mp3' data-sourceogg='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_url.".ogg'>
	<div class='meta-artist'><a href='/search/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/".$p_auth."/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>
	                            <div class='menu-description'>
                                <div class='menu-item-thumb-con'><div class='menu-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div></div>
                                <span class='the-name'>".$karmen." - ".$p_nm."</span>
                            </div>
	</div>
";
}
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
		
	}else{
	$quertr50 = mysqli_query($link, "SELECT 1 FROM o_playlist WHERE `pl_auth`='{$dot1}' and `pl_dost`='1'");
	$kj_mum = mysqli_num_rows($quertr50);
	if($kj_mum != 0){
	$omonga = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_auth`='{$dot1}' and `pl_dost`='1' ");
	while ($xox5 = mysqli_fetch_array($omonga)){
	$pl_par0 = $xox5['pl_id'];
	$pl_par1 = $xox5['pl_name'];
	$pl_par2 = $xox5['pl_lab'];
	$pl_par3 = $xox5['pl_date'];
	$pl_par4 = $xox5['pl_genre'];
	echo"		
<div class='krug_g2'>
	<div class='krug_fd'>
		<div class='_mji_  _yji_ oystg'>
			<div class='track_lab_l'>
				<img src='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$pl_par2."' class='krug_im'>
			</div>
			<div class='kijo'>
				<ul class='tr-non-op'>
						<li><a class='a_eepl' href='/playlist/".$pl_par1."'><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/playlist.png'>View full</a></li>
				</ul>
			</div>
			<div></div>
		</div>
		<div class='_mji_ _yji_'>
			<div id='osr_os'>
<div id='ag1' class='audiogallery' style='opacity:0;'>
<div class='items'>
";
$korn=0;
$query55 = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM o_pltrack WHERE `id_pllist`='{$pl_par0}'");
while ($row5 = mysqli_fetch_array($query55)){
$dam_tra = $row5['id_pltrack'];
	$querl55 = mysqli_query($link, "SELECT * FROM o_track WHERE `id`='{$dam_tra}' limit 4");
	$rop5 = mysqli_fetch_array($querl55);
	$p_nm = $rop5['o_name'];
	$p_url = $rop5['o_url'];
	$p_logo = $rop5['o_lab'];
	$p_auth = $rop5['o_author'];
	$p_dat = $rop5['o_date'];
	$korn = $korn+1;
echo"
	<div id='player".$korn."' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_url.".mp3' data-sourceogg='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_url.".ogg'>
	<div class='meta-artist'><a href='/search/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/".$p_auth."/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>
	                            <div class='menu-description'>
                                <div class='menu-item-thumb-con'><div class='menu-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div></div>
                                <span class='the-name'>".$karmen." - ".$p_nm."</span>
                            </div>
	</div>
";
}
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
