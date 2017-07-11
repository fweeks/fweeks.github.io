</div>


<div id="footer">
	<div class="container">
	<div class="row" id="footer-widgets">
	
		<div class="c3">
			<?php if(is_active_sidebar('footer_one')) { dynamic_sidebar('footer_one'); } ?>
		</div><!--end .c3-->
		
		<div class="c3">
			<?php if(is_active_sidebar('footer_two')) { dynamic_sidebar('footer_two'); } ?>
		</div><!--end .c3-->
		
		<div class="c3">
			<?php if(is_active_sidebar('footer_three')) { dynamic_sidebar('footer_three'); } ?>
		</div><!--end .c3-->
		
		<div class="c3 last">
			<?php if(is_active_sidebar('footer_four')) { dynamic_sidebar('footer_four'); } ?>
		</div><!--end .c3-->
		
	</div><!--end .row#footer-widgets-->
	</div>
</div><!--end .container#footer-->

<div id="copyright" class="text-center">
	<div id="footer-nav">
		<p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?></p>
	</div>	
</div><!--end .container#copyright-->



<div><?php wp_footer(); ?></div>

</body>
</html>
