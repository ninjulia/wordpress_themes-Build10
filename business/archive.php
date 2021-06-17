<?php get_header(); ?>

<section class="title-bar">
  <div class="container">
    <h1>
        <?php if(is_category()){
            single_cat_title();
        } else if (is_author()){
            the_post();
            echo 'Archives By Author: ' . get_the_author();
            rewind_posts();
        }else if(is_tag()){
            single_tag_title();
        }else if(is_day()){
            echo 'Archives By Day: ' . get_the_date();
        }else if(is_month()){
            echo 'Archives By Month: ' . get_the_date('F, Y');
        }else if(is_year()){
            echo 'Archives By Year: ' . get_the_date('Y');
        }else{
            echo 'Archives';
        }
        ?>
    </h1>
  </div>
</section>

<section class="main">
  <div class="container">
    <div class="row">

      <?php if (is_active_sidebar('sidebar')) : ?>
      <div class="col-md-8">
        <?php else : ?>
        <div class="col-md-12">
          <?php endif; ?>
          <!-- Display Posts -->
          <?php if(have_posts()) : ?>
          <?php while(have_posts()): the_post(); ?>
          <article class="post">
            <div class="col-lg-5 col-md-5">
              <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
              </div>
              <?php endif; ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-block">
                <?php echo __('Read More'); ?>
              </a>
            </div>
            <div class="col-lg-7 col-md-7">
              <ul class="meta">
                <li>By
                  <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                    <?php the_author(); ?>
                  </a>
                </li>
                <li><?php the_time('F j, Y g:i a'); ?></li>
                <li>
                  <?php
                      $categories = get_the_category();
                      $separator = ", ";
                      $output = '';

                      if($categories){
                        foreach($categories as $category){
                          $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                        }
                      }
                      echo trim($output, $separator);
                    ?>
                </li>
              </ul>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>
          </article>
          <?php endwhile; ?>
          <?php else : ?>
          <article class="post">
            <?php echo wpautop('Sorry, no posts were found.'); ?>
          </article>
          <?php endif; ?>
          <?php comments_template(); ?>
          <!-- end display posts -->
        </div>

        <!-- sidebar -->
        <?php if (is_active_sidebar('sidebar')) : ?>
          <div class="col-md-4">
            <?php dynamic_sidebar(('sidebar')); ?>
          </div>
        <?php endif; ?>
        <!-- end sidebar -->

      </div>
    </div>
</section>


<!-- Content Region 2 Widget -->
<?php if(is_active_sidebar('content_region_2')) : ?>
<?php dynamic_sidebar(('content_region_2')); ?>
<?php endif; ?>
<!-- End Content Region 2 Widget-->

<?php get_footer(); ?>