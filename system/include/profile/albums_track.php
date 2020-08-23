<?
$korn=0;
$query55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_album`='{$idadis}' and`o_author`='{$dot1}' and `type_dost`='1'");
while ($row5 = mysqli_fetch_array($query55)){
$p_nm = $row5['o_name'];
$p_url = $row5['o_url'];
$p_logo = $row5['o_lab'];
$p_auth = $row5['o_author'];
$p_dat = $row5['o_date'];
$korn = $korn+1;
echo"
	<div id='player".$korn."' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='".$fzm_host."/content/octava/tracks/".$p_url.".mp3' data-sourceogg='".$fzm_host."/content/octava/tracks/".$p_url.".ogg'>
	<div class='meta-artist'><a href='/search/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/".$p_auth."/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>
	                            <div class='menu-description'>
                                <div class='menu-item-thumb-con'><div class='menu-item-thumb' style='background-image: url(".$fzm_host."/content/octava/tracks/label/".$p_logo.")'></div></div>
                                <span class='the-name'>".$karmen." - ".$p_nm."</span>
                            </div>
	</div>
";
}
?>