<?php
$puei = mysqli_query($link, "SELECT 1 FROM z_mess WHERE r_master='{$_SESSION['nLog']}' and chit='1'");
$adoi = mysqli_fetch_array($puei);
if($adoi){
	echo"<div id='tan_imik'></div>";
}else{
	echo"<div id='fan_imik'></div>";
}		
?>