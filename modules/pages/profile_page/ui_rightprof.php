<div>
			<table>
			<tr>
<?
$cvb = mysqli_query($link, "SELECT id FROM o_followers WHERE f_master='{$dot1}'");//подписки
$nm_cvb = mysqli_num_rows($cvb);
$cvz = mysqli_query($link, "SELECT id FROM o_followers WHERE f_author='{$dot1}'");
$nm_cvz = mysqli_num_rows($cvz);
if($dot1 == @$_SESSION['nLog']){
$cvx = mysqli_query($link, "SELECT id FROM o_track WHERE o_author='{$dot1}'");//треки
$nm_cvx = mysqli_num_rows($cvx);
}else{
$cvx = mysqli_query($link, "SELECT id FROM o_track WHERE o_author='{$dot1}' and `type_dost`='1'");//треки
$nm_cvx = mysqli_num_rows($cvx);	
}
echo"			
			<td><div class='brodo1'><div class='de_li'>Followers</div><div class='toi_de'>".$nm_cvb."</div></div></td>
			<td><div class='brodo1'><div class='de_li'>Following</div><div class='toi_de'>".$nm_cvz."</div></div></td>
			<td><div class='moi_ii'><div class='de_li'>Tracks</div><div class='toi_de'>".$nm_cvx."</div></div></td>";
?>			
			</tr>
			</table>
<?
	require('system/include/profile/pr_about.php');
	require('system/include/profile/pr_contacts.php');
	//require('system/include/profile/favory.php');
	require('system/include/profile/pr_likes.php');
	require('system/include/profile/pr_followers.php');
	require('system/include/profile/pr_comm.php');
	require('system/include/profile/pr_followings.php');
?>
		<div class='med_i_for'>
			<div class='like_li'>
<?
echo"	<span style='vertical-align:top;'></span>			
		<a class='li_modu'><span style='vertical-align:top;float:right;'></span></a>";
?>	
			</div>
			<div class='like_pho'>
				<ul class='men_men_toi'>

				</ul>
			</div>
		</div>
		</div>