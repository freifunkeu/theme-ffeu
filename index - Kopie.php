<!-- Header -->
<?php get_header(); ?>
<!-- Header ende -->
    <div id="wide">
        <div class="wrapper">
            
    <div class="left">
        <iframe src="//player.vimeo.com/video/64814620?title=0&badge=0&byline=0&portrait=0&title=0" width="730" height="410" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div id="invitebox">
        <p><a href="https://freifunk-euskirchen.de/mitmachen" class="button">Jetzt Mitmachen!</a></p>
        <p>Um aktiv am Freifunk Projekt teilzunehmen ist es lediglich 
nötig einen passenden WLAN-Router zu erwerben und ihn in der Wohnung 
aufzustellen.</p>
    </div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="wrapper">
        <div id="content">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2><?php the_title(); ?></h2>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; ?>
 
         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
 
      <?php endif; ?>
    <!--<h2>Was ist Freifunk?</h2>
    <p>Freifunk ist ein Projekt, das versucht ein stadtweites Datennetz 
auf Basis von WLAN-Routern aufzubauen. Dieses Netz soll eine freie 
Kommunikation innerhalb der ganzen Stadt und, mithilfe von Peerings zu 
anderen Städten, auch überregional ermöglichen. Um dies zu Erreichen, 
werden Freifunknoten (das sind die Router mit den Antennen), von 
freiwilligen an vielen Orten in der Stadt betrieben. Jedes WLAN-fähige 
Gerät, also beispielsweise Handy oder Notebook, kann sich in der Nähe 
eines solchen Knotens mit dem Netz verbinden und darüber mit anderen 
Teilnehmern kommunizieren. Auch ein Zugang ins Internet steht meistens 
zur Verfügung. </p>
-->
        </div> 
<!-- Sidebar -->
 <?php get_sidebar(); ?>
<!-- Sidebar ende -->
      <!-- footer -->
      <?php get_footer(); ?>
      <!-- footer ende -->