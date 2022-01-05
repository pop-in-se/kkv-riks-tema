<?php get_header() ?>

<div class="main mt4">
    <div class="col1">
    <h1 class="frontpageTitle">Konstnärernas Kollektivverkstäder</h1>
    <h2 class="frontpageSubtitle">Riksorganisation</h2>
    <div class="lineRed"></div>
    </div>
    <div class="col2 row alignCenter">
        <div class="mapContainer">
        <img loading="lazy" width="366" height="651" src="http://localhost:8888/wp-content/uploads/2021/12/sverige-karta.png" alt="" class="wp-image-30" srcset="http://localhost:8888/wp-content/uploads/2021/12/sverige-karta.png 366w, http://localhost:8888/wp-content/uploads/2021/12/sverige-karta-169x300.png 169w, http://localhost:8888/wp-content/uploads/2021/12/sverige-karta-94x168.png 94w" sizes="(max-width: 366px) 100vw, 366px">
        </div>
        <div class="mapText"> 

    <?php  
    $args = array(
        'post_type' => 'verkstad',
        'orderby' => 'title',
        'order'   => 'ASC',
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

    <div class="mapTextCitiesContainer cityList">
        <ul>
            <li>
            <a href="<?php echo esc_url( the_guid() ); ?>" class="mapTextCities"><?php the_title() ?></a>

            </li>
        </ul>
    </div>                      
                            
    <?php    
    endwhile;
    else :
        _e( 'Sorry, no posts were found.', 'textdomain' );
    endif;
    ?>

        </div>
    </div>

</div>

<div class="colFull">

        <?php
        wp_nav_menu( array( 
            'menu' => 'Startsida_lankar',
            'theme_location' => 'Startsida_lankar', 
            'container_class' => 'frontpageLinks',
            'before' => '',
            'after' => "", )
        ); 
        ?>
    
</div>

<?php get_footer() ?>