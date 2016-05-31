<div class="comments-page">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<h2><?php _e( 'Comments are closed here.', 'html5blank' ); ?></h2>

<?php elseif ( comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<h2><?php _e( '0 Comments. <span class="smaller">Be the first to reply</span>', 'html5blank' ); ?></h2>

<?php endif; ?>
<div class="comment-form">

	<?php
	$args = array(
		'title_reply' =>'Leave your thoughts'
		);
	comment_form( $args );
	?>
</div>

</div>
