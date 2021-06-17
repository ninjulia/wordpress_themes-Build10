        <!-- sidebar -->
        <div class="large-4 medium-4 columns">
            <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
                <div class="callout">
                    <?php dynamic_sidebar( 'sidebar' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- end sidebar-->
    </div>
    <!-- end main content -->

    <footer>
    <p>&copy; <?php echo get_the_date('Y');?> <?php echo bloginfo('name'); ?></p>
    </footer>
    
    <script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>js/app.js"></script>
    <?php wp_footer(); ?>
</body>
</html>