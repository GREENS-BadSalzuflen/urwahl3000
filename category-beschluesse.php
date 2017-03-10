				<?php get_header(); ?>
				<div id="main" class="ninecol first clearfix" role="main">
					<h1><?php _e('Suche', 'urwahl3000') ?></h1>

					    <?php while ( have_posts() ) : the_post(); ?>
					    	<?php get_template_part( 'content-headerlist', get_post_format() ); ?>
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('kr8_page_navi')) { ?>
					            <?php kr8_page_navi(); ?>
					        <?php } else { ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(__('&laquo; Ältere Beiträge', 'urwahl3000')) ?></li>
								        <li class="next-link"><?php previous_posts_link(__('Neuere Beiträge &raquo;', 'urwahl3000')) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>		
					

			
			
    		</div> <!-- end #main -->
    
			<?php get_sidebar(); ?>
			<?php get_footer(); ?>
