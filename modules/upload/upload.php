<?
session_start(); 
define("SITEROOTDIR", $_SERVER['DOCUMENT_ROOT']);
require_once ('../../func/gen0.php');
require_once('../../system/getid3/getid3.php');
$mand = $_SESSION['nLog'];
$mork = $_SESSION['user_id'];
$uploaddir = '../../content/octava/tracks/';
$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);
/*----last my add-----*/
$safeMimeTypes = [
    'ogg',
    'Ogg',
    'ID3',
    'id3',
    'mpeg',
    'mp3',
    'MP3'
  ];
$filename = $_FILES['myfile']['tmp_name'];
$handle = fopen($filename, "r");
$contents = fread($handle, 3);
fclose($handle);

if(preg_match('/[.](mp3)$/i',$filename)){
if (in_array($contents, $safeMimeTypes)){
	if($contents = 'ID3'){
		global $tfile_type;
		$tfile_type = 'mp3';
	}else{
		global $tfile_type;
		$tfile_type = 'ogg';
	}
	//$newfile = $uploaddir.$_SESSION['nLog'].'_'.$tyty_name.basename($_FILES['myfile']['name']);//.'.$tfile_type;
	//$urlan_di = substr(basename($_FILES['myfile']['name']), 0, -4);//получаем название трека
	$urlan_mi = substr(basename($_FILES['myfile']['name']), -4);//получаем тип файла
	//$pp_ff = str_replace(' ', '-', $urlan_di);
	$pp_ff = $mork.rand();//'track_'.rand();
	$pp_ss = md5($pp_ff);//хеширование назхвания трека
	$newfile = $uploaddir.$pp_ss.$urlan_mi;
    move_uploaded_file($_FILES['myfile']['tmp_name'], $newfile);//$_FILES['myfile']['tmp_name']
	$query = mysqli_query ($link, "UPDATE `o_track` SET `o_url`='{$pp_ss}' WHERE `o_author` = '{$mand}' and `type_dost`='2'");
	echo'<div>Done</div>';
  }else{
	  echo'errors file';
  }
}
/* Считываем id3 теги */

$getID3 = new getID3;
$pytb = '/content/octava/tracks';
$FullFileName = SITEROOTDIR.$pytb.'/1234567890.mp3';//.$p_url.
if ((substr($file, 0, 1) != '.') && is_file($FullFileName)) {
set_time_limit(30);
$ThisFileInfo = $getID3->analyze($FullFileName);
getid3_lib::CopyTagsToComments($ThisFileInfo);
$tg_album = htmlentities(!empty($ThisFileInfo['comments_html']['album']) ? implode('<br>', $ThisFileInfo['comments_html']['album']) : chr(160));
$tg_artist = htmlentities(!empty($ThisFileInfo['comments_html']['artist']) ? implode('<br>', $ThisFileInfo['comments_html']['artist']) : chr(160));
$tg_band = htmlentities(!empty($ThisFileInfo['comments_html']['band']) ? implode('<br>', $ThisFileInfo['comments_html']['band']) : chr(160));
$tg_comment = htmlentities(!empty($ThisFileInfo['comments_html']['comment']) ? implode('<br>', $ThisFileInfo['comments_html']['comment']) : chr(160));
$tg_composer = htmlentities(!empty($ThisFileInfo['comments_html']['composer']) ? implode('<br>', $ThisFileInfo['comments_html']['composer']) : chr(160));
$tg_content_group_description = htmlentities(!empty($ThisFileInfo['comments_html']['content_group_description']) ? implode('<br>', $ThisFileInfo['comments_html']['content_group_description']) : chr(160));
$tg_genre = htmlentities(!empty($ThisFileInfo['comments_html']['genre']) ? implode('<br>', $ThisFileInfo['comments_html']['genre']) : chr(160));
$tg_title = htmlentities(!empty($ThisFileInfo['comments_html']['title']) ? implode('<br>', $ThisFileInfo['comments_html']['title']) : chr(160));
$tg_track_number = htmlentities(!empty($ThisFileInfo['comments_html']['track_number']) ? implode('<br>', $ThisFileInfo['comments_html']['track_number']) : chr(160));
$tg_year = htmlentities(!empty($ThisFileInfo['comments_html']['year']) ? implode('<br>', $ThisFileInfo['comments_html']['year']) : chr(160));
$tg_playtime_string = htmlentities(!empty($ThisFileInfo['playtime_string'])?$ThisFileInfo['playtime_string'] : chr(160));
$tg_text = htmlentities(!empty($ThisFileInfo['comments_html']['text']) ? implode('<br>', $ThisFileInfo['comments_html']['text']) : chr(160));
}
$quenll = mysqli_query ($link, "SELECT * FROM o_track WHERE `o_author` = '{$mand}' and `type_dost`='2'");
$qq_new = mysqli_fetch_array($quenll);
$tg_trid = $qq_new['id'];
$querytg = mysqli_query ($link, "INSERT INTO `o_track_id3`(`g_trid`,`g_album`, `g_artist`, `g_band`, `g_comment`, `g_composer`, `g_content_group_description`, `g_genre`, `g_picture`, `g_title`, `g_track_number`, `g_year`, `g_playtime_string`, `g_text`) VALUES ('{$tg_trid}','{$tg_album}','{$tg_artist}','{$tg_band}','{$tg_comment}','{$tg_composer}','{$tg_content_group_description}','{$tg_genre}','','{$tg_title}','{$tg_track_number}','{$tg_year}','{$tg_playtime_string}','{$tg_text}')");
/**/
?>
