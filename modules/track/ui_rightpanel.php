<div class='rp_block0'>
			<div class='med_i_iin'>
			<div class='ss_ui_x'>
				<ul>
<? echo"
				<li class='mikao'>Main Info.
				<li><span>Official name:</span> ".$p_nm."
				<li><span>Album:</span> ".$al_nm."
				<li><span>Group/Singer:</span> ".$p_auth."
				<li class='mikao'>Other Info.
				<li><span>Released</span>: ".$al_dat."
				<li><span>Genre</span>: ".$p_gnr."
				<li><span>Label</span>: ".$al_plb."
				<li><span>Length</span>: ".$p_lenh."
				";
?>
				</ul>
			</div>
			</div>
			<div>
			<?
			require('system/include/track/tr_like.php');
			require('system/include/track/tr_inplaylists.php');	
			?>
			<div class='med_i_for'>
				<div class='like_li'>
<?echo"			
				<span></span>			
				<a class='li_modu'><span style='vertical-align:top;float:right;'></span></a>";
?>	
				</div>
				<div>
					<ul class='men_men_toi'>

					</ul>
				</div>
			</div>
			</div>
</div>