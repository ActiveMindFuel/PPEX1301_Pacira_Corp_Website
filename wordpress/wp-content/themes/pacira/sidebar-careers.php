		
<div class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
		<aside>
			<h1 class="page-title"><?php the_title(); ?></h1>
			<?php if ( has_nav_menu( 'careers' ) ) { ?>
			   <ul class="sub-nav">
         	   <?php wp_nav_menu( array( 'theme_location' => 'careers' ) ); ?>  
         	</ul>
			<?php } ?>
      	</aside>
		<?php dynamic_sidebar( 'sidebar1' ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'legal' ) ); ?>
		<?php else : ?>
		<?php
			/*
			 * This content shows up if there are no widgets defined in the backend.
			*/
		?>
		<div class="no-widgets">
			<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
		</div>
	<?php endif; ?>
</div>
			
		