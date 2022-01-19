<?php get_header() ?>

<?php 
$rubrik = get_field('rubrik');
$underrubrik = get_field('underrubrik');
?>

<div class="main mt4">
    <div class="col1">
    <h1 class="frontpageTitle"><?php echo $rubrik; ?></h1>
    <h2 class="frontpageSubtitle"><?php echo $underrubrik; ?></h2>
    <div class="lineRed"></div>
    </div>
    <div class="col2 row alignCenter">
        <div class="mapContainer">
        <?php the_post_thumbnail() ?>
        </div>
        <div class="mapText"> 
    
            <div class="mapTextCitiesContainer cityList">
            <?php 
            $terms = get_terms('ort');

            echo '<ul>';
            foreach ($terms as $term) {
                echo '<li><a class="mapTextCities" href="'.get_term_link($term->slug, 'ort').'">'.$term->name.'</a></li>';
            }
            echo '</ul>';
            ?>
            </div>                      
                            
        </div>
    </div>

</div>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="colFull mrl2 mt4 frontpageText column" >
 
    <?php  the_content() ?> 

        <a href="<?php
                    $about_url = get_permalink('9');
                    echo $about_url;
                    ?>"> 
                <p class="mt1"> Läs mer om KKV 
        <i class="fas fa-chevron-right" style="font-size: 1rem; margin-right: 1em;"></i>
                </p>
        </a>
    </div>

    <?php endwhile; else : ?>
        <div class="colFull justifyCenter colorWhite">
                <p class="colorWhite"><?php esc_html_e( 'Tyvärr, inga inlägg hittades.' ); ?></p>
            </div>
    <?php endif; ?>



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