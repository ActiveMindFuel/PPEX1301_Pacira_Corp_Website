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
							<img class="slickslider-img" src="<?php the_sub_field('slick_slider_image'); ?>">
							<img class="slickslider-img-alt" src="<?php the_sub_field('slick_slider_image_alt'); ?>">
							<div class="slickslider-text">
								<div class="slickslider-header"><?php the_sub_field('slick_slider_header'); ?></div>
								<div class="slickslider-subheader"><?php the_sub_field('slick_slider_subheader'); ?></div>
							</div>
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
				<!-- flexible content - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
				<?php if( have_rows( 'flexible_content' ) ): while( have_rows( 'flexible_content' ) ): the_row(); ?>

					<!-- Headers -->
					<?php if( get_row_layout() == 'header' ): ?>
						<div id="paragraph">
							<h1>
								<?php the_sub_field( 'headline' ); ?>
							</h1>
						</div>
					<?php endif; ?>

					<!-- Profiles -->
					<?php if( get_row_layout() == 'paragraph' ): ?>
						<div id="paragraph">
							<p>
								<?php the_sub_field( 'paragraph_content' ); ?>
							</p>
						</div>
					<?php endif; ?>

					<!-- Two Tabs -->
					<?php if( get_row_layout() == 'double_tab' ): ?>
						<div id="tabs-module">
							<!-- nav two tabs -->
							<ul class="nav nav-tabs tabs-module-two-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#<?php the_sub_field( 'tab_one_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_one_id' ); ?>" role="tab" data-toggle="tab">	<?php the_sub_field( 'tab_one_title' ); ?></a></li>
								<li role="presentation"><a href="#<?php the_sub_field( 'tab_two_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_two_id' ); ?>" role="tab" data-toggle="tab"><?php 	the_sub_field( 'tab_two_title' ); ?></a></li>
							</ul>
							<!-- tab panes -->
							<div class="tab-content tabs-module-two-flex-container">
								<!-- tab one content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content active" id="<?php the_sub_field( 'tab_one_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_one_image_left' ); ?>" alt="<?php the_sub_field( 'tab_one_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_one_image_right' ); ?>" alt="<?php the_sub_field( 'tab_one_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_one_content' ); ?></p>
								</div>
								<!-- tab two content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="<?php the_sub_field( 'tab_two_id' ); ?>">
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
				
					<!-- Three Tabs -->
					<?php if( get_row_layout() == 'tripple_tab' ): ?>
						<div id="tabs-module">
							<!-- nav three tabs -->
							<ul class="nav nav-tabs tabs-module-three-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#<?php the_sub_field( 'tab_one_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_one_id' ); ?>" role="tab" data-toggle="tab">	<?php the_sub_field( 'tab_one_title' ); ?></a></li>
								<li role="presentation"><a href="#<?php the_sub_field( 'tab_two_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_two_id' ); ?>" role="tab" data-toggle="tab"><?php 	the_sub_field( 'tab_two_title' ); ?></a></li>
								<li role="presentation"><a href="#<?php the_sub_field( 'tab_three_id' ); ?>" aria-controls="<?php the_sub_field( 'tab_three_id' ); ?>" role="tab" data-toggle="tab"><?php 	the_sub_field( 'tab_three_title' ); ?></a></li>
							</ul>
							<!-- tab panes -->
							<div class="tab-content tabs-module-three-flex-container">
								<!-- tab one content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-three-content active" id="<?php the_sub_field( 'tab_one_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_one_image_left' ); ?>" alt="<?php the_sub_field( 'tab_one_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_one_image_right' ); ?>" alt="<?php the_sub_field( 'tab_one_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_one_content' ); ?></p>
								</div>
								<!-- tab two content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-three-content" id="<?php the_sub_field( 'tab_two_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_two_image_left' ); ?>" alt="<?php the_sub_field( 'tab_two_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_two_image_right' ); ?>" alt="<?php the_sub_field( 'tab_two_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_two_content' ); ?></p>
								</div>
								<!-- tab three content -->
								<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-three-content" id="<?php the_sub_field( 'tab_three_id' ); ?>">
									<div class="tabs-module-img-left">
										<img src="<?php the_sub_field( 'tab_three_image_left' ); ?>" alt="<?php the_sub_field( 'tab_three_image_left_alt' ); ?>" >
									</div>
									<div class="tabs-module-img-right">
										<img src="<?php the_sub_field( 'tab_three_image_right' ); ?>" alt="<?php the_sub_field( 'tab_three_image_right_alt' ); ?>" >
									</div>
									<p><?php the_sub_field( 'tab_two_content' ); ?></p>
								</div>
							</div>
						</div>
					<?php endif; ?>

					<!-- Profiles -->
					<?php if( get_row_layout() == 'profile' ): ?>
						<div id="profiles">
							<div class="row">
								<?php if( have_rows( 'profile_repeater' ) ): while ( have_rows( 'profile_repeater' ) ): the_row(); ?>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="profiles-module-box-element">
											<div class="row">
												<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
													<img src="<?php the_sub_field( 'profile_photo' ); ?>" alt="<?php the_sub_field( 'profile_photo_alt' ); ?>">
												</div>
												<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
													<h2><?php the_sub_field( 'profile_name' ); ?></h2>
													<p><?php the_sub_field( 'profile_title' ); ?></p>
												</div>
											</div>
										</div>
									</div>
								<?php endwhile; endif; ?>
							</div>
						</div>
					<?php endif; ?>

				<?php endwhile; endif; ?>
			</div>
		</div>

		<!-- sidebar-module ************************************************************************************************************************** -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><?php get_sidebar(); ?></div>
	</div>
</div>
<?php get_footer(); ?>