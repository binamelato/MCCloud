<!--
<div id="gkHeader" class="mess frontpage" style='background: url(/content/ie_prev/<?echo $rlogo; ?>) center;background-size:cover;'>
<div class="mess">
			<div id="auth_foln" style='position:absolute;left:20px;z-index:199;'><a class='spa_gh ccc-nf' href='/'>Musiccloud</a></div>
			<div id="auth_foln" style='position:absolute;right:20px;z-index:199;'>
<?
if (isset($_SESSION['user_id'])) {
				 echo"
				 <div class='gl_m'><a href='/profile/".$_SESSION['nLog']."'><span class='spa_gh'>".$_SESSION['nLog']."</span></a></div>
				 ";
				}else{
				 echo'
				 ';
				}
?>
			</div>
		</div>
<div id='cas_blog'>Blog</div>
</div>
-->
<div id='header' class='_t'>
	<div class="hup_hap">
<div class='contiks _mji_'>
	<?
	$q_new = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC LIMIT 10");
	while ($qq_new = mysqli_fetch_array($q_new))
	{
	$name_ws = $qq_new['name_n'];
	$mtex_ws = $qq_new['mtex_n'];
	$page_ws = $qq_new['page_n'];
	$autor_ws = $qq_new['autor_n'];
	$pic_ws = $qq_new['pic_n'];
	$data_ws = $qq_new['data'];
	echo"
							<div class='news_0'>
									<div class='news_title'><a href='/blog/".$page_ws."'>".$name_ws.".</a></div>
								<div class='news_text'>
									<div class='sam_kart'>
									</div>
									<div class='sam_text'>
										<div class='ss_ui_t'>".$mtex_ws."</div>
									</div>
								</div>
							</div>";}
?>
</div>
		<div class='_mji_' style='width:300px;'>
		<div class='med_i_xx'>
			<div class=''>
				<?
				require('system/include/blog/right_cat.php');
				?>
			</div>
		</div>
		</div>
	</div>
</div>

