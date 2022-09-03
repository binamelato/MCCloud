<?
if (!$_SESSION['user_id']) {
echo"
<div class='m4d'>";
echo"
	<div class='doto'>
		<div>
			<div class='trf_log'>Follow <a href='/profile/".$p_auth."'>".$p_auth."</a> and others on ".$rname.".</div>
			<div></div>
		</div>
	</div>
</div>";
}else{
echo"
<div class='m4d'>";
	require_once ('system/include/track/ui_track.php');
if ($p_dodt == 1){
echo"
	<div class='doto'>
		<div>
			<form method='POST' style='margin-bottom:5px;'>
				<input type='hidden' name='author' value='".$_SESSION['nLog']."'>
				<input type='hidden' name='master' value='".$p_url."'>
			<div>
				<img class='dd_avus _mji_' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ava_sd."'>
				<input type='text' name='mess' id='mess_s' placeholder='Write your comment' class='dd_comin'>
				<input type='hidden' class='bu_bu barb' name='submit' id='go_btn' value='send' onkeypress='if(event.keyCode==13||(event.ctrlKey && event.keyCode==13))submit.click();'>
			</div>

			</form>
		</div>
	</div>";
}	
echo"
</div>";
}
?>