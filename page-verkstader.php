<?php get_header() ?>

<div class="heroTitleContainer">
    <div class="heroTitleContainerCol1">
        <h1 class="heroTitle"><i class="fas fa-paint-brush icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
    <div class="pageLineRed"></div>
    </div>
    <div class="heroTitleContainerCol2">
    <div class="pageLineBeige"></div>  
    </div>

</div>

<div class="verkstaderMain">
    
<?php 
        get_template_part('/templates/dropdown-page-verkstader')
    ?>

<div class="verkstadskortContainer">
    
<?php  
    $args = array(
        'post_type' => 'verkstad',
        'orderby'   => 'title',
        'order'     => 'ASC',
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
            
        <div class="verkstadskort">
            <?php 
            get_template_part('/templates/verkstad-teaser')
            ?>
        </div>                      
              
                            
    <?php    
    endwhile;
    else :
        _e( 'Sorry, no posts were found.', 'textdomain' );
    endif;
    ?>
    


</div>



                    
                            
 




</div>

<?php wp_footer()?>

<?php get_footer() ?>
