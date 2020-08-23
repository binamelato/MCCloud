<?
echo"
<ul class=''>
	<li><a>Bugs Report</a></li>
		<ul class='' style='font-size:12px;'>";
		$q_new = mysqli_query($link, "SELECT * FROM news WHERE url_n='1' ORDER BY id DESC LIMIT 10");
		while ($qq_new = mysqli_fetch_array($q_new))
		{
		$name_ws = $qq_new['name_n'];
		$page_ws = $qq_new['page_n'];	
		echo"
			<li><a href='http://".$_SERVER['HTTP_HOST']."/blog/".$page_ws."'>".$name_ws."</a></li>";
		}
		echo"
		</ul>
	<li><a>Change</a></li>
		<ul class='' style='font-size:12px;'>";
		$q_new = mysqli_query($link, "SELECT * FROM news WHERE url_n='3' ORDER BY id DESC LIMIT 10");
		while ($qq_new = mysqli_fetch_array($q_new))
		{
		$name_ws = $qq_new['name_n'];
		$page_ws = $qq_new['page_n'];	
		echo"
			<li><a href='http://".$_SERVER['HTTP_HOST']."/blog/".$page_ws."'>".$name_ws."</a></li>";
		}
		echo"
		</ul>
	<li><a>Update</a></li>
		<ul class='' style='font-size:12px;'>";
		$q_new = mysqli_query($link, "SELECT * FROM news WHERE url_n='2' ORDER BY id DESC LIMIT 10");
		while ($qq_new = mysqli_fetch_array($q_new))
		{
		$name_ws = $qq_new['name_n'];
		$page_ws = $qq_new['page_n'];	
		echo"
			<li><a href='http://".$_SERVER['HTTP_HOST']."/blog/".$page_ws."'>".$name_ws."</a></li>";
		}
		echo"
		</ul>
</ul>";
?>
