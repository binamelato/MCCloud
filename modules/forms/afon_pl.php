<?
echo"
<div id='afo_chag' class='formatiko'>
	<div>
		<a id='pred_close' href='".$_SERVER['REQUEST_URI']."'><span class='clo_clo'></span></a>
	</div>
	<div class='mess5_as' >
	<div id='gigos'><div class='aco_leg'>Upload Profile header</div></div>
		<div class='ss_ui_t'>For Best Results, Upload Images Of 1x4(height x width). 2MB File-Size Limit.</div>
		<div id='ss_rt'>
			<div id='pre_label_t8'>
				<div><div id='u_ufog'></div></div>
			</div>
			<a id='kokos' href=''></a>
			<div id='dapit'>";
if(@$dot1 == @$_SESSION['nLog']){
		echo"<div class=' _prof_f _mji_'>";
		}else{echo"<div class='_proj_d _mji_'>";}
		echo"
			<a >
				<img src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$mau_avatar."'>
			</a>
			</div>
			<div class='_mji_ _lil_'>
				<span>".$mau_nm."</span>
				<div class='ev_ie'>
					<span>[".$mau_ll."]</span>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div id='up_pod'>
		<form method='post'>
		<input id='head_y' name='par1' type='hidden' value=''>
		<input id='fol_by' name='saf_fon' type='submit' value='Save'>
		</form>
		</div>
	</div>
</div>
</div>
";
?>
