<?php get_header('homepage'); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">
						<div id="featured-post">
							<?php get_template_part('featured-post'); ?>
						</div>
						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php get_template_part('loop'); ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
