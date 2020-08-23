<?
echo"
	<div>
		<div id='gigos'>
			<div class='aco_leg -pratit1 _mji_'>Account Inf. / </div>
			<div class='aco_leg -pratit2 _mji_'>Content Inf.</div>
		</div>
		<div class='-pratel1'>
			<div class='aco_aiit_fn _mji_'>
				<img src='../../include/avatars/".$au_avatar."'>
				<!-- <input type='file'>-->
			</div>
			<div class='aco_ins_fn _mji_'>
				<div>Nickname:</div>			
				<div><input class='aco_parl_p' type='text' value='".$_SESSION['nLog']."'></div>	<div>Password:</div>			
				<div><input class='aco_parl_p' type='text' value=''></div>			
				<div>About you:</div>			
				<div><textarea class='aco_parl_p aco_parl_t' placeholder='About you'></textarea></div>
				<div>Contacts:</div>
				<div>
				<table id='pho_phoi'>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/vk.png'></td><td>https://vk.com/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/inst.png'></td><td>https://www.instagram.com/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/facebook.png'></td><td>https://www.facebook.com/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/twitter.png'></td><td>https://twitter.com/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/youtube.png'></td><td>https://www.youtube.com/channel/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/telegram.png'></td><td>https://t.me/</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/domain.png'></td><td>Website:</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
					<tr><td><img id='pod_ic_tab' src='/content/sys/2/email.png'></td><td>Mail:</td><td><input class='apho_pa_p' type='text' value=''></td></tr>
				</table>
				</div>
				<div>
				<input id='se_put' class='' name='save_pf' type='submit' value='Save'>
				</div>
			</div>
		</div>
		<div class='-pratel2'>
			<div>
				<div id='-pre-poi' style='width:500px;height:210px;'>
				<img style='width:100%;height:100%;' src='/content/sys/super_prevu.png'>
				</div>
			</div>
			<div>
				<div class=' _mji_ '>
					<div>Color 1:</div>			
					<div><input id='focol1' class='aco_parl_h'></div>
				</div>
				<div class=' _mji_ '>
					<div>Color 2:</div>			
					<div><input id='focol2' class='aco_pars_h'></div>
				</div>
				<div class=' _mji_ '>
					<div></div>			
					<div><input id='co-cok' type='submit' value='View'></div>
				</div>
			</div>
		</div>
	</div>";  
?>