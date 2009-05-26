<?php get_header(); ?>
<?php get_sidebar(); ?>

</div>

<div class="right">
<div class="right_top"><!-- For Header Image --></div>
<?php include (TEMPLATEPATH . '/hmenu.php'); ?>

<?php if (have_posts()) : ?>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php while (have_posts()) : the_post(); ?>
    <div class="head_bg">
        <div class="table1">
            <div class="table_row1">
                <div class="head">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <div class="date">
                    <?php the_time('d.m.Y') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content_txt">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
    </div>
    <div class="comment">
        <a href="<?php comments_link(); ?>">read comments</a> (<?php comments_number('0', '1', '%', 'number'); ?>)
    </div>

    <?php endwhile; ?>
        <div class="navigation">
            <?php next_posts_link('<div class="alignleft">&laquo; Önceki Yazılar</div>') ?>
            <?php previous_posts_link('<div class="alignright">Sonraki Yazılar &raquo;</div>') ?>
        </div>

    <?php else : ?>
        <div class="content_txt" style="padding-top:10px;">
            <h2 id="respond">Bulunamadı</h2>
            <div id="search">
                <?php include (TEMPLATEPATH . '/searchform.php'); ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

