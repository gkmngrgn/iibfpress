<div class="content_txt">
    <?php if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
        if (!empty($post->post_password)) {
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) { ?>
                <p class="nocomments">This post is password protected. Enter the password to view comments.<p>
            <?php return;
            }
        }
    $oddcomment = 'alt'; ?>

<?php if ($comments) : ?>
    <h3 id="comments"><?php _e("Comments") ?></h3> 
    <ol class="commentlist">
        <?php foreach ($comments as $comment) : ?>
            <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
                <strong><?php comment_author_link() ?>:</strong><br />
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>Yorumunuz değerlendirilecektir.</em>
                <?php endif; ?>
                <?php comment_text() ?>
                <small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title="" class="commentmetadata"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?></small>
            </li>
            <?php if ('alt' == $oddcomment) $oddcomment = '';
            else $oddcomment = 'alt'; ?>
        <?php endforeach; ?>
    </ol>

<?php else : ?>
    <?php if ('open' == $post->comment_status) : ?> 
    <?php else : ?>
        <p class="nocomments">Yorumlar kapalıdır.</p>
    <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
    <h3 id="respond">Yorum Yazın</h3>
    <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <?php if ( $user_ID ) : ?>
        <p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yaptınız.</p>
    <?php else : ?>
        <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
        <label for="author"><small>Name <?php if ($req) echo "(gerekli)"; ?></small></label></p>
        <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
        <label for="email"><small>Eposta (gizli kalacak) <?php if ($req) echo "(gerekli)"; ?></small></label></p>
        <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url"><small>İnternet adresiniz (zorunlu değil)</small></label></p>
    <?php endif; ?>
    <p><textarea name="comment" id="comment" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value=<?php _e('Submit') ?> />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

</div>
