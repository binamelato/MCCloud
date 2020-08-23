<?
if (!$_SESSION['nLog']){}else{
$query_cz = mysqli_query($link, "SELECT avatar FROM profile WHERE `login`='{$_SESSION['nLog']}'");
$row_cp = mysqli_fetch_array($query_cz);
$ava_zz = $row_cp['avatar'];
echo"		
				<form method='post'>
					<input type='hidden' name='comm_id' value='".$m_id."'>
					<div id='rp_plcom'>
						<img class='nAvat _mji_' src='http://".$_SERVER['HTTP_HOST']."/include/avatars/".$ava_zz."'>
							<input type='text' name='comm' id='mess_s' class='f_opa _mji_'>
							<input type='button' class='rp_otm _mji_' value='X'>
							<input type='hidden' name='add_comm' id='go_btn' value='Send' onkeypress='if(event.keyCode==13||(event.ctrlKey && event.keyCode==13))submit.click();'>
					</div>
				</form>
			";
	}
?>