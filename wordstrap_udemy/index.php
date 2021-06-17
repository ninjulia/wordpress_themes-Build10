<?php get_header(); ?>

        <div class="container index">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Blog Posts</h3>
                        </div>
                        <div class="panel-body">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()): the_post(); ?>
                                    <article class="post">
                                        <div class="row">
                                            <?php if(has_post_thumbnail()): ?>
                                                <div class="col-md-3">
                                                    <div class="post-thumbnail">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>                                             
                                                </div>
                                                <div class="col-md-9">
                                                    <h2>
                                                        <a href="<?php echo the_permalink();?>">
                                                            <?php echo the_title(); ?>
                                                        </a>
                                                    </h2> 
                                                    <p class="meta">
                                                        Posted at
                                                        <?php the_time(); ?>
                                                        on
                                                        <?php the_date(); ?>
                                                        by
                                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                            <?php the_author(); ?>
                                                        </a>
                                                    </p>
                                                    <div class="excerpt">
                                                        <?php the_excerpt(); ?>
                                                        <br />
                                                        <a class="btn btn-default" href="<?php echo the_permalink();?>">Read More &raquo;</a> 
                                                    </div>
                                                </div>
                                            <?php else : ?>
                                                <div class="col-md-12">
                                                <h2>
                                                        <a href="<?php echo the_permalink();?>">
                                                            <?php echo the_title(); ?>
                                                        </a>
                                                    </h2> 
                                                    <p class="meta">
                                                        Posted at
                                                        <?php the_time(); ?>
                                                        on
                                                        <?php the_date(); ?>
                                                        by
                                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                            <?php the_author(); ?>
                                                        </a>
                                                    </p>
                                                    <div class="excerpt">
                                                        <?php the_excerpt(); ?>
                                                        <br />
                                                        <a class="btn btn-default" href="<?php echo the_permalink();?>">Read More &raquo;</a> 
                                                    </div>
                                                </div>    
                                            <?php endif; ?>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <article class="post">
                                    <?php echo wpautop('Sorry, no posts were found.'); ?>
                                </article>
                            <?php endif; ?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('sidebar')) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>    
                </div>
            </div>
        </div>
        
<?php get_footer(); ?>