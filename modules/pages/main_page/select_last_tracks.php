<?php
$query = mysqli_query($link, "SELECT * FROM `o_track` where type_dost=1 ORDER BY id desc limit 12");
while ($row = mysqli_fetch_array($query)){
	$id = $row['id'];
	$name =$row['o_name'];
	$logo = $row['o_lab'];
	$author = $row['o_author'];
	$url = $row['o_url'];
	$date = $row['o_date'];
	$name_length = strlen($name);
if($name_length>67){
	$short_name = substr($name, 0, 23)." ...";
}else{
	$short_name = substr($name, 0, 23);
}
echo"
<article class='track_form'>
	<div>
		<div class='track_image'>
			<img src='".$host."/content/octava/tracks/label/".$logo."'>
		</div>
		<div>
			<a class='track_name' href='".$author."/".$url."'>".$short_name."</a>
			<div class='track_author'>
				<a href='/".$author."'>".$author."</a>
			</div>
		</div>
	</div>
</article>";
}
?>