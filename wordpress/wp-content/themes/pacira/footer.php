		<div class="container">
			<div class="row"><div class="col-xs-12"><div class="footer-divideline"></div></div></div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-sm-push-6 col-md-push-9 col-lg-push-9">
					<div class="footer-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-9 col-lg-9 col-sm-pull-6 col-md-pull-3 col-lg-pull-3">
					<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

						<div id="inner-footer" class="wrap cf">
		
							<nav role="navigation">
								<?php wp_nav_menu(array(
    							'container-fluid' => 'div',                           // enter '' to remove nav container-fluid (just make sure .footer-links in _base.scss isn't wrapping)
    							'container-fluid_class' => 'footer-links cf',         // class of container-fluid (should you choose to use it)
    							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    							'theme_location' => 'footer-links',             // where it's located in the theme
    							'before' => '',                                 // before the menu
    							'after' => '',                                  // after the menu
    							'link_before' => '',                            // before each link
    							'link_after' => '',                             // after each link
    							'depth' => 0,                                   // limit the depth of the nav
    							'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>
		
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
		
						</div>
		
					</footer>
				</div>
			</div>
		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
