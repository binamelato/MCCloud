<?
$in_aa = mysqli_query($link, "SELECT 1 FROM o_like WHERE l_object='{$profile}'");
$cjk_l = mysqli_num_rows($in_aa);
if($cjk_l != 0){
?>
<div class='med_i_for'>
					<div class='like_li'><img class='sagi _mji_' src='<?echo"http://".$_SERVER['HTTP_HOST'];?>/content/sys/heart.png'>
<?
$llb = mysqli_query($link, "SELECT id FROM o_like WHERE l_master='{$p_auth}' And l_object='{$profile}'");//подписки
$nm_llb = mysqli_num_rows($llb);
echo"			
				<span class='_mji_'>".$nm_llb." Likes</span>";
?>	
					</div>
					<div>
					<ul class='men_men_toi'>
<?
$in_aa = mysqli_query($link, "SELECT DISTINCT l_master,l_author FROM o_like WHERE l_master='{$p_auth}'");
$cjk_l = mysqli_num_rows($in_aa);
if($cjk_l != 0){
$il_aa = mysqli_query($link, "SELECT DISTINCT l_master,l_author FROM o_like WHERE l_master='{$p_auth}' And l_object='{$profile}'");
while ($rojj = mysqli_fetch_array($il_aa)){
$a_ma = $rojj['l_master'];
$a_au = $rojj['l_author'];
$il_oo = mysqli_query($link, "SELECT * FROM profile WHERE login='{$a_au}'");
	$roii = mysqli_fetch_array($il_oo);
	$f_log = $roii['login'];
	$f_ma = $roii['avatar'];
	//$f_au = $roii['f_author'];
	echo"
					<li class='preprof'><img id='li_po' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$f_ma."' data-tag='".$f_log."'>";
				//require('system/include/pod_pl.php');
				echo"</li>
";
}
}else{echo "This track doesn't have one likes";}
?>
					</ul>
					</div>
</div>
<?
}else{}
?>