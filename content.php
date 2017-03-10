
					    
					    



								 <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
								    <?php if ( has_post_thumbnail() ): ?>
											<a href="<?php the_permalink(); ?>" class="postimglist"><?php the_post_thumbnail('medium');  ?></a>
									<?php endif; ?>
									
																		
									<footer class="article-footer">
										<?php get_template_part( 'categories-and-tags', get_post_format() ); ?>	
									</footer> 										 
								 
									 <header class="article-header">							
										 <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1> 
									</header>
							
								
									<section class="entry-content"><?php the_excerpt(); ?><p><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="readmore"><?php _e('Weiterlesen »', 'urwahl3000') ?></a></p></section>
								

								</article> 					    
				