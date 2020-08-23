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
?>