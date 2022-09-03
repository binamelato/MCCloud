<?
$ik_aa = mysqli_query($link, "SELECT 1 FROM o_board WHERE master_u='{$dot1}'");
$kkk_l = mysqli_num_rows($ik_aa);
if($kkk_l != 0){
echo"
<div class='med_i_for'>
			<div class='like_li'>
				<img class='cagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/comment_b.png'>";
$llb = mysqli_query($link, "SELECT id FROM o_board WHERE master_u='{$dot1}'");
$nm_llb = mysqli_num_rows($llb);
//href='/comments/".$dot1."'
echo"	<span style='vertical-align:top;'>".$nm_llb." Comments</span>			
		<a ><span style='vertical-align:top;float:right;'></span></a>
			</div>
			<div class='like_pho'>
				<ul class='men_fgn_toi'>";
$il_aa = mysqli_query($link, "SELECT * FROM o_board WHERE master_u='{$dot1}' order by id desc Limit 5");
while ($rojj = mysqli_fetch_array($il_aa)){
$g_id = $rojj['id'];
$g_master = $rojj['master'];
$g_author = $rojj['author'];
$g_mess = $rojj['mess'];
$vnim = strlen($g_mess);
	if($vnim>67){
		$x_comm = substr($g_mess, 0, 66)." ...";
	}else{
		$x_comm = substr($g_mess, 0, 66);
	}
$z55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_url`='{$g_master}'");
	$nino = mysqli_fetch_array($z55);
	$nin_name = $nino['o_name'];
$q55 = mysqli_query($link, "SELECT * FROM profile WHERE `login`='{$g_author}'");
	$vxb1 = mysqli_fetch_array($q55);
	$iz_id = $vxb1['id'];
	$iz_nm = $vxb1['login'];
	$iz_url = $vxb1['avatar'];
	echo"<div>
						<div class='_mji_ tem-u preprof'>
						<img id='ty_po' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$iz_url."' data-tag='".$iz_nm."'>
						";
						//require('system/include/pod_pl3.php');
						echo"
						</div>
						<div class='_mji_ ttop'>
							<div class='oim_ji pan-tch'>
								<a href='/".$iz_nm."/".$g_master."'>".$nin_name."</a>
							</div>
							<div class='oiu_ji pan-tch'>
								<a>&#171; ".$x_comm." &#187;</a>
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