<?php
/*
Template Name: Page w/ sidebar on left
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content Content--leftsidebar u-gridCol4" id="post-<?php the_ID(); ?>">
				<h4>Vraag direct een offerte aan!</h4>
				<div>
					<?php get_sidebar(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
			<article class="Content Content--rightsidebar u-gridCol8" >
				<h4><?php the_title(); ?></h4>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
