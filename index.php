<?
session_start(); 
require_once ('func/gen0.php');
require_once ('func/date.php');
require_once ('system/include/header.php');
?>
<body>
<header>
	<section id='in_fol'>
			<? //require_once ('system/include/forms/signup_in.php'); ?>
	</section>
</header>
<main>
	<article>
		<section>
			<div id="gkHeader" class="mess" style='background: url(/content/ie_prev/<?echo $rlogo; ?>) center;background-size:cover;'>
			<div class="mess">
				<div class='h_upbl'>
					<div class='_mji_ lef'>
						<div class=''>Music cloud</div>
					</div>
					<div class='_mji_ rih'>
						<div class='_flx'>
			<?
			if (isset($_SESSION['user_id'])) {
							 echo'
							<div class="c_mod"><a href="/'.$_SESSION['nLog'].'"><span class="mf_t _q"><img src="/content/sys/prof.png"></span></a></div>
							 ';
							}else{
							 echo'
							<div class="c_mod"><a id="logi"><span class="mf_t _q"><img src="/content/sys/prof.png"></span></a></div>
							<div class="c_mod"><a id="sigup"><span class="mf_t _l"><img src="/content/sys/reg.png"></span></a></div>
							 ';
							}
			?>
						</div>
					</div>
				</div>
				<div>
					<div class='deys'>
						<span>Connect ON</span>
						<p>Discover the variety of musical compositions.</p>
					</div>
				</div>
			</div>
			</div>
		</section>
		<section>
			<div id='header' class='_t'>
				<div id='form_serch'>
					<div>
						<div class='s_st1'>
						<form id='serch_fr' method='Post' action='/search/all'>
							<input id='se_pol' required='required' name='poisk_fn' type='search' placeholder="Search for authors, tracks, podcasts" value='' autocomplete="off">
							<input id='se_but' name='poisk_bt' type='submit' value>
						</form>
						</div>
					</div>
				</div>
				<div class='top_rd'><p>Новые треки</p></div><!--Recently added tracks -->
				<div>
			<?
				echo "<div class='top_rf'>";
				$query = mysqli_query($link, "SELECT * FROM `o_track` where type_dost='1' ORDER BY id desc limit 12");
				while ($row = mysqli_fetch_array($query)){
				$id = $row['id'];
				$name =$row['o_name'];
				$logo = $row['o_lab'];
				$author = $row['o_author'];
				$url = $row['o_url'];
				$date = $row['o_date'];
				$vnim = strlen($name);
				if($vnim>67){
					$x_name = substr($name, 0, 23)." ...";
				}else{
					$x_name = substr($name, 0, 23);
				}
				echo "
				<div class='krug_g3'>
					<div>
						<div class='krug_1'><img src='".$fzm_host."/content/octava/tracks/label/".$logo."' class='krug_im'></div>
						<div>
							<a class='dec_b' href='".$author."/".$url."'>".$x_name."</a>
							<div class='dec_fg'><a href='/".$author."'>".$author."</a></div>
						</div>
					</div>
				</div>
				";
			}
			echo"</div>";
			?>
				</div>
				<div id='bit_podtul'>
					<a class='forten' href='/search/all'>More Tracks</a>
				</div>
			</div>
		</section>
		<section>
			<?
			$luei = mysqli_query($link, "SELECT 1 FROM `o_track` WHERE full_likes>='12'");
				$loi = mysqli_fetch_array($luei);
				if ($loi) {
				echo "
				<div id='header' class='_o'>
				<div class='top_md'><div>Most popular tracks</div></div>
				<div>
				<div class='top_rf'>";
				$query = mysqli_query($link, "SELECT * FROM `o_track` WHERE full_likes>='12' and type_dost='1' ORDER BY id desc limit 12");
				while ($row = mysqli_fetch_array($query)){
				$namez =$row['o_name'];
				$logoz = $row['o_lab'];
				$urlz = $row['o_url'];
				if($vnim>67){
					$x_namez = substr($namez, 0, 23)." ...";
				}else{
					$x_namez = substr($namez, 0, 23);
				}
				echo "
				<div class='krug_g3'>
					<div class='krug_1'>
						<img src='".$fzm_host."/content/octava/tracks/label/".$logoz."' class='krug_im'>
						<div class='kijo'>
							<a class='dec_w' href='".$author."/".$urlz."'>".$x_namez."</a>
						</div>
					</div>
				</div>
				";
			}
			echo"</div>
				<div id='bit_podtul'>
					
					</div>
					</div>
				</div>";
					}
			?>
		</section>
	</article>
</main>
<footer>
<?
require_once ('system/include/footer.php');
?>
</footer>