<?php
function shakuisitive_travel_styles_and_scripts(){
// stylesheets
wp_enqueue_style("inter_font", "https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap");
wp_enqueue_style("font_awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css");
wp_enqueue_style("main-styles", get_template_directory_uri() . "/styles/main.css");

// scripts
wp_enqueue_script("main-script", get_template_directory_uri() . "/scripts/main.js", "", "", true);
}

function shakuisitive_travel_setup(){
  add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "shakuisitive_travel_setup");
add_action("wp_enqueue_scripts", "shakuisitive_travel_styles_and_scripts");

function custom_comment_template($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
      <div id="comment-<?php comment_ID(); ?>" class="comment">
          <div class="comment-body">
              <div class="comment-meta">
                  <div class="comment-author vcard">
                      <?php echo get_avatar($comment, $args['avatar_size']); ?>
                      <b class="fn"><?php comment_author_link(); ?></b>
                  </div>
                  <div class="comment-metadata">
                      <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                          <time datetime="<?php comment_time('c'); ?>">
                              <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?>
                          </time>
                      </a>
                      <?php edit_comment_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
                  </div>
              </div>
              
              <?php if ($comment->comment_approved == '0') : ?>
                  <p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></p>
              <?php endif; ?>
              
              <div class="comment-content">
                  <?php comment_text(); ?>
              </div>
              
              <div class="reply">
                  <?php comment_reply_link(array_merge($args, array(
                      'depth' => $depth,
                      'max_depth' => $args['max_depth'],
                      'reply_text' => __('Reply'),
                      'login_text' => __('Log in to Reply')
                  ))); ?>
              </div>
          </div>
      </div>
  <?php
}