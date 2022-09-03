<?php
session_start(); 
require_once('system/functions/gen0.php');
require_once('system/functions/date.php');
require_once('system/functions/profile_functions.php');
require_once('system/functions/track_functions.php');
require_once('system/functions/pm_function.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="image/x-icon" rel="icon" href="content/ui/musical-note.png" />
    <link rel="stylesheet" type="text/css" media="all"  href="system/style/portal.css" />
    <link rel="stylesheet" type="text/css" media="all"  href="system/style/profile.css" />
	<link rel="stylesheet" type="text/css" media="all"  href="system/style/pu/cropper.css" />
	<link rel="stylesheet" type="text/css" media="all"  href="system/style/pu/main.css" />
</head>
<body>
    <header class="block -color9 header_image">
        <?php require_once ("modules/forms/navigation.php"); ?>
    </header>
    <main>        
        <?php require_once ("modules/pages/profile_page/profile_page.php");?>
        <section aria-label="">
            <div class="in_fol">
				<?php 
				/*
				require_once("modules/forms/signup_in.php");
				require_once("modules/forms/pred_av.php");
				require_once("modules/forms/pred_af.php");
				require_once("modules/forms/pred_pl.php");
				*/ ?>
			</div>
        </section>
    </main>
    <footer class="block">
        <a href='/'>© MusicCloud</a> |
		<a href='/about'>About</a> |
		<a href='/blog'>blog</a> |
		<a href='/support'>help</a> |
		<a href >Donate</a> |
		<a href='/support/14'>Copyright</a>
    </footer>
	<script src="/system/js/v-portal.js"></script>
	<script src="/system/player/module_0.js"></script>
	<script src="/system/js/draggable_background.js"></script>
	<script src="/system/js/pu/bootstrap.min.js"></script>
	<script src="/system/js/pu/cropper.js"></script>
	<script src="/system/js/pu/main.js"></script>
	<script src="<?echo $fzm_host;?>/system/player/sett.m0.js"></script>
	<script>
		param_us = '<? echo $_GET['par']; ?>';
		param_col = 'color: #efdd09;';
	</script>
</body>
</html>