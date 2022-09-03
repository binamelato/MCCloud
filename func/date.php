<?
global $fzm_host;
$fzm_host = "http://".$_SERVER['HTTP_HOST'];

$r_default = mysqli_query($link, "SELECT * FROM `r_default`");
$fzm_row = mysqli_fetch_array($r_default);
$rname = $fzm_row['rp_name'];
$ropis = $fzm_row['rp_opis'];
$rdesc = $fzm_row['rp_description'];
$rkey = $fzm_row['rp_keywords'];
$rlogo = $fzm_row['rp_logo'];
$rltit = $fzm_row['rp_logo_tit'];
$rlico = $fzm_row['rp_logo_ico'];
$rinst = $fzm_row['rp_inst'];
$rtwit = $fzm_row['rp_twitter'];
$rface = $fzm_row['rp_facebook'];
$rmail = $fzm_row['rp_mail'];

$RU = array(
	"title" => 'Anibatsu',	"menu1" => 'Войти',	
);
$EN = $US = array(
	"title" => 'Anibatsu',	"menu1" => 'SignIn',
);
$JP = array(
	"title" => 'Anibatsu',	"menu1" => 'ログイン',
);

if(isset($_POST['saf_fon'])){
	$par1 = $_POST['par1'];
	$par2 = $_SESSION['nLog'];
	if($par1 !='' and $par2 !=''){
	$i_vina = mysqli_query($link, "SELECT 1 FROM prof_opt WHERE f_idprofile='{$_SESSION['nLog']}'");
	$nncc = mysqli_num_rows($i_vina);
		if ($nncc == 0){
	mysqli_query($link, "INSERT INTO `prof_opt`(`f_idprofile`, `f_up`) VALUES ('{$par2}','{$par1}')");
		}else{
	mysqli_query($link, "UPDATE `prof_opt` SET `f_up`='{$par1}' WHERE `f_idprofile`='{$_SESSION['nLog']}'");	
	}
	}
}
?>