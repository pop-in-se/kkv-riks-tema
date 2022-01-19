<?php get_header() ?>
<?php 
$verkstadInfo = get_field('verkstads_info');
$ortsNamn = $verkstadInfo['ort'];

?>
<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-dot-circle icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>
   
<div class="colFull mrl4"> 
    <?php 
        get_template_part('/templates/dropdown-single-verkstad')
    ?>
</div>

<?php
$_terms = get_the_terms( $post->ID, 'ort' );

foreach ($_terms as $term) :

    $term_slug = $term->slug;
    $_posts = new WP_Query( array(
                'post_type'         => 'verkstad',
                'posts_per_page'    => 10, 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'ort',
                        'field'    => 'slug',
                        'terms'    => $term_slug,
                    ),
                ),
            ));

    if( $_posts->have_posts() ) :

        while ( $_posts->have_posts() ) : $_posts->the_post();
        ?>
        
        <div class="colFull column p3 br4 beige mrl4 mb1">
        
            <?php 
                get_template_part('/templates/verkstad-template');
            ?>
        
        </div>
        <?php
        endwhile;


    endif;
    wp_reset_postdata();

endforeach;
?>

<p class="justifyCenter mb1 mt2 colorWhite">Fler verkstäder:</p>
<div class="mrl4 beige br4 postLink row">
    <p><?php previous_post_link(); ?></p>
    <p><?php next_post_link(); ?></p>
</div>


<?php get_footer() ?>
