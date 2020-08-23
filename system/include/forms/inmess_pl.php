<?
	$puei = mysqli_query($link, "SELECT 1 FROM z_mess WHERE r_master='{$_SESSION['nLog']}' and chit='1'");
	$adoi = mysqli_fetch_array($puei);
	if ($adoi) {
		echo"		
			<div class='kjt_men'>
				<div>
			";
	$quel = mysqli_query($link, "SELECT r_author,r_master FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' and chit='1' GROUP BY `r_author` limit 3");
	while ($rod = mysqli_fetch_array($quel)){
	$ri_author = $rod['r_author'];
		$queb = mysqli_query($link, "SELECT avatar,login FROM profile WHERE login='{$ri_author}'");
		$ron = mysqli_fetch_array($queb);
		$ab_avatar = $ron['avatar'];
		$au_logi = $ron['login'];
	echo"
	<div class='ls_pn_alm'>
		<div class='ls_pn_fm'>
			<div class='ls_pn_av'>
				<a href='/".$au_logi."/pm'><img src='../include/avatars/".$ab_avatar."'></a>
			</div>
		</div>";
		$quoo = mysqli_query($link, "SELECT r_text,r_date,id FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' and `r_author`='{$ri_author}' and `chit`='1' order by id DESC Limit 1");
		$rooo = mysqli_fetch_array($quoo);
			$ri_text = $rooo['r_text'];
			$x_text = substr($ri_text, 0, 30)." ...";
			$ri_date = $rooo['r_date'];
		echo"
		<div class='ls_in_mek'>
			<span class='ls_pn_lg'>".$au_logi."</span>
			<span class='ls_pn_tx' ><div>".$x_text."</div></span>
		</div>
	</div>
		";
	}
		echo"

				</div>
				<div class='ls_pn_ob'>
					<a class='ls_pn_ot leqmes'>All message</a>
				</div>
			</div>
		
		";
	}else{
	echo"
			<div class='kjt_men'>
				<div>
					<div class='ls_pn_alm'>
						<div class='ls_pn_fm'>
							<p>'You have not any messages'</p>
						</div>
					</div>
				</div>
					<div class='ls_pn_ob'>
						<a class='ls_pn_ot leqmes'>All message</a>
					</div>
			</div>
	";
	}
?>