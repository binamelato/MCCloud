<? 
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
?>
<!DOCTYPE html">
<html>
<head>
<?
require_once ('system/include/header.php');
?>
<script src="<?echo $fzm_host;?>/system/player/module_0.js"></script>
</head>
<body >
<div class="in_fol">
<? require_once('system/include/forms/signup_in.php');?>
</div>
<div class='telo'>
<div class='t_l2'>
<?
//require_once ('system/include/forms/shap.php');
require_once ('system/include/forms/nav.php');
if (isset($_POST['poisk_bt'])) 
{
$tpois = $_POST['poisk_fn'];
$tbutt = $_POST['poisk_bt'];
	if ($tpois != ''){
		require('system/include/search/search_3.php');
	}else{echo'Post request is empty';}
}else{
	if (isset($_GET['par'])){
		$dot1 = $_GET['par'];
		if ($dot1 != ''){
			if ($dot1 == 'all'){
				require('system/include/search/search_2.php');
			}else{
				if($dot1 == 'likes'){
					require('system/include/search/search_l.php');
				}else{
					require('system/include/search/search.php');
				}
			}
		}else{echo"Wrong get request. It's empty.";}
	}else{echo'Wrong get request.';}
}
?>
</div>
</div>
</div>
<?
require_once ('system/include/footer.php');
?>
<script>
      var param_us = '<? echo $_GET['par']; ?>';
</script>
</body>
</html>
