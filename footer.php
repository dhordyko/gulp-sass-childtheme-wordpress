</div><!-- .col-full -->
	</div><!-- #content -->



	<footer id="colophon" class="site-footer pb-3" role="contentinfo">
		<div class="container px-lg-5">
<div class="row">
<div class="col-md-3 footer1 p-0"><?php dynamic_sidebar( 'footer-1' ); ?></div>
<div class="col-md-3 footer2" ><?php dynamic_sidebar( 'footer-2' ); ?></div>
<div class="col-md-3 footer3" ><?php dynamic_sidebar( 'footer-3' ); ?></div>
<div class="col-md-3 footer4" ><?php dynamic_sidebar( 'footer-4' ); ?></div>
</div>
			<div class="row  border-0 p-0" >
				<div class="col-md-12 footer5" ><?php dynamic_sidebar( 'footer-5' ); ?></div>
			</div>
</div>

	</footer><!-- #colophon -->


</div><!-- #page -->

<?php

/**
 * Functions hooked in to wp_footer action
 * @see bridey_template_account_dropdown 	- 1
 * @see bridey_mobile_nav - 1
 * @see bridey_render_woocommerce_shop_canvas - 1 - woo
 */

wp_footer();
?>

</body>
</html>
