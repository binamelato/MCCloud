<?php
session_start(); 
require_once ('system/functions/gen0.php');
require_once ('system/functions/date.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="image/x-icon" rel="icon" href="content/ui/musical-note.png" />
    <link rel="stylesheet" type="text/css" media="all"  href="system/style/portal.css" />
    <link rel="stylesheet" type="text/css" media="all"  href="system/style/main_page.css" />
</head>
<body>
    <header class="block -color9 header_image">
        <nav>
            <ul class="flx btw">
                <li class="block_name">Music cloud</li>
                <li class="block_login_form">
                    <div class="flx">
						<?php require_once ("modules/pages/main_page/form_signIn_Up.php"); ?>                        
                    </div>
                </li>
            </ul>
        </nav>
        <h1>Присоединяйся</h1>
        <h4>Откройте для себя все разнообразие музыкальных композиций</h4>
    </header>
    <main>        
        <section class="block -color9" aria-label="">
            <div class="form_search block_location">
                <form method='Post' action="/search/all" class="container_search flx">
                    <input type="search" class="field_search" required='required' placeholder="Поиск по авторам, трекам, проектам" autocomplete="off">
                    <input type="submit" class="button_search" value="">
                </form>
            </div>            
        </section>
        <section class="block -color9" aria-label="">
            <div class="block_title block_location">Новые треки</div>
            <div class="block_body block_location flx flw">
				<?php require_once ("modules/pages/main_page/select_last_tracks.php"); ?>				
			</div>
        </section>
        <section class="block -color9" aria-label="">
            <?php require_once ("modules/pages/main_page/new_tracks_button_more.php"); ?>	          
        </section>
        <section class="block -color9" aria-label="">
            <div class="block_title block_location">Популярные треки</div>
            <div class="block_body block_location flx flw">
				<?php require_once ("modules/pages/main_page/select_popular_tracks.php"); ?>
			</div>
        </section>
        <section class="block -color9" aria-label="">
            <?php require_once ("modules/pages/main_page/popular_tracks_button_more.php"); ?>            
        </section>
        <section aria-label="">
            <div class="in_fol">
				<?php /*require_once("modules/forms/signup_in.php"); */ ?>
			</div>
        </section>
    </main>
    <footer class="block">
        <a href='/'>© MusicCloud</a> |
		<a href='/about'>About</a> |
		<a href='/blog'>blog</a> |
		<a href='/support'>help</a> |
		<a href >Donate</a> |
		<a href='/support/14'>Copyright</a>
    </footer>
	<script src="/system/js/v-portal.js"></script>
</body>
</html>