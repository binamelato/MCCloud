<?php
$query = mysqli_query($link, "SELECT 1 FROM `o_track` WHERE full_likes>=12 and id>8");
$query_length = mysqli_fetch_array($query);
if($query_length){
	echo'
	<div class="button_more_block block_location">
        <a href="/search/likes">
            <button class="button_more">Больше</button>
        </a>
    </div> 
	';
}
?>