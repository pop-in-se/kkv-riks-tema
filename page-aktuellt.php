<?php get_header() ?>

<div class="mrl4 h30vh hero">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-eye icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="main column mt2">

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

    <div class="aktuelltKort">
        
    <h1 class="rubrikBorderBottom"> 
        <a href="<?php echo esc_url( the_guid() ); ?>" ><?php the_title() ?></a>
    </h1>
            <p><?php 
            $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 15) ?></p>
            <div class="spacer1em"></div>
            <p>Skrivet av: <?php the_author() ?> </p>
           
    </div>                      
                            
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Tyvärr, inga inlägg hittades.' ); ?></p>
    <?php endif; ?>

</div>

<?php get_footer() ?>
