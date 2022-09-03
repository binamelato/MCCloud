<?
if($dot1 == $_SESSION['nLog']){
			echo"
				<div class='tr-dopa-pti'>
					<div>
					<ul class='tr-non-op'>
						<li><a class='a_fvpl' ><img src='".$fzm_host."/content/sys/gear.png'>Functions</a></li>
					</ul>
					</div>
					<ul class='tr-optis'>
						<li><a class='a_fvpl' id='".$p_id."'><img src='".$fzm_host."/content/sys/playlist.png'>Edit album</a></li>
						<li><a class='a_fvpl'><img src='".$fzm_host."/content/sys/favorite.png'>Del album</a></li>
					</ul>
				</div>";
			}else{
			if(isset($_SESSION['nLog'])){
			echo"
			<div class='tr-dopa-pti'>
				<div>
					<ul class='tr-non-op'>
						<li><a class='a_fvpl' ><img src='".$fzm_host."/content/sys/gear.png'>Functions</a></li>
					</ul>
				</div>
				<!--
					<ul class='tr-optis'>
						<li><a class='a_fvpl'><img src='".$fzm_host."/content/sys/favorite.png'>Repost</a></li>
					</ul>
				-->
			</div>
				";
			}else{
				echo"<div class='tr-dopa-pti'>
					<span></span>
				</div>";
			}			
			}
?>