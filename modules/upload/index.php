<?
session_start(); 
require_once ('../../func/gen0.php');
require_once ('../../func/date.php');
require_once ('../../system/include/header.php');
?>
<body>
<div class="in_fol"></div>
<?
require_once ('../../system/include/forms/nav.php');

if (isset($_SESSION['user_id'])) {
$quenll = mysqli_query($link, "SELECT rating FROM profile WHERE id='{$_SESSION['user_id']}'");
	$ronl = mysqli_fetch_array($quenll);
	$cat_kl = $ronl['rating'];
if($cat_kl == 0){}else{
$ss = mysqli_query ($link, "SELECT id FROM o_track WHERE `o_author` = '{$_SESSION['nLog']}' and `type_dost`='2'");
$ss_n = mysqli_fetch_array($ss);
$ss_id = $ss_n['id'];
$qq = mysqli_query ($link, "SELECT * FROM o_track_id3 WHERE `g_trid` = '{$ss_id}'");
$qq_n = @mysqli_fetch_array($qq);
$f_title = $qq_n['g_title'];
$f_text = $qq_n['g_text'];
$f_genre = $qq_n['g_genre'];
$f_album = $qq_n['g_album'];
$f_picture = $qq_n['g_picture'];
	require_once('forma.php');
}}
?>
<div id='header' class='_t'>
	<div class="u_ma">
	<div class="u_mpod">
		<div class="u_ti"><span>Upload to MusicCloud</span></div>
		
<?
if (isset($_SESSION['user_id'])) {
$quenll = mysqli_query($link, "SELECT rating FROM profile WHERE id='{$_SESSION['user_id']}'");
	$ronl = mysqli_fetch_array($quenll);
	$cat_kl = $ronl['rating'];
	if($cat_kl == 0){
		echo'
	<div class="u_ar">
		<p>You do not have the rights to perform this action !</p>
	</div>';
	}else{
	echo'
	<form id="tra_kj" method="POST" enctype="multipart/form-data">
		<label class="">
			<input type="file" id="uplitrack" name="myfile" class="inputfile">
			<div class="up_db">
				<div id="upload_Button" class="spa_vv">Choose file to upload</div>
			</div>
		</label>
	</form>
';

	}
}else{}
?>
		
		<div class="u_podlv">
			<div>
				<span id='spi_of'>Important</span><span>: By sharing, you confirm that your sounds don’t infringe anyone else’s rights.</span>
			</div>
			<div>
				<span>What types of files can I upload? You can upload MP3 files. The maximum file size is 10MB.</span>
			</div>
		</div>
	</div>
	</div>
</div>
<script>
    var param_aut = '<? echo $_SESSION['nLog']; ?>';
</script>
<?
require_once ('../../system/include/footer.php');
?>
