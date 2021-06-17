<footer class="footer content-region-3 pt30 pb40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <!-- Footer 1 Widget -->
                <?php if(is_active_sidebar('footer_1')) : ?>
                <?php dynamic_sidebar(('footer_1')); ?>
                <?php endif; ?>
                <!-- Footer 1 Widget -->
            </div>
            <div class="col-lg-4">
                <!-- Footer 2 Widget -->
                <?php if(is_active_sidebar('footer_2')) : ?>
                <?php dynamic_sidebar(('footer_2')); ?>
                <?php endif; ?>
                <!-- Footer 2 Widget -->
            </div>
            <div class="col-lg-4">
                <!-- Footer 3 Widget -->
                <?php if(is_active_sidebar('footer_3')) : ?>
                <?php dynamic_sidebar(('footer_3')); ?>
                <?php endif; ?>
                <!-- Footer 3 Widget -->
            </div>
        </div>
    </div>
    <div class="container pt40">
        <p class="text-center">&copy; <?php echo get_the_date('Y');?> <?php echo bloginfo('name'); ?></p>
    </div>

</footer>

<script src="<?php bloginfo('template_directory'); ?>js/bootstrap.js"></script>
<?php wp_footer(); ?>
</body>

</html>