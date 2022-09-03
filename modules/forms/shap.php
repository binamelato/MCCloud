<header id="page_header">
<nav>
	<div class="trafar flx">
		<div class="nav_left flx">
			<div><a href="/" class=""><div class="tit_he"></div></a></div>
			<!--<div><a href='/'><span class="spa_gm">Home</span></a></div>-->
			<div><a href='/search/all'><span class="spa_gm">Popular</span></a></div>
			<div><a href='/you/library'><span class="spa_gm">Library</span></a></div>
		</div>
		<div class="nav_middle">
			<div>
				<form id="serch_fr2" method="Post" action="/search/all">
					<input id="se_pol2" required="required" name="poisk_fn" type="search" placeholder="Search for authors, tracks, podcasts">
					<input id="se_but" name="poisk_bt" type="submit" value="">
				</form>
			</div>
		</div>
		<div class="nav_right flx">
	<?php
	/*if (isset($_SESSION['user_id'])) {*/
		/*$quenll = mysqli_query($link, "SELECT rating FROM profile WHERE id='{$_SESSION['user_id']}'");
		$ronl = mysqli_fetch_array($quenll);
		$cat_kl = $ronl['rating'];
		if($cat_kl ==0){
			echo'';
		}else{*/
		echo'
		<div>
			<div>
				<a class="ipi_s" href="/upload">
					<span class="spa_gm">Upload</span>
				</a>
			</div>
		</div>';
		/*}*/
	/*}*/
	if(isset($_SESSION['nLog'])){ //иконка сообщений ЛС
		echo"
		<div>
			<div class=' bggs'>";
		require_once('system/include/forms/inmess_tk.php');
		require_once('system/include/forms/inmess_pl.php');
		echo"</div>
		</div>";
	}
	/*if(isset($_SESSION['nLog'])){ //иконка настроек профиля
		echo"
		<div>
			<div class=''>
				<a class='ipi_s' href='/".$_SESSION['nLog']."/setting'>
					<img class='sagi' src='/content/sys/gear.png'>
				</a>
			</div>
		</div>";
	}*/
	if(isset($_SESSION['nLog'])){ //иконка оповещений
		echo"
		<div>
			<div class=''>
				<a class='ipi_s'>
					<img class='sagi' src='/content/sys/alarm.png'>
				</a>
			</div>
		</div>";
	}
	/*echo"
		<!--<div class=''>
			<div id='auth_foln'>-->";*/

	if (isset($_SESSION['user_id'])) { //авторизация/ профиль
		$query88 = mysqli_query($link, "SELECT * FROM profile  WHERE `id`='{$_SESSION['user_id']}'");
		$row88 = mysqli_fetch_array($query88);
		$ava_sd = $row88['avatar'];
		echo"
		<div class=''>
			<a href='/".$_SESSION['nLog']."'>
				<img id='lim_rto' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ava_sd."'>
				<span class='spa_gm'>".$_SESSION['nLog']."</span>
			</a>				 
				<ul class='prt_men'>";
				if(isset($_SESSION['metka'])){
					if($_SESSION['metka'] == 5 or $_SESSION['metka'] == 7){
					echo"
					<li>
						<a class='ipi_t' href='/".$_SESSION['nLog']."/panel'>
							<img class='sagi' src='/content/sys/panel.png'>
							panel
						</a>
					</li>";
					}
				}
				echo"
					<li>
						<a class='ipi_t' href='/logout'>
							<img class='sagi' src='/content/sys/logout.png'>
							logout
						</a>
					</li>
				</ul>
		</div>";
	}else{
		echo'
				<div class="">
					<span id="logi" class="spa_gm">Sing In</span>
				</div>
				<div class="">
					<span id="sigup" class="mf_t2 rit_a">Create Account</span>
				</div>
					 ';
	}
	?>
			<!--</div>
		</div>-->
		</div>
	</div>
</nav>
</header>