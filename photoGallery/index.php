<?php get_header(); ?>

        <!-- content -->
        <div class="w3-col m9 l9">
        <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile; ?>
            <?php else : ?>
               <?php echo wpautop('Sorry there are no posts'); ?>
        <?php endif; ?>
        <!-- end content -->
        </div>     

<?php get_footer(); ?>
