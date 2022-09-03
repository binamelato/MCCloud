<?
	echo'
	<div id="header" class="_t" style="background:-webkit-linear-gradient(top left,#'.$color1.',#'.$color2.');">
		<div class="tr_dopin">
		<div class="tr_top _mji_">
			<div>mesto top</div>
		</div>
		<div class="tr_pop _mji_">
		<div class="tr_exp">
			<div>22 days ago</div>
			<div>Hip-hop, Jpop</div>
			<div>Reol, Syka</div>
		</div>
		</div>
		</div>
		<div class="pfl_dfr">
		<div id="ag1" class="audiogallery">
		<div class="items">
			<div id="player1" class="audioplayer-tobe" " data-thumb="http://'.$_SERVER['HTTP_HOST'].'/content/octava/tracks/label/'.$p_logo.'" data-bgimage="http://'.$_SERVER['HTTP_HOST'].'content/octava/tracks/label/bg/'.$p_logo.'" data-scrubbg="http://'.$_SERVER['HTTP_HOST'].'/waves/scrubbg.png" data-scrubprog="http://'.$_SERVER['HTTP_HOST'].'/waves/scrubprog.png" data-videoTitle="Audio Video" data-type="normal" data-source="http://'.$_SERVER['HTTP_HOST'].'/content/octava/tracks/'.$p_url.'.mp3" data-sourceogg="http://'.$_SERVER['HTTP_HOST'].'/content/octava/tracks/'.$p_url.'.ogg">
		<div class="meta-artist">
			<span class="the-artist">'.$p_auth.'</span><br/>
			<span class="the-name">'.$p_nm.'</span>
		</div>
		</div>
		</div>
	</div>
</div>
<div>
	</div>
</div>
<div id="header" class="_g">
<div class="ui_pr_tr">
	<div class="_kji_ kap_pp">
		<div class="">
			<div>';

require_once("system/include/track/ui_addcomm.php");

		echo'</div>
			<div>
				<div class="_kji_">';
require_once ("system/include/track/ui_user.php");
				echo'
				</div>
				<div class="_kji_">';
require_once("system/include/track/show_board.php");
				echo'
				</div>
			</div>
		</div>
	</div>
	<div class="_kji_ kas_pp">'; 
	require_once("system/include/track/ui_rightpanel.php");
		echo'
	</div>
</div>
</div>';

?>