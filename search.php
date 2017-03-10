<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="ninecol first clearfix" role="main">
						<h1 class="archive-title"><span><?php _e('Suchergebnisse für:', 'urwahl3000') ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'content', get_post_type() ); ?>
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
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e('Keine Ergebnisse.', 'urwahl3000') ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e('Es konnte kein Inhalt mit dem verwendeten Suchbegriff gefunden werden.', 'urwahl3000') ?></p>
    					    	</section>

    					    </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    			
    			    <?php get_sidebar(); ?>
    			
    			</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
