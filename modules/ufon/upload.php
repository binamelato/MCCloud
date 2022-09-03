<?
session_start();
require_once ('../../func/gen0.php');

if(isset($_SESSION['user_id'])){
$savata = $_SESSION['nLog'];
$types = array('image/gif', 'image/png', 'image/jpeg');  
$a = $savata.rand();
$imgDir = "../../include/"."afon/";

if (isset($_FILES['upl_fil'])) { 
	$data = $_FILES['upl_fil'];  
	$tmp = $data['tmp_name'];
	$info = @getimagesize($_FILES['upl_fil']['tmp_name']); 
		if (preg_match('{image/(.*)}is', $info['mime'], $p)){   
			$newwidth1 = "";  $newheight1 = "";
			$newname1 = $imgDir.$a.".".basename($info['mime']); 
			$der = basename($info['mime']);
			$newname2 = $a.".".basename($info['mime']);
			global  $newname2;
			global  $der;
			}
		resize1($tmp, $newwidth1, $newname1);
			
	if ($der != ''){
	$query = mysqli_query ($link, "UPDATE `profile` SET `afon` = '{$newname2}' WHERE `login` = '{$savata}'");
	} 
  }
$query88 = mysqli_query($link, "SELECT * FROM profile  WHERE `id`='{$_SESSION['user_id']}'");
$row88 = mysqli_fetch_array($query88);
$ava_sd = $row88['afon'];
echo "<div style='position:absolute;width:800px;height:202px;border:1px solid;'><div id='u_ufog' style='border-radius:0px;background-image:url(../include/afon/".$ava_sd.");background-position-x:0px; background-position-y:0px; background-repeat:no-repeat; width:800px;height:202px;background-size:cover;'></div></div>";
} 
 function resize1($photo_src, $width, $name){  
 $parametr = getimagesize($photo_src);  
 list($width_orig, $height_orig) = getimagesize($photo_src); 
	if($width_orig > 1184){
		$new_width1 = "1184";
		$new_height = $height_orig/($width_orig/$new_width1);
			
//$newpic = imagecreatetruecolor($new_width1, 320);  
$newpic = imagecreatetruecolor($new_width1, $new_height);  
switch ($parametr[2]){  
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
	}elseif($width_orig < 1184){
		$new_width1 = "1184";
		$fuk = $new_width1/$width_orig;
		$new_height = ($new_width1/$width_orig)*$height_orig;
		
//$newpic = imagecreatetruecolor($new_width1, 320);  
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
	}else{
		$new_width1 = "1184";
		$new_height = ($new_width1/$width_orig)*$height_orig;
		
//$newpic = imagecreatetruecolor($new_width1, 320);  
$newpic = imagecreatetruecolor($new_width1, $new_height);    
switch ( $parametr[2] ) {  
	case 1: $image = imagecreatefromgif($photo_src);  
		break;  
	case 2: $image = imagecreatefromjpeg($photo_src);  
		break;  
	case 3: $image = imagecreatefrompng($photo_src);  
		break;  
} 
//imagecopyresampled($newpic, $image, 0, 0, 0, 100, $new_width1, $new_height, $width_orig, $height_orig);  
imagecopyresampled($newpic, $image, 0, 0, 0, 0, $new_width1, $new_height, $width_orig, $height_orig); 
imagejpeg($newpic, $name, 100);  
return true;  
		
	}
 }
?>
