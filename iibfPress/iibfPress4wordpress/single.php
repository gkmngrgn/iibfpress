<?php get_header(); ?>
<?php get_sidebar(); ?>
</div>
<div class="right">
<div class="right_top"><!-- For Header Image --></div>
<?php include (TEMPLATEPATH . '/hmenu.php'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="table1">
            <div class="table_row1">
                <div class="head">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="right1">
                    <?php edit_post_link(__('Edit'), '<p class="edit">', '</p>'); ?>
                    <?php if ( $user_ID ) { ?>
                        <p class="edit">
                            <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Çıkış &raquo;</a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="content_txt">
            <?php the_content('<p>Bu başlığın devamını okuyun &raquo;</p>'); ?>
        </div>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.') ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

