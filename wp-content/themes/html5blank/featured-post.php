<?php query_posts($query_string."&featured=yes"); ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<?php endif; ?>

	<section id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?> style="background-image:url(<?php echo $image[0];?>);">
		<div class="featured-post-entry">
			<p class="featured-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
			<p class="featured-post-excerpt"><?php the_excerpt();?></p>
		</div>
	</section>

	<?php endwhile; ?>
<?php wp_reset_query(); ?>