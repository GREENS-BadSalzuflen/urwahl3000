												<p class="byline">
												<?php
												
												$category_list = '';
												if ( 'post' == get_post_type() ) {
													$category_list = get_the_term_list( '', 'category', '<i class="fa fa-folder-open" aria-hidden="true"></i> ', ', ', '' );
												}
												elseif ( 'ai1ec_event' == get_post_type() ) {
													$category_list = get_the_term_list( '', 'events_categories', '<i class="fa fa-folder-open" aria-hidden="true"></i> ', ', ', '' );
												}
												echo $category_list;
												
												$tag_list = '';
												if ( 'post' == get_post_type() ) {
													$tag_list = get_the_tag_list( '<i class="fa fa-tag" aria-hidden="true"></i> ', ', ', '' );
												}
												elseif ( 'ai1ec_event' == get_post_type() ) {
													$tag_list = get_the_term_list( '', 'events_tags', '<i class="fa fa-tag" aria-hidden="true"></i> ', ', ', '' );
												}
												
												if ( '' != $category_list && '' != $tag_list )
													echo ' ';
												
												echo $tag_list;
												
												?></p>