<?php get_header() ?>

<div class="heroTitleContainer">
    <div class="heroTitleContainerCol1">
      <h1 class="heroTitle"><i class="far fa-eye icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
    <div class="pageLineRed"></div>
    </div>
    <div class="heroTitleContainerCol2">
    <div class="pageLineBeige"></div>  
    </div>

</div>

<div class="aktuelltMain">

<?php  
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 9,
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

    <div class="aktuelltFull">
        
            <a href="<?php echo esc_url( the_guid() ); ?>" class="frontpageCities"><h1 class="singleVerkstadRubrik"><?php the_title() ?></h1></a>
            <p><?php the_content() ?></p>
            <?php the_author() ?>
           
    </div>                      
                            
    <?php    
    endwhile;
    else :
        _e( 'Sorry, no posts were found.', 'textdomain' );
    endif;
    ?>

</div>

<?php wp_footer()?>

<?php get_footer() ?>
