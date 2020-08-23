<?
echo"
<div id='pod_pn'>
<div id='in_lls'>
<img id='imain' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$iz_url."'>
</div>
<div id='in_kks'>
<div>".$iz_nm."</div>
<div id='meni_ffgh'>";
$ffgh = mysqli_query($link, "SELECT id FROM o_followers WHERE f_master='{$iz_nm}'");
$ffvvvf = mysqli_num_rows($ffgh);
echo"
<div class='_mji_'>
	<img class='sagd' src='http://".$_SERVER['HTTP_HOST']."/content/sys/user-group.png'>
</div>
<div class='_mji_'>".$ffvvvf."</div>
</div>
<div><a href='/profile/".$iz_nm."'><input id='karma_bod' type='button' value='profile'></a></div>
</div>
</div>
";
?>