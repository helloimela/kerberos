<?php get_header('homepage'); ?>



	<main role="main" class="main">
		<?php get_template_part('featured-post'); ?>
		<!-- section -->
		<section>

			<!-- <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
