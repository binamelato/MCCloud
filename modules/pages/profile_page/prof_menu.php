<div class="muy_io">
		<div class="_mji_ lef_agh">
		<?
		require('system/include/profile/ui_menu.php');
		?>
		</div>
		<div class="_mji_ rig_agh">
<?
if(isset($_SESSION['nLog'])){
if($dot1 != $_SESSION['nLog']){
$iq_aa = mysqli_query($link, "SELECT 1 FROM o_followers WHERE f_master='{$dot1}' And f_author='{$_SESSION['nLog']}'");
$_mora = mysqli_num_rows($iq_aa);
if($_mora == 0){
	echo'
	<form class="_mji_" method="post">
		<input id="fol_by" name="add_foll" type="submit" name="" value="Follow">
	</form>
	<a href="/'.$dot1.'/pm">
			<input id="fol_vae" type="button" value="Mess">
	</a>
	<form class="_mji_" method="post">
		<input id="fol_vii" type="button" value="Report">
	</form>';
	}else{
		echo'
		<form class="_mji_" method="post">
			<input id="fol_by" name="del_foll"  type="submit" value="Unfollow">
		</form>
		<a href="/'.$dot1.'/pm">
			<input id="fol_vae" type="button" value="Mess">
		</a>
		<a>
			<input id="fol_vii" type="button" value="Report">
		</a>';
			}
		}else{
			echo'
			<a>
				<input id="fol_vae" type="button" value="Settings">
			</a>
			<a>
				<input id="fol_vae" type="button" value="Settings">
			</a>
			<a>
				<input id="fol_vae" type="button" value="Settings">
			</a>';
		}
	}else{}
?>
		</div>
	</div>