<?
session_start(); 
require_once ('func/date.php');
require_once ('func/gen0.php');
require_once ('func/pm_functions.php');
?>
<!DOCTYPE html">
<html>
<head>
<?
require_once ('system/include/header.php');
?>
<script src="<?echo $fzm_host;?>/system/js/leses.js"></script><
</head>
<body>
<div class="in_fol">
<? require_once('system/include/signup_in.php');
?>
<div class="in_foh"></div>
</div>
<div class='telo'>
<div class='t_l2'>
<?
require_once ('system/include/shap.php');
if (isset($_GET['t'])){
		$pusy = $_GET['t'];
		if ($pusy != ''){
			require('system/include/pm.php');
		}else{echo"Wrong get request. It's empty.";}
	}
?>
</div>
</div>
<?
require_once ('system/include/footer.php');
?>
</body>
</html>
