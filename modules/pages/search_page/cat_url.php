<?
echo"
<div class='_kji_ fx_gr'>
		<div class='med_i_xx'>
			<div class='like_pfo'>
				<ul class=''>
					<li><a href='".$fzm_host."/search/all'>All</a></li>
					<li><a href='".$fzm_host."/search/likes'>Likes</a></li>";
$querll = mysqli_query($link, "SELECT DISTINCT o_group FROM o_track WHERE `type_dost`='1' ORDER BY o_group ASC");
	while ($rokl = mysqli_fetch_array($querll)){
	$cat_kl = $rokl['o_group'];
	echo"<li><a href='/search/".$cat_kl."'>".$cat_kl."</a></li>";
	}
echo"
				</ul>
			</div>
		</div>
	</div>";
?>
