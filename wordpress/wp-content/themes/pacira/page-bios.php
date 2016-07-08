<?php
/*
 Template Name: Bios Page
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
				<!-- profile bios content - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Management Team</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="bios_profile_header">
							<div class="row">
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<img src="<?php the_field( 'bio_photo' ); ?>" alt="<?php the_field( 'bio_photo_alt' ); ?>">
								</div>
								<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
									<h2><?php the_field( 'bio_name' ); ?></h2>
									<p><?php the_field( 'bio_title' ); ?></p>
								</div>
							</div>
						</div>						
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p><?php the_field( 'bio_content' ); ?></p>
					</div>
				</div>
			</div>
		</div>

		<!-- sidebar-module ************************************************************************************************************************** -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><?php get_sidebar('about'); ?></div>
	</div>
</div>
<?php get_footer(); ?>