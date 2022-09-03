<?php
if(isset($_SESSION['nLog'])){
	if($dot1 == $_SESSION['nLog']){
		echo"<div class='fiu_gh'>
				<label for='afon_pl'>
					<div class='uyi_poin'>Upload header image</div>
					<input hidden id='afon_pl' name='upl_fil' type='file' accept='.jpg,.jpeg,.png,.gif,.bmp,.tiff'>
				</label>
			</div>";
	}
}
?>