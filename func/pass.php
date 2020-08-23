<!DOCTYPE html>
<?
require_once ('gen0.php');
if (isset($_POST['nLog'])){
	$nLog=($_POST['nLog']);
	$nPas=(md5(md5($_POST['nPas'])));
	$res = mysqli_query($link, "SELECT * FROM users WHERE login='$nLog' AND password='$nPas'");
	// or trigger_error(mysqli_error().$res)
if ($row = mysqli_fetch_assoc($res)){
if(!isset($_SESSION)){
    session_start();
}	
$_SESSION['user_id'] = $row['id'];
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['nLog'] = $row['login'];
$_SESSION['nPas'] = $row['pass'];
$_SESSION['metka'] = $row['metka'];
header("Location: /");exit;
	}else{
		header("Location: /");
		echo'Fake up';}
}
if (isset($_REQUEST[session_name()])) session_start();if (isset($_SESSION['user_id']) AND $_SESSION['ip'] == $_SERVER['REMOTE_ADDR']) return; else {
//require_once ('/func/main/html/pass_form.html');
}
exit;
?> 
</html>
