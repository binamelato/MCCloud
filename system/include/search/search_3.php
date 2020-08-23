<div id="header" class="_t">
	<div class="sercer">
		<div class="obve_nx _kji_">
	<div class='ser_hed'>
	<div class='hed_ag'><p>All tracks on the musiccloud</p></div>
	<div id='nad_tit'>
	<table>
	<tr><td>#</td><td>Tracks</td></tr>
	</table>
	</div>
	</div>
		<ul class='muz'>
<?
$tropa = mysqli_query($link, "SELECT 1 FROM o_track WHERE `type_dost`='1' and (`o_name` LIKE '%$tpois%' OR `o_author` LIKE '%$tpois%' OR `o_url` LIKE '%$tpois%')");
if($tropa){
	//$tpois = mysql_real_escape_string(strip_tags(trim($tpois))); 
	$query66 = mysqli_query($link, "SELECT * FROM o_track WHERE `type_dost`='1' and ( `o_name` LIKE '%$tpois%' OR `o_author` LIKE '%$tpois%' OR `o_tag` LIKE '%$tpois%' and `type_dost`='1')");
	while ($row = mysqli_fetch_array($query66)){
	$p_nm = $row['o_name'];
	$p_url = $row['o_url'];
	$p_logo = $row['o_lab'];
	$p_auth = $row['o_author'];
	$p_dat = $row['o_date'];
	$tik = $tik+1;
	echo"	<li id='ptpt' style='list-style:none;'>	
			<div style='padding:5px;'>
				<div class='krug_fd' style='display:flex;'>
				<div id='tr_nmfd'>".$tik.".</div>
				<div >
				<div id='tr_lfd'>
						<img src='".$fzm_host."/content/octava/tracks/label/".$p_logo."' class='krug_im'>
				</div>
				</div>
				<div class=''>
					<div id='tr_nfd'>
<div>
<div>
	<div>
	<div><a href='/".$p_auth."'><span >".$p_auth."</span></a><br/><a style='color:#000;text-shadow:0 0 1px #777;' href='/".$p_auth."/".$p_url."'><span >".$p_nm."</span></a></div>
	</div>
</div>
</div>

					</div>
				</div>
				</div>
			</div></li>";
			}
		}else{echo"Wrong post request";}
?>		
		</div>
<?
		require('system/include/search/cat_url.php');
?>
</div>
