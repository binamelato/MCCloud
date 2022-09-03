<?
echo"
<div id='ava_chag' class='formatiko'>
	<div>
		<a id='pred_close' href='".$_SERVER['REQUEST_URI']."'><span class='clo_clo'></span></a>
	</div>
	<div class='mess4_as' >
		<div id='gigos'>
			<div class='aco_leg  _mji_'>Upload avatar</div>
		</div>
		<div id='ss_rb'>
			<div id='pree_ima'>
				<div class='img-container -pratel1'>
					<div class='img-container'>
						<img id='image' src='' alt='Picture'>
					</div>
					<div class='btn-group btn-group-crop docs-buttons'>
					<button type='button' id='fol_by'  class='-pratit2' data-method='getCroppedCanvas' data-option='{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }'>
						<span class='docs-tooltip' data-toggle='tooltip' data-animation='false'>Preview</span>
					</button>
					</div>
				</div>
				<div class='-pratel2'>
					<div class='modal fade docs-cropped' id='getCroppedCanvasModal' aria-hidden='true' aria-labelledby='getCroppedCanvasTitle' role='dialog' tabindex='-1'>
						<div class='modal-dialog'>
							<div class='modal-content'>
								<div class='modal-body'></div>
								<div class='modal-footer'>
									<button type='button' id='fol_vae' class='-pratit1' data-dismiss='modal'>Return</button>
									<button type='button' id='fol_by' class='lebesat' data-dismiss='modal'>Save</button>
									<a class='btn-primary' id='primeavat' href='javascript:void(0);'></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
		<div id='up_pod'>
		
		</div>
		</div>
	</div>
</div>";

?>
