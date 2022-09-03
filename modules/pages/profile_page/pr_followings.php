<?
$ix_aa = mysqli_query($link, "SELECT f_master,f_author FROM o_followers WHERE f_author='{$dot1}'");
$cjk_x = mysqli_num_rows($ix_aa);
if($cjk_x != 0){
echo"
<div class='med_i_for'>
			<div class='like_li'>
				<img class='fagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/group_b.png'>";
$dokk = mysqli_query($link, "SELECT id FROM o_followers WHERE f_author='{$dot1}'");
$nm_dkk = mysqli_num_rows($dokk);
echo"
				<span style='vertical-align:top;'>".$nm_dkk." following</span>
				<a href='/".$dot1."/following'><span style='vertical-align:top;float:right;'>View all</span></a>

			</div>
			<div class='like_pho'>
				<ul class='men_fgn_toi'>";

$ih_aa = mysqli_query($link, "SELECT f_master,f_author FROM o_followers WHERE f_author='{$dot1}' Limit 4");
while ($romm = mysqli_fetch_array($ih_aa)){
$ah_ma = $romm['f_master'];
$ah_au = $romm['f_author'];
$ih_oo = mysqli_query($link, "SELECT * FROM profile WHERE login='{$ah_ma}'");
	$roih = mysqli_fetch_array($ih_oo);
	$fh_ma = $roih['avatar'];
	$fh_log = $roih['login'];
echo"
					<div>
						<div class='_mji_ preprof'><img id='li_po' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$fh_ma."' data-tag='".$fh_log."'></div>
						<div class='_mji_ ttop'>
								<div style='text-transform:capitalize;'><a href='/".$ah_ma."'>".$ah_ma."</a></div>
								<div>";
if(isset($_SESSION['nLog'])){
			$ih_dd = mysqli_query($link, "SELECT 1 FROM o_followers WHERE f_master='{$ah_ma}' and f_author='{$_SESSION['nLog']}'");
			$nn_oi = mysqli_num_rows($ih_dd);
			if($nn_oi == 0){
					if($ah_ma == $_SESSION['nLog']){
		$quehn = mysqli_query($link, "SELECT DISTINCT id FROM o_track WHERE o_author='{$ah_ma}' and type_dost='1'");
		$nuu_rov = mysqli_num_rows($quehn);
			$quehb = mysqli_query($link, "SELECT DISTINCT id FROM o_followers WHERE f_master='{$ah_ma}'");
			$nuu_rob = mysqli_num_rows($quehb);
			echo"<div style='font-size:11px;'>".$nuu_rov." tracks | ".$nuu_rob." followers</div>";
					}else{
							echo"<form method='post'><input type='hidden' name='ds_polz' value='".$ah_ma."'><input id='fol_nn' name='ads_foll' type='submit' value='Follow'>
								</form>";
							}
				}else{
					
		$quehj = mysqli_query($link, "SELECT DISTINCT id FROM o_track WHERE o_author='{$ah_ma}' and type_dost='1'");
		$nuu_row = mysqli_num_rows($quehj);
			$quehl = mysqli_query($link, "SELECT DISTINCT id FROM o_followers WHERE f_master='{$ah_ma}'");
			$nuu_rol = mysqli_num_rows($quehl);
			echo"<div style='font-size:11px;'>".$nuu_row." tracks | ".$nuu_rol." followers</div>";
						
				}
	}else{
		$quehj = mysqli_query($link, "SELECT DISTINCT id FROM o_track WHERE o_author='{$ah_ma}' and type_dost='1'");
		$nuu_row = mysqli_num_rows($quehj);
			$quehl = mysqli_query($link, "SELECT DISTINCT id FROM o_followers WHERE f_master='{$ah_ma}'");
			$nuu_rol = mysqli_num_rows($quehl);
			echo"<div style='font-size:11px;'>".$nuu_row." tracks | ".$nuu_rol." followers</div>";
	}							
							echo"
								</div>
						</div>
					</div>";
		}
echo"
				</ul>
			</div>
		</div>";
}else{/*echo $dot1." doesn't have following.";*/}
?>