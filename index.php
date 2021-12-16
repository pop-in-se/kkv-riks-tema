<?php get_header() ?>

<div class="frontpageContainer">
    <div class="frontpageContainerTitle">
    <h1 class="frontpageTitle">Konstnärernas Kollektivverkstäder</h1>
    <h2 class="frontpageSubtitle">Riksorganisation</h2>
    <div class="lineRed"></div>
    </div>
    <div class="frontpageContainerMapholder">
        <div class="frontpageContainerMap">
        <img loading="lazy" width="366" height="651" src="http://localhost:8888/wp-content/uploads/2021/12/sverige-karta.png" alt="" class="wp-image-30" srcset="http://localhost:8888/wp-content/uploads/2021/12/sverige-karta.png 366w, http://localhost:8888/wp-content/uploads/2021/12/sverige-karta-169x300.png 169w, http://localhost:8888/wp-content/uploads/2021/12/sverige-karta-94x168.png 94w" sizes="(max-width: 366px) 100vw, 366px">
        </div>
        <div class="frontpageContainerMapText"> 

    <?php  
    $args = array(
        'post_type' => 'verkstad', 
        'posts_per_page' => 9,
        'orderby' => 'title',
        'order'   => 'ASC',
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

    <div class="frontpageCitiesContainer cityList">
        <ul>
            <li>
            <a href="<?php echo esc_url( the_guid() ); ?>" class="frontpageCities"><?php the_title() ?></a>

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

<div class="frontpageContainerLinks">

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

<?php wp_footer()?>

<?php get_footer() ?>
