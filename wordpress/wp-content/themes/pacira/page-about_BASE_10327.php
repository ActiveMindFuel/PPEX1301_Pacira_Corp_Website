<?php
/*
 Template Name: About Pacira Page
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

<!-- masthead-module ************************************************************************************************************************** -->

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="masthead">
				<img class="masthead-img" src="<?php the_field('masthead_image'); ?>">
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
				<!-- flexible content - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
					
				<!-- Tabs -->
				<?php if( have_rows( 'flexible_content' ) ): while( have_rows( 'flexible_content' ) ): the_row(); ?>
					<?php if( get_row_layout() == 'double_tab' ): ?>
						<div id="tabs-module">
							<!-- nav two tabs -->
							<ul class="nav nav-tabs tabs-module-two-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#<?php the_sub_field( 'tab_one_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_one_id' ); ?>" role="tab" data-toggle="tab">	<?php the_sub_field( 'tab_one_title' ); ?></a></li>
								<li role="presentation"><a href="#<?php the_sub_field( 'tab_two_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_two_id' ); ?>" role="tab" data-toggle="tab"><?php 	the_sub_field( 'tab_two_title' ); ?></a></li>
							</ul>
							<!-- tab panes -->
							<div class="tab-content">
								<!-- tab one content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element active" id="<?php the_sub_field( 'tab_one_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_one_image_left' ); ?>" alt="<?php the_sub_field( 'tab_one_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_one_image_right' ); ?>" alt="<?php the_sub_field( 'tab_one_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_one_content' ); ?></p>
								</div>
								<!-- tab two content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element" id="<?php the_sub_field( 'tab_two_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_two_image_left' ); ?>" alt="<?php the_sub_field( 'tab_two_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_two_image_right' ); ?>" alt="<?php the_sub_field( 'tab_two_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_two_content' ); ?></p>
								</div>
							</div>
						</div>
					<?php endif; ?>
				
					<div id="tabs-module">
						<!-- nav three tabs -->
						<ul class="nav nav-tabs three-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#technical" aria-controls="technical" role="tab" data-toggle="tab">Technical Attributes</a></li>
							<li role="presentation"><a href="#regulatory" aria-controls="regulatory" role="tab" data-toggle="tab">Regulatory Attributes</a></li>
							<li role="presentation"><a href="#commercial" aria-controls="commercial" role="tab" data-toggle="tab">Commercial Attributes</a></li>
						</ul>
						<!-- tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane box-element active" id="technical">
								<p></p>
							</div>
							<div role="tabpanel" class="tab-pane box-element" id="regulatory">
								<p></p>
							</div>
							<div role="tabpanel" class="tab-pane box-element" id="commercial">
								<p></p>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>

			</div>
		</div>

		<!-- sidebar-module ************************************************************************************************************************** -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><?php get_sidebar('about'); ?></div>
	</div>
</div>
</div>
<?php get_footer(); ?>