<?
echo'<div id="fol_knm">
<div class="_mji_ pprt1">';
if(isset($_SESSION['nLog'])){
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_like WHERE l_master='{$p_auth}' And l_author='{$_SESSION['nLog']}' And l_object='{$profile}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
	if($p_dodt == 1){
	echo'
		<form method="post" class="_mji_">
		<input name="add_auth"  type="hidden" value="'.$p_auth.'">
		<input type="submit" id="fol_bb" name="do_add" value="like">
		</form>';
	}
}
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_favorite WHERE f_master='{$p_auth}' And f_author='{$_SESSION['nLog']}' And f_object='{$profile}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
	if($p_dodt == 1){
	echo'
		<form method="post" class="_mji_">
		<input name="add_famst"  type="hidden" value="'.$p_auth.'">
		<input type="submit" id="fol_bb" name="do_infa" value="In favorite.">
		</form>
			';
		}
}else{
	echo'
		<form method="post" class="_mji_">
		<input name="de_unmst"  type="hidden" value="'.$p_auth.'">
		<input type="submit" id="fol_bb" name="do_outfa" value="Un favorite.">
		</form>';
	}
	if($p_dodt == 1){
		echo"<input type='button' id='fol_bb' data-id='".$p_id."' value='to playlist.' class='a_ddpl'>";
	}
}else{}
if(isset($_SESSION['nLog'])){
	$querx = mysqli_query($link, "SELECT 1 FROM o_track WHERE o_url='{$_GET['opt']}'  and o_author='{$_SESSION['nLog']}'");//
	$_morx = mysqli_num_rows($querx);
	if($_morx == 1){
		echo'<input type="button" id="fol_bb" class="do_retrack" name="do_menda" value="Edit track" data-id="'.$p_id.'">';
	}else{echo'drisha';}
}else{echo"Gavnina";}
echo'</div>
<div class="_mji_ up_pan">
	<span>
				<div class="_mji_">
					<div class="_mji_ nd-dat">'.$slol.'</div>
					<div class="_mji_ d-ply"><img src="/content/sys/plap2.png"></div>
				</div>
				<div class="_mji_">
					<div class="_mji_ nd-dat">'.$lel.'</div>
					<div class="_mji_ d-ply"><img src="/content/sys/like2.png"></div>
				</div>
			</span>
</div>
</div>
';
?>