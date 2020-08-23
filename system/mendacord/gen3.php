<?
session_start();
require_once ('../../func/gen0.php');

if (isset($_POST['m']))
{
$da_is = $_POST['m'];
$da_nm = $_POST['d'];
$da_ds = $_POST['y'];
$da_ef = $_POST['z'];
$da_tg = $_POST['o'];
$da_yy = $_POST['l'];
$da_bb = $_POST['b'];
$da_kx = $_POST['p'];
$da_rr = $_POST['a'];
$da_ty = $_POST['i'];

if ($da_is == 'savetrack'){
$tra_ds = strip_tags($da_nm);//трек нейм
$nda_ds = $_SESSION['nLog'];//strip_tags($da_ds);//публикатор
$tald = strip_tags($da_ef);//описание
$mreg = strip_tags($da_tg);//тэги
$shof0 = strip_tags($da_yy);//один из выбраных жанров
$shof1 = strip_tags($da_bb);//стандартный альбом
$shof2 = strip_tags($da_kx);//мой стиль трека
$shof3 = strip_tags($da_rr);//мой альбом
$shof4 = strip_tags($da_ty);//приватность трека
if($shof0=='Mygenre'){/*Добавить, что если свой генре, добавляем запись в таблу левую ,чтобы потом видеть какие новые жанры популярны*/
	$opt_gen = $shof2;
}else{
	$opt_gen = $shof0;
}
if($shof1=='Myalbum'){/*Добавить, что если свой альбом, добавляем запись о нем в таблу альбомов*/
	$opt_alb = $shof3;
}else{
	$opt_alb = $shof1;
}
if($shof4==1){$opt_priv = 1;}else{$opt_priv = 0;}
//Выбираем продолжительность трека из мета тег таблицы

$mand = $_SESSION['nLog'];
$query = mysqli_query ($link, "UPDATE `o_track` SET `o_name` = '{$tra_ds}',`o_group` = '{$nda_ds}',`o_info` = '{$tald}',`o_tag` = '{$mreg}',`o_album` = '{$opt_alb}',`o_genre` = '{$opt_gen}',`o_lenth` = '',`type_dost` = '{$opt_priv}' WHERE `o_author` = '{$mand}' and `type_dost`='2'");
}
if ($da_is == 'can4el'){
$mand = $_SESSION['nLog'];
$quenll = mysqli_query ($link, "SELECT id FROM o_track WHERE `o_author` = '{$mand}' and `type_dost`='2'");
$qq_new = mysqli_fetch_array($quenll);
$tg_trid = $qq_new['id'];
$query1 = mysqli_query ($link, "DELETE FROM `o_track` WHERE `o_author` = '{$mand}' and `type_dost`='2'");
$query1 = mysqli_query ($link, "DELETE FROM `o_track_id3` WHERE `g_trid` = '{$tg_trid}'");
}

if ($da_is == 'creat4ek'){
$mand = $_SESSION['nLog'];
$quenll = mysqli_query ($link, "SELECT 1 FROM o_track WHERE `o_author` = '{$mand}' and `type_dost`='2'");
$ronl = mysqli_num_rows($quenll);
if($ronl != 0){}else{
$query2 = mysqli_query ($link, "INSERT INTO `o_track`(`o_name`, `o_lab`, `o_author`, `o_group`, `o_url`, `o_info`, `o_album`, `o_tag`, `o_genre`, `o_lenth`, `full_likes`, `full_plays`, `type_dost`) VALUES ('','default.jpg','{$mand}','{$mand}','','','','','','','0','0','2')");
}
}

}
/*else{
	header("Location: /");exit;
}*/
?>
