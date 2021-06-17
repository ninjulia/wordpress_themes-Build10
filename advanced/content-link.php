<article class="post post-link">
    <div class="well">
        <?php
          $content = wp_strip_all_tags ( get_the_content() );
        ?>
        <a href="<?php echo esc_url( $content ); ?>">
          <?php echo the_title(); ?>
        </a>
    </div>
</article>
