<?php 
$startDatum = get_field('startdatum');
$startDag = $startDatum['dag_start'];
$startManad = $startDatum['manad_start'];

$slutDatum = get_field('slutdatum');
$slutDag = $slutDatum['dag_slut'];
$slutManad = $slutDatum['manad_slut'];

    $datum = get_field('datum');
    $tider = get_field('tider');
    $tidEnd = get_field('tid_end');
    $plats = get_field('plats');
    $date = new DateTime(get_field('datum'));
    $day = $date->format('d');
    $month = $date->format('M');
    $pris = get_field('pris');
    $kursledare = get_field('kursledare');
    $deltagare = get_field('deltagare');
    $anmalningsdag = get_field('anmalningsdag');
    $kursLink = get_field('kurs_link');
?>

<?php

if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'acf/load_value', 'eae_encode_emails' );
}
?>
 <div class="redigera mt1 mrl4 justifyRight">
            <?php if ( is_user_logged_in() ) { ?>
            
                <?php 
                get_template_part('/templates/edit-page-template')
                ?>

            <?php } else { ?>
            
                <!--  Ingenting -->
                
            <?php } ?>
</div>

<div class="colFull row">

    <div class="col1">
        
        <div class="kursRow">
            <div class="kursDatum colorBlack mb2 mt2 column">
                    <?php if( $startDag && $startManad ): ?>
                        <h3><?php echo $startDag; ?></h3>
                        <?php echo $startManad; ?>
                    <?php endif; ?>    
            </div>
            
            <?php if ( $slutDag == $startDag && $slutManad == $startManad ) {
                echo '<div>';
                echo "";
                echo '</div>';
            } else if ($slutDag && $slutManad) {
                    echo '<h4 class="colorWhite mrl05 kursCenter colFull"> – </h4>';
                    echo '<div class="kursDatum colorBlack mb2 mt2 column">';
                    echo '<h3>';
                    echo $slutDag;
                    echo '</h3>';
                    echo $slutManad;
                    echo '</div>';
                } 
                ?>      
        </div>
        
    </div>

    <div class="col2">
            <div class="column mr1">

                <h5 class="colorGray">Ort: </h5> 
                <div class="kurserInfo colorBlack">
                
                    <?php
                    $featured_posts = get_field('plats');
                    if( $featured_posts ): ?>
                    
                    <?php foreach( $featured_posts as $post ): 

                        // Setup this post for WP functions (variable must be named $post).
                        setup_postdata($post); ?>
                        
                            <a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        
                    <?php endforeach; ?>
                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>

                <div class="column">
                    <?php if( $kursLink ): ?>
                    <h5 class="colorGray">Kurslänk: </h5> 
                    <div class="kurserInfo">
                    <a class="link" href="<?php echo $kursLink; ?>" target="_blank">Anmälan</a>
                </div>
                    <?php endif; ?>
                </div>
    </div>
</div>




<h1 class="rubrikBorderBottom mt2"> <?php the_title() ?> </h1>

<div class="colFull column"> 

        

    <div class="colFull">
        <div class="col1 mr1">
            
            <?php if( $tider ): ?>
                <h5 class="colorGray">Tider: </h5> 
                <p class="colorWhite"><?php echo $tider; ?></p>
            <?php endif; ?>

            <?php if( $kursledare ): ?>
                <h5 class="colorGray">Kursledare: </h5> 
                <p class="colorWhite"><?php echo $kursledare; ?></p>
            <?php endif; ?>
            
            <?php if( $pris ): ?>
                <h5 class="colorGray">Pris: </h5> 
                <p class="colorWhite"><?php echo $pris; ?> kr</p>
            <?php endif; ?>
        </div>

        <div class="col2">

            <?php if( $deltagare ): ?>
                <h5 class="colorGray">Antal deltagare: </h5> 
                <p class="colorWhite"><?php echo $deltagare; ?></p>
            <?php endif; ?>

            <?php if( $anmalningsdag ): ?>
                <h5 class="colorGray">Sista anmälningsdag: </h5> 
                <p class="colorWhite"><?php echo $anmalningsdag; ?></p>
            <?php endif; ?>
                     

        </div>
        
    </div>   

    </div>


</div>

<div class="colFull mrl4 colorWhite mt2 mb1 column"> 


    <?php the_content() ?>
    
    
</div>
    

