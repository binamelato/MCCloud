<?
session_start();
require_once ('../../func/gen0.php');

if(isset($_SESSION['user_id'])){
$savata = $_SESSION['nLog'];
$types = array('image/gif', 'image/png', 'image/jpeg');  
$a = $savata.rand();
$b = $savata."_d";
$imgDir = "../../include/"."avatars/";
$plDir = "../../content/octava/"."playlists/";

if (isset($_FILES['prat'])) { 
	$data = $_FILES['prat'];  
	$tmp = $data['tmp_name'];
	$info = @getimagesize($_FILES['prat']['tmp_name']); 
		if (preg_match('{image/(.*)}is', $info['mime'], $p)){   
			$newwidth1 = '';  $newheight1 = '';
			$newname1 = $imgDir.$a.".".basename($info['mime']); 
			$newpal = $plDir.$b.".".basename($info['mime']); 
			$der = basename($info['mime']);
			$newname2 = $a.".".basename($info['mime']);
			global  $newname2;
			global  $der;
			}
		if(resize1($tmp, $newwidth1, $newname1)){echo "";}else{echo "";} 
		if(resize1($tmp, $newwidth1, $newpal)){echo "";}else{echo "";} 
			
	if ($der != ''){
	$query = mysqli_query ($link, "UPDATE `profile` SET `avatar` = '{$newname2}' WHERE `login` = '{$savata}'");
	} 
  }
$query88 = mysqli_query($link, "SELECT * FROM profile  WHERE `id`='{$_SESSION['user_id']}'");
$row88 = mysqli_fetch_array($query88);
$ava_sd = $row88['avatar'];
/*echo "<div id='u_ava' style='border-radius:0px;background-image:url(../include/avatars/".$ava_sd.");background-position-x:0px; background-position-y:0px; background-repeat:no-repeat;width:450px;height:450px;background-size:cover;'></div>
";
*/
echo "<img id='photo' style='height: 100%;width:100%;border-radius:360px;' src='../include/avatars/".$ava_sd."' />";
  
} 

function resize1($photo_src, $width, $name){  
$parametr = getimagesize($photo_src);  
list($width_orig, $height_orig) = getimagesize($photo_src);
	$new_width1 = "250";  
	$new_height = "250";
 $newpic = imagecreatetruecolor($new_width1, $new_height);  
 switch ( $parametr[2] ) {  
	case 1: $image = imagecreatefromgif($photo_src);  
   break;  
   case 2: $image = imagecreatefromjpeg($photo_src);  
   break;  
  case 3: $image = imagecreatefrompng($photo_src);  
   break;  
 }  
 imagecopyresampled($newpic, $image, 0, 0, 0, 0, $new_width1, $new_height, $width_orig, $height_orig);  
 imagejpeg($newpic, $name, 100);  
 return true;
}
?>
