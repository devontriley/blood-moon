<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <script data-main="wp-content/themes/blankslate/scripts/main.js" src="wp-content/themes/blankslate/scripts/modules/requirejs/require.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="primary-header" role="banner">
    <div id="header-inner"></div>
        <nav id="menu" role="navigation">
            TEST NAV
        </nav>
    </div> <!-- .header-inner -->
</header>
<div id="container">

    <div id="body-content">
        <div id="barba-wrapper">
            <div class="barba-container">