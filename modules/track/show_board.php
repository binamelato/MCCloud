<?
$c_uery = mysqli_query($link, "SELECT 1 FROM o_board WHERE `master`='{$p_url}'");
$l_ora = mysqli_num_rows($c_uery);
if($l_ora != 0){
$query = mysqli_query($link, "SELECT * FROM o_board WHERE `master`='{$p_url}' ORDER BY id DESC");
	while ($row = mysqli_fetch_array($query)){
	if ($profile = $row['master']){
	$m_id =$row['id'];
	$master =$row['master'];
	$mess = $row['mess'];
	$author = $row['author'];
	$date = $row['date'];
	$dame = date("y.m.d G:i");
	//$daty = $date - $dame;
		$query3 = mysqli_query($link, "SELECT id,login,avatar FROM profile WHERE login='{$author}'");
		while ($row3 = mysqli_fetch_array($query3)){
		$sid = $row3['id'];
		$sil = $row3['login'];
		$sia = $row3['avatar'];
	echo "
					<div class='msg msg2' >
                        <div>
                            <div>
								<div class='bo_img _mji_'>
									<a><img class='b0_img' src='".$fzm_host."/include/avatars/".$sia."'></a>
								</div>
								<div class='bo_lo _mji_'>
									<div>
										<a id='marma_bod' href='/".$sil."'>".$author."</a>
										<div class='bo_ms' style=''>".$mess."</div>
									</div>
								</div>
								<div class='bo_bob'>
									<div class='qu_pod ss_ui_t'>";
						if(isset($_SESSION['nLog'])){
							echo"<span id='".$m_id."' class='re_in_rei'>Reply</span> | ";
						}
									echo" Date: ".$date."
									</div>
								</div>
							</div>
							<div class='bo_comcom'>
								";
								
		$query_xc = mysqli_query($link, "SELECT * FROM o_comments WHERE `comm_id`='{$m_id}' ORDER BY id ASC");// limit 10
		if(!$query_xc) { exit("");}
		while ($row_xc = mysqli_fetch_array($query_xc)){
		if ($m_id = $row_xc['comm_id'])
		{
		$com_author =$row_xc['comm_author'];
		$com = $row_xc['comm'];
		$com_date = $row_xc['comm_date'];
			$query_cp = mysqli_query($link, "SELECT id,avatar,login FROM profile WHERE `login`='{$com_author}'");// limit 10
			if(!$query_cp) { exit("Error. С_000CP");}
			while ($row_cp = mysqli_fetch_array($query_cp)){
			if ($com_author = $row_cp['login'])
			{
			$cp_avatar =$row_cp['avatar'];
			$cp_log =$row_cp['login'];
			$cp_id =$row_cp['id'];
			
			echo"
					<div id='xds' class='xds comm_msg msg'>
                        <div>
                            <div class='bo_'>
								<div class='bo_img  _mji_'>
									<a ><img class='b0_img' src='".$fzm_host."/include/avatars/".$cp_avatar."'></a>
								</div>
								<div class='bo_jo  _mji_'>
									<div>
									<a id='marma_bod' href='/".$cp_log."'>".$com_author."</a>
									<a id='kalma_bo'>".$com_date."</a>
									<div class='bo_ms' style=''>".$com."</div>
									</div>
								</div>
							</div>
						</div>  
                    </div>
			";
		}
		}
		}
		}
						echo"
								<div style=''>
									<div class='bi_nayra".$m_id." bo_dop'>";
									require('system/include/track/ui_replycomm.php');
							echo"
									</div>
								</div>
							</div>
							";
} 
                    echo"</div>  
                    </div>";
	}
}
	echo"<div class='msg msg2'></div>";
}else{
		echo"<div class='t0_zet'>
				<div class='oioi_vede t1_zelist'></div>
				<div class='t1_menderl'>";
		if(isset($_SESSION['nLog'])){
				echo"
					<p>Seems a little quiet over here</p>
					<p>Be the first to comment on this track</p>"; 
			}else{
				echo"
					<div>Seems a little quiet over here</div>
					<div>To leave a comment you need to log in</div>"; 
			}
				echo"
				</div>
				<div class='t1_zelist'></div>
			</div>";
}
?>