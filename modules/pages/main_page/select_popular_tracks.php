<?php
$query = mysqli_query($link, "SELECT * FROM `o_track` WHERE full_likes>='12' and type_dost='1' ORDER BY id desc limit 12");
while ($row = mysqli_fetch_array($query)){
	$name_p =$row['o_name'];
	$logo_p = $row['o_lab'];
	$author_p = $row['o_author'];
	$url_p = $row['o_url'];
	$name_length = strlen($name_p);
if($name_length>67){
	$short_name = substr($name_p, 0, 23)." ...";
}else{
	$short_name = substr($name_p, 0, 23);
}
echo"
<article class='track_form'>
	<div>
		<div class='track_image'>
			<img src='".$host."/content/octava/tracks/label/".$logo_p."'>
		</div>
		<div>
			<a class='track_name' href='".$author_p."/".$url_p."'>".$short_name."</a>
			<div class='track_author'>
				<a href='/".$author_p."'>".$author_p."</a>
			</div>
		</div>
	</div>
</article>";
}
?>