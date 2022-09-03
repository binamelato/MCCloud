<?php
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
						require('modules/track/track.php');
					}else{
					if($profile == 'albums'){
						require('modules/pages/profile_page/albums.php');
					}
					if($profile == 'achievements'){
						require('modules/pages/profile_page/rewards.php');
					}
					if($profile == 'favorite'){
						require('modules/pages/profile_page/favorite.php');
					}
					if($profile == 'playlists'){
						require('modules/pages/profile_page/playlists.php');
					}
					if($profile == 'followers'){
						require('modules/pages/profile_page/followers.php');
					}
					if($profile == 'following'){
						require('modules/pages/profile_page/following.php');
					}
					if($profile == 'likes'){
						require('modules/pages/profile_page/likes.php');
					}
					/*if($profile == 'personal'){ // personal mini-blogs, news and etc. ?
						require('modules/pages/profile_page/personal.php');
					}*/
					if($profile == 'pm'){// mb, best choice - messages?
						require('modules/pages/pm.php');
					}
					if($profile == 'setting'){// mb, best choice - settings?
						require('system/setting/index.php');
					}
					}
				}else{
					require_once('modules/pages/profile_page/profile_main_page.php');
				}
			}else{
				if($dot1 == 'about'){
						require('modules/pages/about.php');
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
						require('modules/blog/blog.php');
					}
				}
				if($dot1 == 'support'){
						require('modules/pages/support.php');
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
?>