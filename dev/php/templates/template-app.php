<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content--app" id="post-<?php the_ID(); ?>">
			<div class="u-gridContainer">
				<article class="u-gridCol4 .Content--leftsidebar">
					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" class="App-iphone" />
				</article>
				<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<h4><?php the_title(); ?></h4>
					<?php // the_content(); ?>
					Bekijk nu ook de informatie van ons bedrijf vanuit de app! De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 

					<a href="#">Download de app hier</a>

					<a href="https://play.google.com/store/apps/details?id=com.wWillemSchilderwerk"><img class="Content--app-Gimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" /></a>

					<img class="Content--app-Gimg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/willem_qr_code.jpg" />

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


