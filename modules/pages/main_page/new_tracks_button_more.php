<?php
$query = mysqli_query($link, "SELECT 1 FROM `o_track` WHERE id>'8'");
$query_length = mysqli_fetch_array($query);
if($query_length){
	echo'
	<div class="button_more_block block_location">
        <a href="/search/all">
            <button class="button_more">Больше</button>
        </a>
    </div> 
	';
}
?>