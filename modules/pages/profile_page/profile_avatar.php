<?php
if($dot1 == @$_SESSION['nLog']){
	echo"<div class=' _prof_f _mji_'>
			<label for='inputImage'>
				<img class='ui_av' src='".$host."/include/avatars/".$au_avatar."'>
				<input hidden type='file' id='inputImage' name='file' accept='.jpg,.jpeg,.png,.gif,.bmp,.tiff'>
			</label>";
}else{
	echo"<div class=' _prof_d _mji_'>
			<img class='ui_av' src='".$host."/include/avatars/".$au_avatar."'>";
}
	echo"</div>
		<div class='_mji_ _kik_'>
			<span>".$au_nm."</span>
			<div class='ev_ie'>
				<span>[".$au_ll."]</span>
			</div>
		</div>";
?>