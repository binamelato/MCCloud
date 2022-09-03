<?php
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
	require_once('modules/pages/profile_page/profile_main_page_form.html');

?>
<div id="header" class='_t'>
<?
require('modules/pages/profile_page/prof_menu.php');
?>
	<div class="ui_pr_tr">
		<div class="_kji_ kap_pp">
		<div id="porta_s" >
<?  
if($dot1 == @$_SESSION['nLog']){
	$quertr50 = mysqli_query($link, "SELECT 1 FROM o_track WHERE `o_author`='{$dot1}' and `type_dost`!='2'");
	$kj_mum = mysqli_num_rows($quertr50);
	if($kj_mum != 0){
	$query55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_author`='{$dot1}' and `type_dost`!='2'");
	while ($row5 = mysqli_fetch_array($query55)){
	$p_id = $row5['id'];
	$p_nm = $row5['o_name'];
	$p_url = $row5['o_url'];
	$p_logo = $row5['o_lab'];
	$p_auth = $row5['o_author'];
	$p_dat = $row5['o_date'];
	$p_dost = $row5['type_dost'];
	echo"		
<div class='krug_g2'>
	<div class='krug_fd'>
		<div class='_mji_'>";
		if($p_dost == 0){
		echo"<div class='kijo ambrel' >
			<img src='".$host."/content/sys/privat.png'>
			<div>Private</div>
		</div>";
		}else{}
		echo"
			<div class='track_lab_l'>
				<img src='".$host."/content/octava/tracks/label/".$p_logo."' class='krug_im'>
			</div>
			<div class='kijo' >";
			if($p_dost == 0){}else{
			echo"
			<div class='tr-dopa-pti'>
				<div>
					<ul class='tr-non-op'>
						<li><a class='a_fvpl' ><img src='".$host."/content/sys/sett.png'>Functions</a></li>
					</ul>
				</div>
					<ul class='tr-optis'>
						<li><a class='a_ddpl' data-id='".$p_id."'><img src='".$host."/content/sys/pl2_b.png'>to playlist</a></li>
						";
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_favorite WHERE f_author='{$_SESSION['nLog']}' And f_object='{$p_url}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
	echo"<li id='f2' data-url='".$p_url."'><a class='a_fvpl ifav'><img src='".$host."/content/sys/favo.png'>In favorite</a></li>";//id='f2".$trac."'
}else{
	echo"<li id='f2' data-url='".$p_url."'><a class='a_fvpl ufav'><img src='".$host."/content/sys/favo_b.png'>Un favorite</a></li>";//id='f2".$trac."'
	}
						echo"
					</ul>
			</div>";
			}
		echo"
		</div>
		</div>
		<div class='_mji_'>
			<div id='osr_os'>
<div id='ag1' class='audiogallery' style='opacity:0;'>
<div class='items'>

	<div id='player1' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='".$host."/content/octava/tracks/".$p_url.".mp3' data-sourceogg='".$host."/content/octava/tracks/".$p_url.".ogg'>
	<div class='meta-artist'><a href='/search/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/".$p_auth."/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>

	</div>

	
</div>
</div>

			</div>
		</div>
	</div>
</div>";
		}}else{
		echo"<div class='oioi_many t0_zelist'></div>
			 <div class='t1_menderl'>
				<p>Nothing to hear here.</p>
			</div>";
		}
		}else{
	$trac = 0;
	$quertr50 = mysqli_query($link, "SELECT 1 FROM o_track WHERE `o_author`='{$dot1}' and `type_dost`='1'");
	$kj_mum = mysqli_num_rows($quertr50);
	if($kj_mum != 0){
	$query55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_author`='{$dot1}' and `type_dost`='1'");
	while ($row5 = mysqli_fetch_array($query55)){
	$p_id = $row5['id'];
	$p_nm = $row5['o_name'];
	$p_url = $row5['o_url'];
	$p_logo = $row5['o_lab'];
	$p_auth = $row5['o_author'];
	$p_dat = $row5['o_date'];
	$trac = $trac +1;
	echo"		
<div class='krug_g2'>
	<div class='krug_fd'>
		<div class='_mji_'>
			<div class='track_lab_l'>
				<img src='".$host."/content/octava/tracks/label/".$p_logo."' class='krug_im'>
			</div>
			<div class='kijo' >";
	if(isset($_SESSION['nLog'])){
	echo"
				<div class='tr-dopa-pti'>
					<div>
					<ul class='tr-non-op'>
						<li><a class='a_fvpl' ><img src='".$host."/content/sys/sett.png'>Functions</a></li>
					</ul>
					</div>
					<ul class='tr-optis'>
						<li><a class='a_ddpl' data-id='".$p_id."'><img src='".$host."/content/sys/pl2_b.png'>to playlist</a></li>
						";
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_favorite WHERE f_author='{$_SESSION['nLog']}' And f_object='{$p_url}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
	echo"<li id='f2' data-url='".$p_url."'><a class='a_fvpl ifav'><img src='".$host."/content/sys/favo.png'>In favorite</a></li>";//".$trac."
}else{
	echo"<li id='f2' data-url='".$p_url."'><a class='a_fvpl ufav'><img src='".$host."/content/sys/favo_b.png'>Un favorite</a></li>";//d='f2".$trac."'
	}
						echo"
					</ul>
				</div>";
	}else{}
	echo"
			</div>
		</div>
		<div class='_mji_'>
			<div id='osr_os'>
<div id='ag1' class='audiogallery' style='opacity:0;'>
<div class='items'>

	<div id='player1' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='".$host."/content/octava/tracks/".$p_url.".mp3' data-sourceogg='".$host."/content/octava/tracks/".$p_url.".ogg'>
	<div class='meta-artist'><a href='/search/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/".$p_auth."/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>

	</div>

	
</div>
</div>

			</div>
		</div>
	</div>
</div>";
		}}else{
		echo"<div class='oioi_many t0_zelist'></div>
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
