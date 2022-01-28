<?php get_header() ?>



<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-calendar-alt icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="colFull mrl4 column colorWhite mt1">
    <div class="mb1">

        <?php the_content() ?>
        <div class="colFull dashedBottom mt1 mb1"></div>
    </div>

<div class="verkstadskortContainer">
    
<?php  
    $args = array(
        'post_type' => 'kurs',
        'orderby' => 'meta_value_num',
	    'order'	=> 'ASC',
	    'meta_type' => 'DATE',
	    'meta_key' => 'datum'
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <?php 

    if ($post_query->have_posts() ) :
        while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
            
       <div class="kursKort">
        <?php 
        $startDatum = get_field('startdatum');
        $startDag = $startDatum['dag_start'];
        $startManad = $startDatum['manad_start'];
        
        $slutDatum = get_field('slutdatum');
        $slutDag = $slutDatum['dag_slut'];
        $slutManad = $slutDatum['manad_slut'];
        $datum = get_field('datum');
        $tid = get_field('tid');
        $plats = get_field('plats');
        $date = new DateTime(get_field('datum'));
        $day = $date->format('d');
        $month = $date->format('M'); 
        ?>

        <div class="colFull">

            <div class="kursRow colorBlack">
                <div class="kursDatum colorBlack column">
                        <?php if( $startDag && $startManad ): ?>
                            <h3><?php echo $startDag; ?></h3>
                            <?php echo $startManad; ?>
                            <?php endif; ?>    
                </div>
                
                <?php if ( $slutDag == $startDag && $slutManad == $startManad ) {
                    echo '<div class="displayNone">';
                    echo "";
                    echo '</div>' ;
                } else if ($slutDag && $slutManad) {
                        echo '<h4 class="colorWhite mrl05 kursCenter colFull"> – </h4>';
                        echo '<div class="kursDatum colorBlack column">';
                        echo '<h3>';
                        echo $slutDag;
                        echo '</h3>';
                        echo $slutManad;
                        echo '</div>';
                    } 
                    ?>
                </div>
            
        </div>
        
            <h1 class="rubrikBorderBottom mr1 ml1 mt1"> <?php the_title() ?> </h1>
        <div class="colFull row mr1 ml1">
        
            <div class="colorWhite mr1 ml1">
            <?php 
            $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 20) ?>
            
                
            </div>  
        </div>

        <div class="verkstadsTaggar justifyRight mt1 mb1 mr1">
        <a href="<?php the_permalink(); ?>"> Mer om kursen<i class="fas fa-chevron-right" style="font-size: 1rem; margin-right: 0.5em; margin-left: 0.5em;"></i> </a>
        </div>
    </div>      
              
        
        <?php endwhile; else : ?>
            <div class="colFull justifyCenter colorWhite">
                <p class="colorWhite"><?php esc_html_e( 'Vi kunde inte hitta några kurser.' ); ?></p>
            </div>    
            <?php endif; ?>
            
            

</div>


</div>


<?php get_footer() ?>
