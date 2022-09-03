<?
$pusy = $dot1;
$quei = mysqli_query($link, "SELECT 1 FROM profile WHERE login='{$pusy}'");
$roi = mysqli_fetch_array($quei);
if ($roi){
$queryk = mysqli_query($link, "SELECT avatar,login,kkode FROM `profile` WHERE `login`='{$pusy}'");
				$row11 = mysqli_fetch_array($queryk);
					$ks_ava = $row11['avatar'];
					$ks_nick = $row11['login'];
					$ks_kkd = $row11['kkode'];
						$qlex = mysqli_query($link, "SELECT id,s_titul FROM o_titul WHERE id='{$ks_kkd}'");
							$rlx = mysqli_fetch_array($qlex);
							$ku_ll = $rlx['s_titul'];

$querym = mysqli_query($link, "SELECT avatar,login,kkode FROM `profile` WHERE `login`='{$_SESSION['nLog']}'");
				$row1m = mysqli_fetch_array($querym);
					$ms_ava = $row1m['avatar'];
					$ms_nick = $row1m['login'];
					$ms_kkd = $row1m['kkode'];
						$qlem = mysqli_query($link, "SELECT id,s_titul FROM o_titul WHERE id='{$ms_kkd}'");
							$rlm = mysqli_fetch_array($qlem);
							$mu_ll = $rlm['s_titul'];
							
echo"
<div id='header' class='_pm'>
	<div class=''>
		<div class='mrr_at _kji_'>
			<div class=' _prof_d'>
				<img src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ms_ava."'>
			</div>
			<div class='mrr_at'>
				<div class='_kik_ jikj_dfo'>
					<span>".$ms_nick."</span>
				<div class='ev_ie'>
					<span>[".$mu_ll."]</span>
				</div>
				</div>
			</div>
			<div style='width:200px;margin:auto;'>
				<div style='margin:auto;width:170px;background-color:#fff;border-radius:3px;border:1px solid;'>
				<div><div style='width:100px;margin:5px 35px;color:#676767;border-bottom:1px solid #CCCCCC;'>Momoko smiles</div></div>
				<div>
				<!--
					<img id='msm1' style='width:40px;height:40px;' src='/content/icons/MomokoMM/1.gif'>
					<img id='msm2' style='width:40px;height:40px;' src='/content/icons/MomokoMM/2.gif'>
					<img id='msm3' style='width:40px;height:40px;' src='/content/icons/MomokoMM/3.gif'>
					<img id='msm4' style='width:40px;height:40px;' src='/content/icons/MomokoMM/4.gif'>
					<img id='msm5' style='width:40px;height:40px;' src='/content/icons/MomokoMM/5.gif'>
					<img id='msm6' style='width:40px;height:40px;' src='/content/icons/MomokoMM/6.gif'>
					<img id='msm7' style='width:40px;height:40px;' src='/content/icons/MomokoMM/7.gif'>
					<img id='msm8' style='width:40px;height:40px;' src='/content/icons/MomokoMM/8.gif'>
					<img id='msm9' style='width:40px;height:40px;' src='/content/icons/MomokoMM/9.gif'>
					<img id='msm10' style='width:40px;height:40px;' src='/content/icons/MomokoMM/10.gif'>
					<img id='msm11' style='width:40px;height:40px;' src='/content/icons/MomokoMM/11.gif'>
					<img id='msm12' style='width:40px;height:40px;' src='/content/icons/MomokoMM/12.gif'>
					-->
				</div>
				</div>
			</div>
		</div>
		
		<div class='mrr_ak _kji_'><div class='poid_mr'>";
	$omonga = mysqli_query($link, "SELECT 1 FROM `z_mess` WHERE `r_author` IN ('{$_SESSION['nLog']}','{$pusy}') and `r_master` IN ('{$_SESSION['nLog']}','{$pusy}')");
	$orage = mysqli_num_rows($omonga);
	if($orage != 0){
		$querynn2 = mysqli_query($link, "SELECT * FROM `z_mess`  WHERE `r_author` IN ('{$_SESSION['nLog']}','{$pusy}') and `r_master` IN ('{$_SESSION['nLog']}','{$pusy}') Limit 50");
		while ($row12 = mysqli_fetch_array($querynn2)){
			$ls_author = $row12['r_author'];
			$ls_to = $row12['r_master'];
			$ls_text = $row12['r_text'];
			$ls_data = $row12['r_date'];
$keyk = array("@sm1","@sm2","@sm3","@sm4","@sm5","@sm6","@sm7","@sm8","@sm9","@smA","@smB","@smC");
$valuk = array('<img src="http://localhost:8080/content/icons/MomokoMM/1.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/2.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/3.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/4.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/5.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/6.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/7.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/8.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/9.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/10.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/11.gif" />','<img src="http://localhost:8080/content/icons/MomokoMM/12.gif" />');
$burda= array_replace($keyk,$valuk);
$basket = str_replace($keyk, $burda, $ls_text);			
				$queryy = mysqli_query($link, "SELECT avatar,login FROM `profile` WHERE `login`='{$ls_author}'");
				$row1y = mysqli_fetch_array($queryy);
					$y_ava = $row1y['avatar'];
		if($ls_author == $_SESSION['nLog']){
		echo"
		<div id='tect_ms'>
			<div class='_mji_ kxkc _yji_'>
				<img id='li_po' src='../../include/avatars/".$y_ava."'>
			</div>
			<div class='_mji_ lxkc'>
				<div id='sayui'>".$ls_data."</div>
				<div id='mayui'>".$basket."</div>
			</div>
		</div>";
		}else{
		echo"
		<div id='tect_ms'>
			<div class='_mji_ rxkc'>
				<div id='sayui'>".$ls_data."</div>
				<div id='mayui'>".$basket."</div>
			</div>
			<div class='_mji_ kxkc _yji_'>
				<img id='li_po' src='../../include/avatars/".$y_ava."'>
			</div>
		</div>";
		}
		}
		}else{
		echo"
			<div class='oioi_vede dlin_ilse t0_zelist'></div>
			<div class='t1_menderl'>
				<p>Seems a little quiet over here</p>
				<p>No one you not wrote</p>
			</div>";
		}
		echo"
		</div>
			<div style='margin-top:30px;bottom:0px; margin-bottom:10px;'>
				<form method='POST'>
					<input type='hidden' name='to_pe' value='".$pusy."'>
					<textarea name='mess_pe' id='mess_pe' ></textarea>
					<input type='submit' name='z_messto' id='submit'  class='z_Mertia'  value='Отправить' >
				</form>	
			</div>
		</div>
		
		<div style='' class='mrr_at _kji_'>
			<div class=' _prof_d'>
				<img src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ks_ava."'>
			</div>
			<div class='mrr_at'>
				<div class='_kik_ jikj_dfo'>
				<span>".$ks_nick."</span>
				<div class='ev_ie'>
					<span>[".$ku_ll."]</span>
				</div>
				</div>
			</div>
		</div> 
	</div>
</div>
";
}else{
echo"Gavnina";
}

?>
