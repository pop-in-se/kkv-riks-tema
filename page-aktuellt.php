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
        'posts_per_page' => 99,
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

    <div class="aktuelltKort">
        
    <h1 class="rubrikBorderBottom"> 
        <a href="<?php the_permalink() ?>" ><?php the_title() ?></a>
    </h1>
    <div >
    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
    </div>
    <div class="spacer1em"></div>
            <p><?php 
            $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 20) ?></p>
            <div class="spacer"></div>
            
            <div class="verkstadsTaggar justifyRight">
        <a href="<?php the_permalink() ?>"> Läs inlägg <i class="fas fa-chevron-right" style="font-size: 1rem; margin-right: 0.5em; margin-left: 0.5em;"></i> </a>
        </div>
    </div>                      
                            
    <?php endwhile; ?> 
    
    <?php else : ?>
        <div class="colFull justifyCenter colorWhite">
            <p class="colorWhite"><?php esc_html_e( 'Tyvärr, inga inlägg hittades.' ); ?></p>
        </div>
        <?php endif; ?>
        
    </div>

<?php get_footer() ?>
