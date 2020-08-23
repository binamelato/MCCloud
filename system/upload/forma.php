
<div class='m_forma' style='display:none;'>
	<div style='font-size:14px;right:25px;position:absolute;'>
		<a style='font-size: 13px;color:#969696;' href=''><span class='clo_clo'></span></a>
	</div>
<div class='messxz' >
	<div>
		<div id='gigos'>
			<div class='aco_leg -pratit1 _mji_'>Track Upload</div>
			<div class='aco_leg -pratit2 _mji_'></div>
		</div>
		
		<div class='-pratel1'>
<div class='aco_aiit_fn _mji_ '>
	<div id='pre_label_t8'>
	<?
		if($f_picture != ''){//всегда пусто потому что в таблу base64 не пишу
			echo"<img src='".$f_picture."'>";
		}else{
			echo"<img src='/content/octava/tracks/label/default.jpg'>";
		}
	?>
	</div>
	<form id="jiji" method="POST" enctype="multipart/form-data">
		<div id='daad'><input type='file' id='hiihf' name='malis'></div>
	</form>
</div>
<div class='aco_ins_fn _mji_ '>
	<div>Name of Track:</div>
	<div><input id='t_name' class='aco_parl_p' type='text' value='<?echo $f_title;?>'></div>
	<div>Description:</div>
	<div><textarea class='aco_parl_p t_des' placeholder='Description'><?echo $f_text;?></textarea></div>
	<div>
		<div>Genre:</div>
		<div class=' _mji_ '>
		<div>
			<select id='t_genr'>
				<?
	$opip = mysqli_query($link, "SELECT * FROM o_track_genre");
	while ($ropi = mysqli_fetch_array($opip)){
	$tg_pip = $ropi['tg_name'];
		echo"<option value='".$tg_pip."'>".$tg_pip."</option>";
	}
				?>
  				<option value='Mygenre'>New</option>
			</select>
		</div>
		</div>
		<div class=' _mji_ '>
<div>
	<input id='Mygenre' class='t_menr' type='text' placeholder="My genre">
</div>
		</div>
	</div>
	<div>
		<div>Album:</div>
		<div class=' _mji_ '>
		<div>
			<select id='t_album'>
				<?
	$olip = mysqli_query($link, "SELECT * FROM o_album WHERE a_author='{$_SESSION['nLog']}'");
	while ($ropi = mysqli_fetch_array($olip)){
	$tl_id = $ropi['id'];
	$tl_nam = $ropi['a_name'];
		echo"<option value='".$tl_id."'>".$tl_nam."</option>";
	}
				?>
				<option value='Myalbum'>New</option>
			</select>
		</div>
		</div>
		<div class=' _mji_ '>
		<div>
			<input id='Myalbum' class='t_menr' type='text' placeholder="New album">
		</div>
		</div>
	</div>
	<div>
		<div>tags:</div>
		<div><textarea class='aco_parl_p t_dek tag_des' placeholder='Description'></textarea></div>
	</div>
	<div>
		<label for='che_pu'>Public</label><input type='checkbox' id='che_pu' name='Perve' value='2'>
	</div>
	<div>
		<input id='se_put' name='save_bt' type='submit' value='Save'>
	</div>
</div>
		</div>
		<div class='prtik-ti'></div>
	</div>
</div>
</div>