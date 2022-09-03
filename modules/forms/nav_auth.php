<nav>
	<div class="trafar flx btw">
		<div class="nav_left flx">
			<div><a href="/" class=""><div class="tit_he"></div></a></div>
			<div><a href='/search/all'><div class="spa_gm">Popular</div></a></div>
			<div><a href='/you/library'><div class="spa_gm">Library</div></a></div>
		</div>
		<div class="nav_middle">
			<form id="serch_fr2" method="Post" action="/search/all">
				<div class="srh_p flx">
					<input id="se_pol" required="required" name="poisk_fn" type="search" placeholder="Search for authors, tracks, albums">
					<input id="se_but" name="poisk_bt" type="submit" value="">
				</div>
			</form>
		</div>
		<div class="nav_right flx">
			<div><a href='/upload'><div class="spa_gm">Upload</div></a></div>
			<div>
			<?php
			echo"
				<a href='/".$_SESSION['nLog']."'>
				<div class='flx'>
				<div>
					<img id='lim_rto' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ava_sd."'>
				</div>
					<div class='spa_gm'>".$_SESSION['nLog']."</div>
				</div>
			</a>";
			?>
			</div>
			<div>
				<button class='ipi_s'>
					<img class='sagi' src='/content/sys/message_b.png'>
				</button>
			</div>
			<div>
				<button class='ipi_s'>
					<img class='sagi' src='/content/sys/alarm_b.png'>
				</button>
			</div>
			<div>
				<button class='ipi_s'>
					<img class='sagi' src='/content/sys/menu_b.png'>
				</button>
			</div>
		</div>
	</div>
</nav>