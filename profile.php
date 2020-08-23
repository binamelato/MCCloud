<? 
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('func/profile_functions.php');
require_once ('func/track_functions.php');
require_once ('func/pm_function.php');
?>
<!DOCTYPE html">
<html>
<head>
<?
require_once ('system/include/header.php');
?>
<link rel="stylesheet" type="text/css" media="all"  href="<?echo $fzm_host;?>/templates/default/css/pu/cropper.css" />
<link rel="stylesheet" type="text/css" media="all"  href="<?echo $fzm_host;?>/templates/default/css/pu/main.css" />
<script src="<?echo $fzm_host;?>/system/player/module_0.js"></script>
<script src="<?echo $fzm_host;?>/system/js/draggable_background.js"></script>
<script src="<?echo $fzm_host;?>/system/js/pu/bootstrap.min.js"></script>
<script src="<?echo $fzm_host;?>/system/js/pu/cropper.js"></script>
<script src="<?echo $fzm_host;?>/system/js/pu/main.js"></script>
</head>
<body >
<div class="in_fol">
<? 
require_once('system/include/forms/signup_in.php');
require_once('system/include/forms/pred_av.php');
require_once('system/include/forms/pred_af.php');
require_once('system/include/forms/pred_pl.php');
?>
<div class="in_foh"></div>
</div>
<?
require_once ('system/include/forms/shap.php');
if (isset($_GET['par'])){
		$dot1 = $_GET['par'];
			$quei = mysqli_query($link, "SELECT 1 FROM users WHERE login='{$dot1}'");
			$roi = mysqli_num_rows($quei);
			if($roi != 0){
				if(isset($_GET['opt'])){
					$profile = $_GET['opt'];
					$brod = mysqli_query($link, "SELECT 1 FROM o_track WHERE o_url='{$profile}'");
					$kot = mysqli_num_rows($brod);
					if($kot != 0){
						require('system/include/track/track.php');
					}else{
					if($profile == 'albums'){
						require('system/include/profile/albums.php');
					}
					if($profile == 'achievements'){
						require('system/include/profile/rewards.php');
					}
					if($profile == 'favorite'){
						require('system/include/profile/favorite.php');
					}
					if($profile == 'playlists'){
						require('system/include/profile/playlists.php');
					}
					if($profile == 'followers'){
						require('system/include/profile/followers.php');
					}
					if($profile == 'following'){
						require('system/include/profile/following.php');
					}
					if($profile == 'likes'){
						require('system/include/profile/likes.php');
					}
					/*if($profile == 'personal'){ // personal mini-blogs, news and etc. ?
						require('system/include/profile/personal.php');
					}*/
					if($profile == 'pm'){// mb, best choice - messages?
						require('system/include/pages/pm.php');
					}
					if($profile == 'setting'){// mb, best choice - settings?
						require('system/setting/index.php');
					}
					}
				}else{
					require_once('system/include/profile/profile.php');
				}
			}else{
				if($dot1 == 'about'){
						require('system/include/pages/about.php');
				}
				if($dot1 == 'blog'){
					if(isset($_GET['opt'])){
					$profile = $_GET['opt'];
					$brod = mysqli_query($link, "SELECT 1 FROM news WHERE page_n='{$profile}'");
					$kot = mysqli_num_rows($brod);
						if($kot != 0){
							require('system/blog/index.php');
							echo'gavnina';
						}
					}else{
						require('system/include/blog/blog.php');
					}
				}
				if($dot1 == 'support'){
						require('system/include/pages/support.php');
				}
				if($dot1 == 'upload'){
						require('system/upload/index.php');
				}
				if($dot1 == 'logout'){
					unset($_SESSION['nLog']);
					unset($_SESSION['nPas']);
					unset($_SESSION['ip']);
					unset($_SESSION['user_id']); 
					session_destroy();
					require_once ('system/errors/000.php');
				}
				if($dot1 == 0 or $dot1 != 'about' or $dot1 != 'blog' or $dot1 != 'support' or $dot1 != 'upload'){
					//require_once ('system/errors/404.php');
				}
			}
	}else{
		require_once ('system/errors/404.php');
	}
require_once ('system/include/footer.php');
?>
<script src="<?echo $fzm_host;?>/system/player/sett.m0.js"></script>
<script>
    param_us = '<? echo $_GET['par']; ?>';
	param_col = 'color: #efdd09;';
</script>
</body>
</html>
