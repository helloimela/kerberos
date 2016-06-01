<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h2 class="subtitle"><?php _e( 'Archives', 'html5blank' ); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
