<div id='header' class='_t'>
	<div style="width:1000px;margin:auto;padding-top:50px;min-height:400px;padding-bottom:100px;">
<?
if(isset($_SESSION['nLog'])){
	$quex = mysqli_query($link, "SELECT * FROM profile WHERE login='{$_SESSION['nLog']}'");
	$rox = mysqli_fetch_array($quex);
	$au_avatar = $rox['avatar'];
	require_once ('form.php');
} 
?>
</div>
</div>
