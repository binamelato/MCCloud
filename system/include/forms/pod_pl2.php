<?
echo"
<div id='pod_pl'>
<div id='in_lls'>
<img id='imain' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$fh_ma."'>
</div>
<div id='in_kks'>
<div>".$ah_au."</div>
<div id='meni_ffgh'>";
$ffgh = mysqli_query($link, "SELECT id FROM o_followers WHERE f_master='{$ah_au}'");
$ffvvvf = mysqli_num_rows($ffgh);
echo"
<img class='sagd _mji_' src='http://".$_SERVER['HTTP_HOST']."/content/sys/user-group.png'>
<div class='_mji_'>".$ffvvvf."</div>
</div>
<div><a href='/profile/".$ah_au."'><input id='karma_bod' type='button' value='profile'></a></div>
</div>
</div>
";
?>