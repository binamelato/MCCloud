<?php
session_start();
require_once ('../../func/gen0.php');

if(isset($_SESSION['user_id'])){
$savata = $_SESSION['nLog'];
$types = array('image/gif', 'image/png', 'image/jpeg');  
$a = $savata.rand();
$imgDir = "../../content/octava/tracks/"."label/";

if (isset($_FILES['malis'])) { 
	$data = $_FILES['malis'];  
	$tmp = $data['tmp_name'];
	$info = @getimagesize($_FILES['malis']['tmp_name']); 
		if (preg_match('{image/(.*)}is', $info['mime'], $p)){   
			$newwidth1 = 250;  $newheight1 = 250;
			$newname1 = $imgDir.$a.".".basename($info['mime']); 
			$der = basename($info['mime']);
			global  $der;
			$newname2 = $a.".".basename($info['mime']);
			global  $newname2;
			}
		if(resize1($tmp, $newwidth1, $newname1)){
			echo "";
			}else{   
			echo "";
			} 

 	if ($der != ''){
	$query = mysqli_query ($link, "UPDATE `o_track` SET `o_lab` = '{$newname2}' WHERE `o_author` = '{$savata}' and type_dost='2'");
	} 

echo "<img id='photo' style='height: 100%;width:100%;border-radius:250px;' src='../../content/octava/tracks/label/".$newname2."' />";//../include/avatars/

} 
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
