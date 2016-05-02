<?php
/*
 Template Name: Custom Page Example
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<!-- slick-slider-module ************************************************************************************************************************** -->

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="slickslider">
				<?php if (have_rows('slick_slider')) : while (have_rows('slick_slider')) : the_row(); ?>
					<div class="slickslider-container">
						<div class="slickslider-image">
							<img src="<?php the_sub_field('slick_slider_image'); ?>">
						</div>
						<div class="slickslider-text">
							<div class="slickslider-header"><?php the_sub_field('slick_slider_header'); ?></div>
							<div class="slickslider-subheader"><?php the_sub_field('slick_slider_subheader'); ?></div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>


<!-- main-content-module ************************************************************************************************************************** -->

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<div class="maincontent">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<!-- <p class="byline vcard">
						<?php //printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
					</p> -->
					<?php
						// the content (pretty self explanatory huh)
						the_content();
						/*
						 * Link Pages is used in case you have posts that are set to break into
						 * multiple pages. You can remove this if you don't plan on doing that.
						 *
						 * Also, breaking content up into multiple pages is a horrible experience,
						 * so don't do it. While there are SOME edge cases where this is useful, it's
						 * mostly used for people to get more ad views. It's up to you but if you want
						 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
						 *
						 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
						 *
						*/
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
		         <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
					<?php comments_template(); ?>
				</div>
				<?php endwhile; else : ?>
					<div class="post">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<!-- sidebar-module ************************************************************************************************************************** -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><?php get_sidebar(); ?></div>
	</div>
</div>

<?php get_footer(); ?>