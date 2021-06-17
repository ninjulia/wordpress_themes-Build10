<?php get_header(); ?>

    <div class="jumbotron">
        <div class="container">
            <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
            <p class="lead">
            <?php echo get_theme_mod('banner_text', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus
                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'); ?></p>
            <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url', 'https://www.google.com'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text', 'Sign up today'); ?></a></p>
        </div>
    </div>

    <section class="marketing">
        <div class="container">

            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box1_icon', 'bar-chart'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box1_heading', 'Box 1 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box1_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.'); ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box2_icon', 'code'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box2_heading', 'Box 2 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box1_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.'); ?></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="block">
                    <i class="fa fa-<?php echo get_theme_mod('box3_icon', 'desktop'); ?> fa-3"></i>
                    <h3><?php echo get_theme_mod('box3_heading', 'Box 3 Heading'); ?></h3>
                    <p><?php echo get_theme_mod('box1_text', 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.'); ?></p>
                </div>
            </div>

        </div>
    </section>

    <!-- Content Region 1 Widget -->
    <?php if(is_active_sidebar('content_region_1')) : ?>
        <?php dynamic_sidebar(('content_region_1')); ?>
    <?php endif; ?>
    <!-- End Content Region 1 Widget-->

    <!-- Content Region 2 Widget -->
    <?php if(is_active_sidebar('content_region_2')) : ?>
        <?php dynamic_sidebar(('content_region_2')); ?>
    <?php endif; ?>
    <!-- End Content Region 2 Widget-->
<?php get_footer(); ?>