<?php get_header() ?>


<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"> <?php single_tag_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="main column">
    <div class="colFull row mt3 alignSelfLeft">
        
        <a href="<?php
                $verkstader_url = get_permalink('13');
                echo $verkstader_url;
                ?>"> 
        <p class="knappSvart"><i class="fas fa-chevron-left" style="font-size: 1rem; margin-right: 1em;"></i>Alla verkstäder</p></a>
    </div>
    
        
    

    <div class="verkstadskortContainer mt2">

        <?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
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