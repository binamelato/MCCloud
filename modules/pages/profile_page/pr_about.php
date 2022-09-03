<?
$fuertoj = mysqli_query($link, "SELECT 1 FROM profile WHERE login='{$dot1}' ");//and kkode='3' or kkode='2'
$kakaf = mysqli_num_rows($fuertoj);
if($kakaf == 1){
$il_aa = mysqli_query($link, "SELECT DISTINCT login,rp_opis FROM profile WHERE login='{$dot1}'");
$rojj = mysqli_fetch_array($il_aa);
$a_ma = $rojj['login'];
$a_au = $rojj['rp_opis'];
$in_aa = mysqli_query($link, "SELECT rp_opis FROM profile WHERE login='{$dot1}'");
$cjk_l = mysqli_num_rows($in_aa);
if($cjk_l != 0){
	echo"
		<div class='med_i_iin'>
			<div class='like_li'>
				<img class='sagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/about.png'>
		
				<span style='vertical-align:top;'>About</span>			
				<a class='li_modu'><span style='vertical-align:top;float:right;'></span></a>

			</div>
			<div class='like_pho'>
				<ul class='men_men_toi'>
	
					<p><span>".$a_ma."</span> - ".$a_au."</p>

				</ul>
			</div>
		</div>";
}else{echo $dot1." doesn't have about information.";}
}else{echo'';}
?>