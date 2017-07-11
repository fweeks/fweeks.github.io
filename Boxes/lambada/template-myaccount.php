<?php
/**
 * Template Name: My Account
 */
get_header(); ?>

	<div id="main-content myaccount" class="row">	
		<div class="c8">		
			<div class="content clearfix">
				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
			
						<div class="entry clearfix">			
							<h2 class="title"><?php the_title(); ?></h2>
							
							<?php the_content(); ?>
							<?php if ( is_user_logged_in() ) { ?>
							<?php echo do_shortcode('[purchase_history]'); ?>
							<?php } else { ?>
							<i class="fa fa-sign-in"></i> You must be logged in to access your downloads!
							<?php } ?>
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
		</div><!--end .c8-->

		<div class="c4 sideb profileeditor">
			<div class="sidebar content">
			<?php echo do_shortcode('[edd_profile_editor]'); ?>
			</div>
		</div><!--end .c4-->		
		
	</div><!--end .row#main-content-->

<?php get_footer(); ?>
