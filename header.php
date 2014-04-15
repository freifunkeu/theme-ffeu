   <?php wp_head(); ?> <!DOCTYPE HTML>
<html>
<head><title>
	<?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?>
</title><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" type="text/css" /><meta name="viewport" content="width = 1000" /><link href="<?php echo  get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" /><link rel="icon" href="<?php echo  get_bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
</head>
<body>
    <div id="header">
        <div class="wrapper">
            <div id="logo">
                <a href="/">
                    <img alt="freifunk Euskirchen" src="<?php echo  get_bloginfo('template_directory'); ?>/images/logo.png" /></a>
            </div>
            <div id="freifunkhead">
                <a href="/">
                    <h1>Freifunk Euskirchen</h1>
                </a>
                <ul class="links">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </ul>
            </div>
            <div id="social">
                <a href="https://www.twitter.com/freifunkeu" target="_blank">
                    <img alt="freifunk euskirchen auf twitter" src="<?php echo  get_bloginfo('template_directory'); ?>/images/ic_twitter.png" /></a> <a href="https://www.facebook.com/freifunkeuskirchen" target="_blank">
                        <img alt="freifunk euskirchen auf facebook" src="<?php echo  get_bloginfo('template_directory'); ?>/images/ic_facebook.png" /></a>
            </div>
        </div>
    </div>
