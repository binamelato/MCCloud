<?
$in_pp = mysqli_query($link, "SELECT * FROM o_pltrack WHERE id_pltrack='{$p_id}'");
$cjk_p = mysqli_num_rows($in_pp);

if($cjk_p != 0){
?>
<div class='med_i_for'>
					<div class='like_li'><img class='sagi _mji_' src='<?echo"http://".$_SERVER['HTTP_HOST'];?>/content/sys/playlist.png'>
<?
echo"
				<span class='_mji_'>In ".$cjk_p." playlists</span>";
?>
					</div>
					<div>
					<ul class='men_fgn_toi'>
<?
$ih_aa = mysqli_query($link, "SELECT * FROM o_pltrack WHERE `id_pltrack`='{$p_id}' Limit 3");
while ($romm = mysqli_fetch_array($ih_aa)){
$ah_pip = $romm['id_pllist'];
$ah_plp = $romm['id_pltrack'];
$ih_oo = mysqli_query($link, "SELECT * FROM o_playlist WHERE pl_id='{$ah_pip}' and pl_dost='1'");
	$roih = mysqli_fetch_array($ih_oo);
	$ft_nam = $roih['pl_name'];
	$ft_aut = $roih['pl_auth'];
	$ft_kar = $roih['pl_lab'];
if($ft_kar!='' or $ft_aut!='' or $ft_nam!=''){
echo"<div>
						<div class='pl_gob _mji_'>
						<img id='ty_po' class='pl_imi' src='http://".$_SERVER['HTTP_HOST']."/content/octava/playlists/".$ft_kar."'>
						</div>
						<div class='_mji_ ttop'>
							<div class='oiu_ji'>
								<a href='../".$ft_aut."'>".$ft_aut."</a>
							</div>
							<div class='oim_ji'>
								<a href='../".$ft_aut."/playlists'>".$ft_nam."</a>
							</div>
						</div>
		</div>";
		}
		}

?>
					</ul>
					</div>
				</div>
<?
}else{}

?>