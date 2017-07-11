<?php
/**
 * Template Name: Full Width
 */
get_header(); ?>

	<div id="main-content" class="row">	
		<div class="c12">		
			<div class="content clearfix">
				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
			
						<div class="entry clearfix">
			
							<?php the_post_thumbnail('thumbnail'); ?>
			
							<h2 class="title"><?php the_title(); ?></h2>
							
							<?php the_content(); ?>
							
						</div><!--end .entry-->
			
			
					<?php endwhile; ?>
				
				<?php else : ?>
			
					<div class="entry">
						<h2 class="title">Not Found</h2>
						<p>Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
					</div><!--end .entry-->
			
				<?php endif; ?>
												
			</div><!--end .content-->
		</div><!--end .c12-->
		
	</div><!--end .row#main-content-->

<?php get_footer(); ?>
