<?php get_header(); ?>

<div class="span-18 prepend-top append-bottom last" id="page">
  <div class="content">

    <?php

       //$my_query = new WP_Query('showposts=8');
       //while ($my_query->have_posts()) : $my_query->the_post();

    // Don't show featured item
    //if ($post->ID == $featuredID) continue;

    while (have_posts()) : the_post();

    ?>

    <?php getPost($post); ?>

    <?php endwhile; ?>

    <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
    <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
  </div> <!-- /content -->

</div> <!-- /page -->

<?php get_footer(); ?>
