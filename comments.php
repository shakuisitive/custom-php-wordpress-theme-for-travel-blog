<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-container">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                _nx('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title'),
                number_format_i18n(get_comments_number()),
                get_the_title()
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
                'callback'    => 'custom_comment_template',
                'max_depth'   => 3
            ));
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <?php paginate_comments_links(array(
                    'prev_text' => __('&larr; Older Comments', 'text-domain'),
                    'next_text' => __('Newer Comments &rarr;', 'text-domain'),
                )); ?>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'text-domain'); ?></p>
    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'          => __('Leave a Comment', 'text-domain'),
        'title_reply_to'       => __('Reply to %s', 'text-domain'),
        'cancel_reply_link'    => __('Cancel Reply', 'text-domain'),
        'label_submit'         => __('Post Comment', 'text-domain'),
        'comment_field'        => '<div class="comment-form-textarea"><textarea id="comment" name="comment" cols="45" rows="6" aria-required="true" placeholder="'.__('Share your thoughts...', 'text-domain').'"></textarea></div>',
        'must_log_in'          => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'logged_in_as'         => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'comment_notes_before' => '<p class="comment-notes">' . __('Your email address will not be published.') . '</p>',
        'fields'               => apply_filters('comment_form_default_fields', array(
            'author' => '<div class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" placeholder="'.__('Name', 'text-domain').'" required /></div>',
            'email'  => '<div class="comment-form-email"><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" placeholder="'.__('Email', 'text-domain').'" required /></div>',
            'url'    => '<div class="comment-form-url"><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" placeholder="'.__('Website', 'text-domain').'" /></div>'
        )),
    ));
    ?>
</div>