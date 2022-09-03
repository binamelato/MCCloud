<?
global $host;
$host = "http://".$_SERVER['HTTP_HOST'];

$default_parametrs = mysqli_query($link, "SELECT * FROM `o_default`");
$massive_parametrs = mysqli_fetch_array($default_parametrs);
$dp_name = $massive_parametrs['rp_name'];
$dp_opis = $massive_parametrs['rp_opis'];
$dp_logo = $massive_parametrs['rp_logo'];
$dp_ltit = $massive_parametrs['rp_logo_tit'];
$dp_lico = $massive_parametrs['rp_logo_ico'];


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