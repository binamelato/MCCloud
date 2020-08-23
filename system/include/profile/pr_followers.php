<?
$iz_aa = mysqli_query($link, "SELECT f_master,f_author FROM o_followers WHERE f_master='{$dot1}'");
$cjk_z = mysqli_num_rows($iz_aa);
if($cjk_z != 0){
echo"
<div class='med_i_for'>
			<div class='like_li'>
				<img class='fagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/user-group.png'>";
$dokk = mysqli_query($link, "SELECT id FROM o_followers WHERE f_master='{$dot1}'");
$nm_dkk = mysqli_num_rows($dokk);
echo"	<span style='vertical-align:top;'>".$nm_dkk." followers</span>
		<a href='/".$dot1."/followers'><span style='vertical-align:top;float:right;'>View all</span></a>
			</div>
			<div class='like_pho'>
				<ul class='men_men_toi'>";
				
$ih_aa = mysqli_query($link, "SELECT f_master,f_author FROM o_followers WHERE f_master='{$dot1}'");
while ($romm = mysqli_fetch_array($ih_aa)){
$ah_ma = $romm['f_master'];
$ah_au = $romm['f_author'];
$ih_oo = mysqli_query($link, "SELECT * FROM profile WHERE login='{$ah_au}'");
	$roih = mysqli_fetch_array($ih_oo);
	$fh_log = $roih['login'];
	$fh_ma = $roih['avatar'];
echo"
		 <li class='preprof'><img id='li_po' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$fh_ma."' data-tag='".$fh_log."'>";
		 //require('system/include/pod_pl2.php');
	echo"</li>";
		}
echo"
				</ul>
			</div>
		</div>";
}else{/*echo $dot1." doesn't have followers.";*/}
?>