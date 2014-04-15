<?php wp_head(); ?><!DOCTYPE HTML>
<html>
<head><title>
	<?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?>
</title><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" type="text/css" /><meta name="viewport" content="width = 1000" /><link href="wp-content/themes/Freifunk-Webseite/style.css" rel="stylesheet" type="text/css" /><link rel="icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
    <div id="header">
        <div class="wrapper">
            <div id="logo">
                <a href="/">
                    <img alt="freifunk Euskirchen" src="/wp-content/themes/Freifunk-Webseite/images/logo.png" /></a>
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
                    <img alt="freifunk euskirchen auf twitter" src="wp-content/themes/Freifunk-Webseite/images/ic_twitter.png" /></a> <a href="https://www.facebook.com/freifunkeuskirchen" target="_blank">
                        <img alt="freifunk euskirchen auf facebook" src="wp-content/themes/Freifunk-Webseite/images/ic_facebook.png" /></a>
            </div>
        </div>
    </div>
    <div id="wide">
        <div class="wrapper">
            
    <div class="left">
        <iframe src="//player.vimeo.com/video/64814620?title=0&badge=0&byline=0&portrait=0&title=0" width="730" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div id="invitebox">
        <p><a href="/mitmachen" class="button">Jetzt Mitmachen!</a></p>
        <p>Um aktiv am Freifunk Projekt teilzunehmen ist es lediglich nötig einen passenden WLAN-Router zu erwerben und ihn in der Wohnung aufzustellen.</p>
    </div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="wrapper">
        <div id="content">
            
    <h2>Was ist Freifunk?</h2>
    <p>Freifunk ist ein Projekt, das versucht ein stadtweites Datennetz auf Basis von WLAN-Routern aufzubauen. Dieses Netz soll eine freie Kommunikation innerhalb der ganzen Stadt und, mithilfe von Peerings zu anderen Städten, auch überregional ermöglichen. Um dies zu Erreichen, werden Freifunknoten (das sind die Router mit den Antennen), von freiwilligen an vielen Orten in der Stadt betrieben. Jedes WLAN-fähige Gerät, also beispielsweise Handy oder Notebook, kann sich in der Nähe eines solchen Knotens mit dem Netz verbinden und darüber mit anderen Teilnehmern kommunizieren. Auch ein Zugang ins Internet steht meistens zur Verfügung. </p>

        </div>
        <?php get_sidebar(); ?>
        <div class="clear">
        </div>
        <?php wp_footer(); ?>
        <div id="footer">
            <a href="/impressum">Impressum</a>
        </div>
    </div>
    <!--Creative Commons-->
    <div id="cc">
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/deed.de">
            <img alt="Creative Commons Lizenzvertrag" style="border-width: 0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
        </a>
    </div>
    <!-- <div id="cancel">
        <div id="box">
            <h1>Freifunk Euskirchen ist gestorben.</h1>
            <small>* 14.02.2014 &nbsp; &nbsp;&nbsp; &dagger; 18.02.2014</small>
        </div>
    </div> -->
</body>
</html>
