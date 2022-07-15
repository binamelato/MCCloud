<?
$cc_asa = mysqli_query($link, "SELECT 1 FROM profile WHERE login='{$dot1}'");
$ca_knb = mysqli_num_rows($cc_asa);
if($kj_mum != 0){
$il_asa = mysqli_query($link, "SELECT * FROM profile WHERE login='{$dot1}'");
$ka_knb = mysqli_fetch_array($il_asa);
$a_ma = $ka_knb['login'];
$a_vk = $ka_knb['vk'];
$a_inst = $ka_knb['inst'];
$a_twit = $ka_knb['twitter'];
$a_fbook = $ka_knb['fbook'];
$a_ytube = $ka_knb['youtube'];
$a_domain = $ka_knb['domain'];
$a_telega = $ka_knb['telega'];
$a_mail = $ka_knb['mail'];
if($a_domain == '' and $a_telega == '' and $a_fbook == '' and $a_twit == '' and $a_mail == '' and $a_ytube == '' and $a_inst == '' and $a_vk == ''){
/*echo"
<div class='med_i_for'>
	<div class='like_li'>
		<img class='sagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/contacts.png'>
		<span style='vertical-align:top;'>Contacts</span>			
		<a class='li_modu'><span style='vertical-align:top;float:right;'></span></a>
	</div>
	<div class='like_pho'>
		<ul class='men_sasa_toi'>
		".$a_ma." no contact information provided
		</ul>
	</div>
</div>";*/
}else{
echo"
<div class='med_i_for'>
	<div class='like_li'>
		<img class='sagi' src='http://".$_SERVER['HTTP_HOST']."/content/sys/contact.png'>
		<span style='vertical-align:top;'>Contacts</span>			
		<a class='li_modu'><span style='vertical-align:top;float:right;'></span></a>
	</div>
	<div class='like_pho'>
		<ul class='men_sasa_toi'>";
require('system/include/profile/ui_contacts.php');
echo"
		</ul>
	</div>
</div>
";
}
}
?>