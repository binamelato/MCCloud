<?
if(isset($_SESSION['nLog'])){
$sham = mysqli_query($link, "SELECT avatar,login,kkode FROM profile WHERE login='{$_SESSION['nLog']}'");
	$rom = mysqli_fetch_array($sham);
	$mau_nm = $rom['login'];
	$mau_avatar = $rom['avatar'];
	$mau_kkd = $rom['kkode'];
			$mqlex = mysqli_query($link, "SELECT id,s_titul FROM o_titul WHERE id='{$mau_kkd}'");
			$mrlx = mysqli_fetch_array($mqlex);
			$mau_ll = $mrlx['s_titul'];

	require('afon_pl.php');
}
?>