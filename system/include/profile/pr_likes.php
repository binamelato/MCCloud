<?
$in_aa = mysqli_query($link, "SELECT DISTINCT l_master,l_author FROM o_like WHERE l_author='{$dot1}'");
$cjk_l = mysqli_num_rows($in_aa);
if($cjk_l != 0){
echo"
<div class='med_i_for'>
			<div class='like_li'>
				<img class='sagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/heart.png'>";
$llb = mysqli_query($link, "SELECT id FROM o_like WHERE l_author='{$dot1}'");//подписки
$nm_llb = mysqli_num_rows($llb);
echo"	<span style='vertical-align:top;'>".$nm_llb." Likes</span>			
		<a href='/".$dot1."/likes'><span style='vertical-align:top;float:right;'>View all</span></a>
			</div>
			<div class='like_pho'>
				<ul class='men_fgn_toi'>";

$il_aa = mysqli_query($link, "SELECT l_master,l_author,l_object FROM o_like WHERE l_author='{$dot1}' Limit 3");
while ($rojj = mysqli_fetch_array($il_aa)){
$a_ma = $rojj['l_master'];
$a_au = $rojj['l_object'];
$q55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_url`='{$a_au}' and `type_dost`='1'");
	$vxb1 = mysqli_fetch_array($q55);
	$ip_id = $vxb1['id'];
	$ip_nm = $vxb1['o_name'];
	$ip_url = $vxb1['o_url'];
	$ip_logoz = $vxb1['o_lab'];
	$ip_authz = $vxb1['o_author'];
		$xc00 = mysqli_query($link, "SELECT avatar FROM profile WHERE `login`='{$ip_authz}'");
		$ysyk = mysqli_fetch_array($xc00);
		$ys_ava = $ysyk['avatar'];
	echo"<div>
						<div class='_mji_'>
						<img id='ty_po' src='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$ip_logoz."'>
						</div>
						<div class='_mji_ ttop'>
							<div class='oiu_ji preprof'>
								<a href='/".$a_ma."' data-tag='".$ip_authz."' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ys_ava."'>".$a_ma."</a>
							</div>
							<div class='oim_ji'>
								<a href='/".$ip_auth."/".$ip_url."'>".$ip_nm."</a>
							</div>
						</div>
		</div>
";

}

	echo"		</ul>
			</div>
		</div>
";
}else{/*echo $dot1." doesn't have one likes";*/}
?>