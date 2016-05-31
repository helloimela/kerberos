<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h2 class="subtitle"><?php _e( 'Posts in category ', 'html5blank' ); single_cat_title(); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
