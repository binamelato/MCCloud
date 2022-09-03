<?
	$query = mysqli_query($link, "SELECT * FROM `o_track` WHERE o_url='{$profile}'");
	$row = mysqli_fetch_array($query);
	$p_id = $row['id'];
	$p_nm = $row['o_name'];
	$p_url = $row['o_url'];
	$p_logo = $row['o_lab'];
	$p_albu = $row['o_album'];
	$p_auth = $row['o_author'];
	$p_info = $row['o_info'];
	$p_gnr = $row['o_genre'];
	$p_lenh = $row['o_lenth'];
	$p_dodt = $row['type_dost'];
	$p_lic = $row['full_likes'];
	$p_plo = $row['full_plays'];
if($p_lic >= 1000000){$lel =round($p_lic/1000000, 2).'M';}else{if($p_lic >= 1000){$lel =round($p_lic/1000, 2)."K";}else{$lel =$p_lic;}}
if($p_plo >= 1000000){$slol =round($p_plo/1000000, 2).'M';}else{if($p_plo >= 1000){$slol =round($p_plo/1000, 2)."K";}else{$slol =$p_plo;}}
	$quert = mysqli_query($link, "SELECT * FROM profile WHERE login='{$p_auth}'");
	$rot = mysqli_fetch_array($quert);
	$au_nm = $rot['login'];
	$au_id = $rot['id'];
	$qew_avatar = $rot['avatar'];
	$au_rating = $rot['rating'];
	$color1 = $rot['clr1'];
	$color2 = $rot['clr2'];
		$aa_n = mysqli_query($link, "SELECT * FROM o_album WHERE a_author='{$au_nm}' and id='{$p_albu}'");
		$aa_o = @mysqli_fetch_array($aa_n);
		$al_nm = $aa_o['a_name'];
		$al_gen = $aa_o['o_genre'];
		$al_plb = $aa_o['o_p.label'];
		$al_dat = $aa_o['o_date'];
			
if ($profile == $row['o_url']){
	if($p_dodt == 0){
		if($p_auth == $_SESSION['nLog']){
			require_once ('system/include/track/track_htm.php');
		}else{
			require_once ('system/errors/404.php');
		}
	}else{
		require_once ('system/include/track/track_htm.php');
	}
	
}
?>
