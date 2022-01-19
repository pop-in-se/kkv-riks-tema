<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-dot-circle icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="main column">
    
<?php 
        get_template_part('/templates/dropdown-page-verkstader')
    ?>

<div class="verkstadskortContainer">
    
<?php  
    $args = array(
        'post_type' => 'verkstad',
        'orderby'   => 'title',
        'order'     => 'ASC',
        'posts_per_page' => 99,
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
            
        <div class="verkstadskort">
            <?php 
            get_template_part('/templates/verkstad-card-template')
            ?>
        </div>                      
              
        
        <?php endwhile; else : ?>
            <div class="colFull justifyCenter colorWhite">
                <p class="colorWhite"><?php esc_html_e( 'Tyvärr, inga inlägg hittades.' ); ?></p>
            </div>    
            <?php endif; ?>
            
            

</div>



</div>


<?php get_footer() ?>
