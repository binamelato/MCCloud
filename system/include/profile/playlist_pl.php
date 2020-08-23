<?
echo"
<div id='ass' class='formatiko'>
	<div class='lex_c'>
		<a href=''><span class='clo_clo'></span></a>
	</div>
	<div class='messxz'>
	<div id='gigos'><div class='aco_leg'>Playlists:</div></div>
	<div id='pl-cunt'>
		<div class='pl_in_sp _kji_'>
		<div class='pl_im_sp'>";
	$omonga = mysqli_query($link, "SELECT 1 FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}'");
	$orage = mysqli_num_rows($omonga);
	if($orage != 0){
		$quel = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}'");
		while ($rod = mysqli_fetch_array($quel)){
		$p_id = $rod['pl_id'];
		$p_name = $rod['pl_name'];
		$p_lab = $rod['pl_lab'];
		$p_genr = $rod['pl_genre'];
		echo"
		<div class='pl_in_di' data-num='".$p_id."'>
			<div class='ls_in_im _mji_'>
				<img src='/content/octava/playlists/".$p_lab."'>
			</div>
			<div class='ls_in_atar _mji_'>
				<a>".$p_name."</a>
			</div>
		</div>";
		}
	}else{
		echo"
		<div class=''>
			<div class=''>
			</div>
		</div>";
	}
	echo"
		</div>
			<div>
				<input id='se_put' class='dd_pli' type='submit' value='Create playlist'>
			</div>
		</div>
		<div class='pl_in_mor _kji_'>
			<div class='pl_in_dat'></div>
			<div class='pl_podol'>";

echo"	
			</div>
		</div>
	</div>
	</div>
</div>";
?>