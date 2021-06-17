<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<body>
    <header class="w3-container w3-teal">
        <div class="w3-row">
            <div class="w3-col m9 l9">
                <h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
            <div class="w3-col m3 l3">
                <form method="get" action="<?php esc_url(home_url( '/')); ?>">
                    <input class="w3-input" type="text" name="s" value="Search">
                </form>
            </div>
        </div>
    </header>

    <div class="w3-row">
        <!-- side nav -->
        <div class="w3-col m3 l3">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>