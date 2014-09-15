<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--leftsidebar u-gridCol12" id="post-<?php the_ID(); ?>">
				<h4><?php the_title(); ?></h4>
				<div class="Content-text">
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>

				</div> <!-- content-text -->
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

