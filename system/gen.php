<?
session_start();
define("SITEROOTDIR", $_SERVER['DOCUMENT_ROOT']);
require_once ('../func/gen0.php');
require_once('../system/getid3/getid3.php');

if (isset($_POST['d'])) 
{
$da_is = $_POST['d'];
if(@$_POST['v']){$da_ks = $_POST['v'];}
if(@$_POST['m']){$da_ls = $_POST['m'];}
if(@$_POST['n']){$da_ms = $_POST['n'];}
if(@$_POST['i']){$da_ss = $_POST['i'];}
if(@$_POST['w']){$da_ww = $_POST['w'];}

if($da_is == 'do_tag'){//Для панельки js при наведении на фото
/*
$query5b = mysqli_query($link, "SELECT id FROM profile WHERE f_master='{$da_ks}'");
$_morah = mysqli_num_rows($query5b);
echo $_morah;*/
}
if ($da_is == 'login'){
	echo"
	<div id='login_o' class='formatiko'>
		<div class='lex_c'>
			<a href='".$_SERVER['REQUEST_URI']."'><span class='clo_clo'></span></a>
		</div>
		<div class='mess4' >
		<div class='authp_f'><p class='authp_p'>Sign In</p></div>
		<div class='rreForm'></div>
		<form  method='post' action='/pass'>
		<div>
		<input class='pole2' name='nLog' placeholder='Your profile name' data-error='Login' required='required' maxlength='15'>
		<br>
		<input class='pole2' name='nPas' placeholder='Your profile password *' data='Password' type='Password' required='required' maxlength='15'>
		<div class='button_blue4' >
				<button name='submit' id='inin_o' type='submit'>Continue</button>
			</div>
		</div>
		</form>
		<div style='width:100%;'>
			<a href='/support' id='som_help' style=''>Need help?</a>
		</div>
		</div>
	</div>
	";
}
if ($da_is == 'newuser'){
if($da_ks != '' or $da_ks != 0){
$ddild = iconv_strlen($da_ks);
if($ddild>=4){
$quert = mysqli_query($link, "SELECT 1 FROM users WHERE login='{$da_ks}'");
$_morah = mysqli_num_rows($quert);
if($_morah == 0){
	echo "<button type='submit' id='onNew' name='onNew' class='spa_bb'>Continue</button>";
}else{
	echo"<span id='err_reg' style='color:red;'>This nickname exists. Please choose another</span>";
	}
}else{
	echo"<span id='err_reg' style='color:red;'>Nickname must be more 4 symbols.</span>";
}
}else{
	echo "<button type='button' style='background-color:#848484;'>Continue</button>";
}
}

if ($da_is == 'tracks'){
$dot1 = $da_ks;
//$dot1 = mysql_real_escape_string(strip_tags(trim($dot1))); 
	$query55 = mysqli_query($link, "SELECT * FROM o_track WHERE `o_name` LIKE '%$dot1%' OR `o_author` LIKE '%$dot1%' OR `o_url` LIKE '%$dot1%'");
	while ($row5 = mysqli_fetch_array($query55)){
	$p_nm = $row5['o_name'];
	$p_url = $row5['o_url'];
	$p_logo = $row5['o_lab'];
	$p_auth = $row5['o_author'];
	$p_dat = $row5['o_date'];
	echo"		
			<div class='krug_g2'>
				<div class='krug_fd'>
				<div class='_mji_'>
				<div style='width:120px;height:120px;'>
						<img src='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo."' class='krug_im'>
				</div>
					<div class='kijo'>
						
					</div>
					<div>
						
					</div>
</div>
				<div class='_mji_'>
					<div style='width:500px;'>
<div id='ag1' class='audiogallery' style='opacity:0;'>
<div class='items'>
	<div id='player1' class='audioplayer-tobe' style='width:100%;' data-scrubbg='waves/scrubbg.png' data-scrubprog='waves/scrubprog.png' data-videoTitle='Audio Video' data-type='normal' data-source='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_auth."_".$p_url.".mp3' data-sourceogg='http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/".$p_auth."_".$p_url.".ogg'>
	<div class='meta-artist'><a href='/profile/".$p_auth."'><span class='the-artist'>".$p_auth."</span></a><br/><a href='/track/".$p_url."'><span class='the-name'>".$p_nm."</span></a></div>

	</div>
</div>
</div>

					</div>
				</div>
				</div>
			</div>";
		}
}
if($da_is == 'infavor'){//странные формы для добавления в фаворите? мб это для меню под картинкой трека?
$sd_new = mysqli_query($link, "SELECT o_author,o_url FROM o_tracks WHERE o_url='{$da_ks}'");
$qq_new = mysqli_fetch_array($sd_new);
$au_tr = $qq_new['o_author'];
$nn_new = mysqli_query($link, "SELECT 1 FROM o_favorite WHERE f_object='{$da_ks}' and f_author='{$_SESSION['nLog']}'");
$orage = mysqli_num_rows($nn_new);
if($orage != 0){
mysqli_query($link, "INSERT INTO `o_favorite`(`f_master`, `f_author`, `f_object`) VALUES ('{$au_tr}','{$_SESSION['nLog']}','{$da_ks}')");
echo"<a class='a_fvpl ufav' data-url='".$da_ks."'><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/favorite.png'>Un favorite</a>";
}
}
if ($da_is == 'unfavor'){
mysqli_query($link, "DELETE FROM `o_favorite` WHERE f_object='{$da_ks}' and f_author='{$_SESSION['nLog']}'");
echo"<a class='a_fvpl ifav' data-url='".$da_ks."'><img src='http://".$_SERVER['HTTP_HOST']."/content/sys/favorite.png'>In favorite</a>";
}
if ($da_is == 'rupor'){
	echo"<div id='at_t' class='formatiko'>
	<div class='lex_c'>
		<a href='' ><span class='clo_clo'></span></a>
	</div>
	<div class='messl' >
	<div id='gigos'>
		<div class='aco_leg -pratit1 _mji_'>Report</div>
	</div>
	<form  method='post'>
	<div class=''>
	<div>
	<select name='rep_option' style='width:100%;'>
		<option value='1'>Avatar image</option>
		<option value='2'>Track report</option>
		<option value='3'>Track label report</option>
		<option value='4'>nickname report</option>
		<option value='5'>other</option>
	</select>
	</div>
	<div>
	<textarea name='rep_text' class='re_tere'></textarea>
	</div>
	<div>
	<input type='submit' name='rep_send' class='pre_but_is' value='send'>
	</div>
	</div>
	</form>
	</div>
</div>";
}
if ($da_is == 'lsmess'){
	echo"<div id='ass' class='formatiko'>
	<div class='lex_c'>
		<a href='' ><span class='clo_clo'></span></a>
	</div>
	<div class='messxz'>
	<div id='gigos'><div class='aco_leg'>Messages:</div></div>";
	$omonga = mysqli_query($link, "SELECT 1 FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' GROUP BY `r_author`");
	$orage = mysqli_num_rows($omonga);
	if($orage != 0){
	$quel = mysqli_query($link, "SELECT r_author,r_master,chit FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' GROUP BY `id`");//
	while ($rod = mysqli_fetch_array($quel)){
	$ri_author = $rod['r_author'];
	$ri_chit = $rod['chit'];
	if($ri_chit){$carl = '#fda4e3;';}else{$carl = '#fff';}
		$queb = mysqli_query($link, "SELECT avatar,login FROM profile WHERE login='{$ri_author}'");
		$ron = mysqli_fetch_array($queb);
		$au_avatar = $ron['avatar'];
		$au_logi = $ron['login'];
	echo"
	<div>
		<div class='ls_in_avat _kji_' style='background-color:".$carl."'>
			<div class='ls_in_im _mji_'>
				<img src='../include/avatars/".$au_avatar."'>
			</div>
			<div class='ls_in_atar _mji_'>
				<a href='/".$au_logi."'>".$au_logi."</a>
			</div>
		</div>";
		$quoo = mysqli_query($link, "SELECT r_text,r_date,id FROM `z_mess` WHERE `r_master`='{$_SESSION['nLog']}' and `r_author`='{$ri_author}' order by id DESC Limit 1");
		$rooo = mysqli_fetch_array($quoo);
			$ri_text = $rooo['r_text'];
			$x_text = substr($ri_text, 0, 17)." ...";
			$ri_date = $rooo['r_date'];
		echo"
		<div class='ls_in_mes _kji_'>
			<div class='ls_in_dat'>".$ri_date."</div>
			<a href='/".$au_logi."/pm'><div class=''>".$x_text."</div></a>
		</div>";
		
		echo"
		<div class='ls_in_che _kji_'></div>
	</div>
	";
	}
	}else{
		echo"
		<div class='oioi_vede dlin_ilse t0_zelist'></div>
		<div class='t1_menderl'>
			<p>Seems a little quiet over here</p>
			<p>No one you not wrote</p>
		</div>";
	}
	echo"</div>
</div>";
}
if ($da_is == 'do_retrack'){
	$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$da_ks}' and o_author='{$_SESSION['nLog']}'");
	$rox = mysqli_fetch_array($quex);
	$p_nm = $rox['o_name'];
	$p_url = $rox['o_url'];
	$p_logo = $rox['o_lab'];
	$p_albu = $rox['o_album'];
	$p_auth = $rox['o_author'];
	$p_dat = $rox['o_date'];
	$p_info = $rox['o_info'];
	$p_gnr = $rox['o_genre'];
	$p_plab = $rox['o_p.label'];
	$p_lenh = $rox['o_lenth'];
	$p_doxt = $rox['type_dost'];
		$aa_n = mysqli_query($link, "SELECT * FROM o_album WHERE a_author='{$_SESSION['nLog']}' and id='{$p_albu}'");
		$aa_o = mysqli_fetch_array($aa_n);
		$al_nm = $aa_o['a_name'];
		$al_gen = $aa_o['o_genre'];
		$al_plb = $aa_o['o_p.label'];
		$al_dat = $aa_o['o_date'];
/*========*/
$getID3 = new getID3;
$pytb = '/content/octava/tracks';
$FullFileName = SITEROOTDIR.$pytb.'/'.$p_url.'.mp3';
if ((substr($file, 0, 1) != '.') && is_file($FullFileName)) {
set_time_limit(30);
$ThisFileInfo = $getID3->analyze($FullFileName);
getid3_lib::CopyTagsToComments($ThisFileInfo);
$tg_artist = htmlentities(!empty($ThisFileInfo['comments_html']['artist']) ? implode('<br>', $ThisFileInfo['comments_html']['artist']) : chr(160));
$tg_album = htmlentities(!empty($ThisFileInfo['comments_html']['album']) ? implode('<br>', $ThisFileInfo['comments_html']['album']) : chr(160));
$tg_year = htmlentities(!empty($ThisFileInfo['comments_html']['year']) ? implode('<br>', $ThisFileInfo['comments_html']['year']) : chr(160));
$tg_title = htmlentities(!empty($ThisFileInfo['comments_html']['title']) ? implode('<br>', $ThisFileInfo['comments_html']['title']) : chr(160));
$tg_comment = htmlentities(!empty($ThisFileInfo['comments_html']['comment']) ? implode('<br>', $ThisFileInfo['comments_html']['comment']) : chr(160));
$tg_genre = htmlentities(!empty($ThisFileInfo['comments_html']['genre']) ? implode('<br>', $ThisFileInfo['comments_html']['genre']) : chr(160));
}
/*========*/
	echo"<div id='at_t' class='formatiko'>
	<div class='lex_c'>
		<a href='' ><span class='clo_clo'></span></a>
	</div>
	<div class='messxz' >
	<div>
		<div id='gigos'>
			<div class='aco_leg -pratit1 _mji_'>Track Inf. / </div>
			<div class='aco_leg -pratit2 _mji_'>Meta Tag.</div>
		</div>
		<div class='-pratel1'>
			<div class='aco_aiit_fn _mji_ '>
				<img src='../content/octava/tracks/label/".$p_logo."'>
				<input type='file'>
			</div>
			<div class='aco_ins_fn _mji_ '>
				<div>Name of Track:</div>			
				<div><input class='aco_parl_p' type='text'></div>			
				<div>Description:</div>			
				<div><textarea class='aco_parl_p aco_parl_t' placeholder='Description'>
				</textarea></div>
				<div>Genre:</div>
				<div><input class='aco_parl_p' type='text'></div>
				<div>
					<div class=' _mji_ '>
					<div>Group:</div>			
					<div><input class='aco_parl_h _mji_ ' type='text'></div>
					</div>
					<div class=' _mji_ '>
					<div>Album:</div>			
					<div><input class='aco_parl_h' type='text'></div>
					</div>
				</div>
				<div>";
				if($p_doxt == 1){
					echo"<label for='che_pu'>Public</label><input type='checkbox' id='che_pu' name='Perve' value='2' checked>";
				}else{
					echo"<label for='che_pu'>Public</label><input type='checkbox' id='che_pu' name='Perve' value='2'>";
				}
				echo"</div>
				<div>
				<input id='se_put' name='save_tre' type='submit' value='Save'>
				</div>
			</div>
		</div>
		<div class='-pratel2'>
			<div class='aco_ins_fn _mji_ '>
				<div>Title:</div>			
				<div><input class='_intob title' type='text' value='".$tg_title."'></div>			
				<div>Artist:</div>			
				<div><input class='_intob artist' type='text' value='".$tg_artist."'></div>
				<div>Album:</div>
				<div><input class='_intob album' type='text' value='".$al_nm."'></div>
				<div>Year:</div>
				<div><input class='_intob year' type='text' value='".$tg_year."'></div>
			</div>
			<div class='aco_ins_fn _mji_ '>
				<div>Genre:</div>
				<div><input class='_intob genre' type='text' value='".$tg_genre."'></div>
				<div>Comments:</div>			
				<div><textarea class='_intob aco_parl_t comment' placeholder='Description'>".$tg_comment."</textarea></div>
				<div>
				<input id='se_put' class='mtag' name='save_tre' type='submit' value='Save'>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>";
}
if ($da_is == 'totrack'){
$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$da_ks}' and type_dost='1'");
$rox = mysqli_fetch_array($quex);
$pi_id = $rox['id'];
$p_nm = $rox['o_name'];
$p_url = $rox['o_url'];
$p_logo = $rox['o_lab'];
$p_lik = $rox['full_likes'];
$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}
echo"			
	<div class='add-pl-item' data-obj='".$pi_id."'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
			</span>
	</div>
";
}
if ($da_is == 'spis_track'){
	$njin = mysqli_query($link, "SELECT 1 FROM `o_pltrack` WHERE `id_pllist`='{$da_ks}'");
	$orane = mysqli_num_rows($njin);
	if($orane != 0){
	$quel = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM `o_pltrack` WHERE `id_pllist`='{$da_ks}'");
	while ($rod = mysqli_fetch_array($quel)){
	$ad_tra = $rod['id_pltrack'];
		$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$ad_tra}' and type_dost='1'");
			$rox = mysqli_fetch_array($quex);
			$p_id = $rox['id'];
			$p_nm = $rox['o_name'];
			$p_url = $rox['o_url'];
			$p_logo = $rox['o_lab'];
			$p_albu = $rox['o_album'];
			$p_auth = $rox['o_author'];
			$p_gnr = $rox['o_genre'];
			$p_lik = $rox['full_likes'];
			$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}
	echo"
	<div class='pl-item' data-pl='".$p_id."'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
			</span>
	</div>
	";
	}
	echo"<div class='pl-podv dd_in_play'>Add Here</div>";
	}else{
		echo"
		<div class=''>
			<div class=''>
				0 tracks
			</div>
		</div>";
	}
}
if ($da_is == 'creat_playlist'){
$omonga = mysqli_query($link, "SELECT 1 FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}' and `pl_dost`='2'");
$orage = mysqli_num_rows($omonga);
if($orage != 0){}else{
$query2 = mysqli_query ($link, "INSERT INTO `o_playlist`(`pl_name`, `pl_auth`, `pl_lab`, `pl_genre`, `pl_dost`) VALUES ('','{$_SESSION['nLog']}','".$_SESSION['nLog']."_d.jpeg','','2')");	
$ggg = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}' and `pl_dost`='2'");
$rog = mysqli_fetch_array($ggg);
$pii_id = $rog['pl_id'];	
	}
	echo"
	<div class='frm_add_pl' data-pls='".$pii_id."'>
		<div class=''>
			<div class='apl_leg'>Create playlist.</div>
		</div>
		<div class=''>
			<p>*When you create a new playlist, the selected track will be added to it automatically.</p>
		</div>
		<div class=''>
			<div>Name playlist:</div>			
			<div><input class='aco_parl_p -nm-pl' type='text' value=''></div>
		</div>
		<div class=''>
			<div>Genre:</div>			
			<div><input class='aco_parl_p -gr-pl' type='text' value=''></div>
		</div>
		<div class=''>
			<label for='che_pu'>Public</label><input type='checkbox' id='che_pu' name='Perve' value=''>
		</div>
		<div class=''>
			<input id='se_put' class='pl_sav' name='save_bt' type='submit' value='Save'>
		</div>
	</div>
	";
}
if ($da_is == 'save_playlist'){
if($da_ms =='true'){$par1 = 1;}else{$par1 = 0;}
$query2 = mysqli_query ($link, "UPDATE `o_playlist` SET `pl_name` = '{$da_ks}',`pl_genre` = '{$da_ls}',`pl_dost` = '{$par1}' WHERE `pl_auth` = '{$_SESSION['nLog']}' and `pl_dost` = '2'"); 

$qucx3 = mysqli_query ($link, "INSERT INTO `o_pltrack`(`id_pllist`, `id_pltrack`) VALUES ('{$da_ss}','{$da_ww}')");

	$omonga = mysqli_query($link, "SELECT 1 FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}'");
	$orage = mysqli_num_rows($omonga);
	if($orage != 0){
		$klid = 0;
		$quel = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_auth`='{$_SESSION['nLog']}'");
		while ($rod = mysqli_fetch_array($quel)){
		$p_id = $rod['pl_id'];
		$p_name = $rod['pl_name'];
		$p_lab = $rod['pl_lab'];
		$p_genr = $rod['pl_genre'];
		$klid = $klid+1;
			$mel = mysqli_query($link, "SELECT id_pllist FROM `o_pltrack` WHERE `id_pllist`='{$p_id}'");
			$omaxe = mysqli_num_rows($mel);
		echo"
		<div id='".$klid."' class='pl_in_di'>
			<div class='ls_in_im'>
				<img src='../content/octava/playlists/".$p_lab."'>
			</div>
			<div class='ls_in_atar'>
				<a>".$p_name."</a>
			</div>
		</div>";
		}
	}else{
		echo"
		<div class=''>
			<div class=''>
			</div>
		</div>";
	}
}
if ($da_is == 'add_in_pl'){
	$ge_pl = $da_ls;
	$njin = mysqli_query($link, "SELECT 1 FROM `o_pltrack` WHERE `id_pllist`='{$ge_pl}' and `id_pltrack`='{$da_ks}'");
	$orane = mysqli_num_rows($njin);
	if($orane != 0){
	$quel = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM `o_pltrack` WHERE `id_pllist`='{$ge_pl}'");
	while ($rod = mysqli_fetch_array($quel)){
	$ad_tra = $rod['id_pltrack'];
		$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$ad_tra}' and type_dost='1'");
			$rox = mysqli_fetch_array($quex);
			$p_id = $rox['id'];
			$p_nm = $rox['o_name'];
			$p_url = $rox['o_url'];
			$p_logo = $rox['o_lab'];
			$p_albu = $rox['o_album'];
			$p_auth = $rox['o_author'];
			$p_gnr = $rox['o_genre'];
			$p_lik = $rox['full_likes'];
			$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}
	echo"
	<div class='pl-item' data-pl='".$p_id."'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
			</span>
	</div>
	";
	}
	}else{
	$query2 = mysqli_query ($link, "INSERT INTO `o_pltrack`(`id_pllist`, `id_pltrack`) VALUES ('{$ge_pl}','{$da_ks}')");
	$quel = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM `o_pltrack` WHERE `id_pllist`='{$ge_pl}'");
	while ($rod = mysqli_fetch_array($quel)){
	$ad_tra = $rod['id_pltrack'];
		$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$ad_tra}' and type_dost='1'");
			$rox = mysqli_fetch_array($quex);
			$p_id = $rox['id'];
			$p_nm = $rox['o_name'];
			$p_url = $rox['o_url'];
			$p_logo = $rox['o_lab'];
			$p_albu = $rox['o_album'];
			$p_auth = $rox['o_author'];
			$p_gnr = $rox['o_genre'];
			$p_lik = $rox['full_likes'];
			$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}
	echo"
	<div class='pl-item' data-pl='".$p_id."'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
			</span>
	</div>
	";
	}
}
}
if ($da_is == 'edit_playlist'){
echo"
<div id='ass' class='formatiko'>
	<div class='lex_c'>
		<a href='' ><span class='clo_clo'></span></a>
	</div>
	<div class='messxz'>
	<div id='gigos'><div class='aco_leg'>Playlists:</div></div>
	<div>
		<div class='pl_in_sp _kji_'>";
	$que_l = mysqli_query($link, "SELECT * FROM `o_playlist` WHERE `pl_id`='{$da_ks}'");
	$pil_c = mysqli_fetch_array($que_l);
	$pil_pr1 = $pil_c['pl_name'];
	$pil_pr2 = $pil_c['pl_lab'];
	$pil_pr3 = $pil_c['pl_genre'];
	$pil_pr4 = $pil_c['pl_dost'];
	if($pil_pr4 != 0){$til_dos = 'Public';}else{$til_dos = 'Private';}
		echo"
		<div class='tabl_pl'>
			<div>".$pil_pr1."</div>
			<div class='t_img_pl'><img src='/content/octava/playlists/".$pil_pr2."'></div>
			<div>".$pil_pr3."</div>
			<div>".$til_dos."</div>
		</div>
		</div>
		<div class='pl_in_mor _kji_'>
			<div class='pl_in_das'>";
	$njin = mysqli_query($link, "SELECT 1 FROM `o_pltrack` WHERE `id_pllist`='{$da_ks}'");
	$orane = mysqli_num_rows($njin);
	if($orane != 0){
	$quel = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM `o_pltrack` WHERE `id_pllist`='{$da_ks}'");
	while ($rod = mysqli_fetch_array($quel)){
	$ad_tra = $rod['id_pltrack'];
	$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$ad_tra}' and type_dost='1'");
		$rox = mysqli_fetch_array($quex);
		$pi_id = $rox['id'];
		$p_nm = $rox['o_name'];
		$p_url = $rox['o_url'];
		$p_logo = $rox['o_lab'];
		$p_lik = $rox['full_likes'];
		$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}		
echo"			
	<div class='pl-item'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
				<div class='_mji_'>
					<a id='pl-tol-del'><span class='plo_plo' data-param='".$pi_id."'></span></a>
				</div>
			</span>
	</div>
";
	}}else{}
	   echo"</div>

		</div>
	</div>
	</div>
</div>";
}
if ($da_is == 'del_tr_pl'){
	$ge_pl = $da_ks;//playlist
	$da_ls;//track
	$njin = mysqli_query($link, "SELECT 1 FROM `o_pltrack` WHERE `id_pllist`='{$ge_pl}' and `id_pltrack`='{$da_ls}'");
	$orane = mysqli_num_rows($njin);
	if($orane != 0){
	$query1 = mysqli_query ($link, "DELETE FROM `o_pltrack` WHERE `id_pllist` = '{$ge_pl}' and `id_pltrack`='{$da_ls}'");
	$quel = mysqli_query($link, "SELECT id_pllist,id_pltrack FROM `o_pltrack` WHERE `id_pllist`='{$ge_pl}'");
	while ($rod = mysqli_fetch_array($quel)){
	$ad_tra = $rod['id_pltrack'];
		$quex = mysqli_query($link, "SELECT * FROM o_track WHERE id='{$ad_tra}' and type_dost='1'");
			$rox = mysqli_fetch_array($quex);
			$p_id = $rox['id'];
			$p_nm = $rox['o_name'];
			$p_url = $rox['o_url'];
			$p_logo = $rox['o_lab'];
			$p_albu = $rox['o_album'];
			$p_auth = $rox['o_author'];
			$p_gnr = $rox['o_genre'];
			$p_lik = $rox['full_likes'];
			$p_pla = $rox['full_plays'];
if($p_lik >= 1000000){$lil =round($p_lik/1000000, 2).'M';}else{if($p_lik >= 1000){$lil =round($p_lik/1000, 2)."K";}else{$lil =$p_lik;}}
if($p_pla >= 1000000){$slal =round($p_pla/1000000, 2).'M';}else{if($p_pla >= 1000){$slal =round($p_pla/1000, 2)."K";}else{$slal =$p_pla;}}
	echo"
	<div class='pl-item'>
		<div class='pl-item-thumb-con'>
			<div class='pl-item-thumb' style='background-image: url(http://".$_SERVER['HTTP_HOST']."/content/octava/tracks/label/".$p_logo.")'></div>
		</div>
            <span class='the-name'> - ".$p_nm."</span>
            <span class='tr_exp'>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/plap2.png'></div>
					<div class='_mji_ n-cif'>".$slal."</div>
				</div>
				<div class='_mji_'>
					<div class='_mji_ n-ply'><img src='/content/sys/like2.png'></div>
					<div class='_mji_ n-cif'>".$lil."</div>
				</div>
				<div class='_mji_'>
					<a id='pl-tol-del'><span class='plo_plo' data-param='".$p_id."'></span></a>
				</div>	
			</span>
	</div>
	";
	}
}else{}
}

}else{
	header("Location: /");exit;
}
?>
