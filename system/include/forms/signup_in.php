<?
if(@$_SESSION['nLog']){}else{
echo"
<div id='login_o' class='formatiko'>
	<div class='lex_c'>
		<a href='".$_SERVER['REQUEST_URI']."'><span class='clo_clo'></span></a>
	</div>
	<div class='mess4' >
	<div class='authp_f'><p class='authp_p'>Sign In</p></div>
	<div class='rreForm'>
		<a><img style='width:25px;height:25px;' src='/content/sys/4/instagram.png'></a>
		<a><img style='width:25px;height:25px;' src='/content/sys/4/facebook.png'></a>
		<a><img style='width:25px;height:25px;' src='/content/sys/4/google_plus.png'></a>
		<a><img style='width:25px;height:25px;' src='/content/sys/4/twitter.png'></a>
	</div>
	<form  method='post' action='/pass'>
	<div class=''>
	<input class='pole2' name='nLog' placeholder='Your profile name' data-error='Login' required='required' maxlength='15'>
	<br>
	<input class='pole2' name='nPas' placeholder='Your profile password *' data='Password' type='Password' required='required' maxlength='15'>
	<div class='button_blue4' >
			<button name='submit' id='inin_o' type='submit'>Continue</button>
		</div>
	</div>
	</form>
	<div style='width:100%;'>
		<a href='/support' id='som_help' style=''>Need help?</a>
	</div>
	</div>
</div>
";
}
if(@$_SESSION['nLog']){}else{
echo"
<div id='reg_o' class='formatiko'>
	<div class='lex_c'>
		<a href='".$_SERVER['REQUEST_URI']."' style='font-size: 13px;color:#969696;'><span class='clo_clo'></span></a>
	</div>
	<div class='mess4' >
	<div class='authp_f'><p class='authp_p'>Create your account</p></div>
	<form  method='post' action='/new' novalidate>
	<div class='fol_r2 regForm2'>
	<input id='pre_lon' class='pole2' name='nLog' placeholder='Enter login' autocomplete='off' data-error='Login' required='required' maxlength='15'>
	<input class='pole2' name='nPas' placeholder='Enter password' autocomplete='off'  type='Password'  maxlength='15'>
	<div class='button_blue4' >
		<button type='button' style='background-color:#848484;'>Continue</button>
	</div>
	</div>
	</form>
	</div>
</div>
";
}

?>
