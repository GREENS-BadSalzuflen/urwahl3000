<?php

/************* COMMENT LAYOUT *********************/
		
// Comment Layout
function kr8_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li class="clearfix">
		<article id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
			<header class="comment-author vcard">
		
			   <?php echo get_avatar( $comment, 32 ); ?>
			    <!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'urwahl3000'), get_comment_author_link()) ?> 
				<time datetime="<?php echo comment_time('Y-m-j'); ?>">am <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('j. F Y')?> um <?php comment_time('H:i')?> Uhr</a></time>
				<?php edit_comment_link(__('(Bearbeiten)', 'urwahl3000'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="alert info">
          			<p><?php _e('Der Kommentar wartet auf Freischaltung.', 'urwahl3000') ?></p>
          		</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
    <!-- </li> is added by WordPress automatically -->
<?php
}


add_filter( 'avatar_defaults', 'new_default_avatar' );

function new_default_avatar ( $avatar_defaults ) {
		//Set the URL where the image file for your avatar is located
		$new_avatar_url = get_template_directory_uri() . '/lib/images/avatar.png';
		//Set the text that will appear to the right of your avatar in Settings>>Discussion
		$avatar_defaults[$new_avatar_url] = 'Urwahl3000';
		return $avatar_defaults;
}

//Fields Commentform
function kr8_commentformfields($fields){
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	    $fields['author'] = '<ul id="comment-form-elements" class="clearfix">
	  			<li><label for="author">' . __('Name', 'urwahl3000') . ( $req ? '<span class="req">*</span>' : '' ) . '</label>
	  			<input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="'. __('Name', 'urwahl3000') .'" tabindex="1"' . $aria_req . ' /></li>';
	  			
	    $fields['email'] = '<li><label for="email">' . __('Mail', 'urwahl3000') . ( $req ? '<span class="req">*</span>' : '' ) . ' <small>'. __('Wird nicht veröffentlicht', 'urwahl3000') .'</small></label>
	  			<input type="text" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" placeholder="'. __('Mail', 'urwahl3000') .'" tabindex="2"' . $aria_req . ' /></li>';
	  			
	    $fields['url'] = '<li><label for="url">' . __('Website', 'urwahl3000') . '</label>
	  			<input type="text" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="'. __('Website', 'urwahl3000') .'" tabindex="3" /></li></ul>';
	  			
	   
	    
			
			 return $fields;
	    
	    
}

add_filter('comment_form_default_fields','kr8_commentformfields');

?>