<?php
if(isset($_SESSION['user_id'])){
	echo'
	<a href="/'.$_SESSION['nLog'].'">
		<button class="button_quad -color0" title="">
			<img src="content/ui/sigil_in.png" alt="">
		</button>
	</a>';
}else{
	echo'
	<button class="button_quad -color0" title="">
        <img src="content/ui/sigil_in.png" alt="">
    </button>
    <button class="button_quad -color1" title="">
        <img src="content/ui/sigil_up.png" alt="">
    </button>';
}
?>