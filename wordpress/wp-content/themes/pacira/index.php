<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
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

			<!-- Custom code goes here -->
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>