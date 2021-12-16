
<?php
// Load values and assign defaults.
$verkstadInfo = get_field('verkstads_info');
$namn = $verkstadInfo['verkstadens_namn'];
$adress = $verkstadInfo['adress'];
$hemsida = $verkstadInfo['hemsida'];
$epost = $verkstadInfo['e-post'];
$telefon = $verkstadInfo['telefon'];
$kontaktperson = $verkstadInfo['kontaktperson'];
$omVerkstaden = $verkstadInfo['text_om_verkstaden'];
$bild = get_the_post_thumbnail();
?>


<h1 class="singleVerkstadRubrik"> 
<a href="<?php echo esc_url( the_guid() ); ?>"><?php echo $namn; ?></a>
</h1>

<div class="singleVerkstadFull">
    <div class="singleVerkstadCol1">
        <p><?php echo $adress; ?></p>
    </div>

        <div class="singleVerkstadCol2">

            <div class="singleVerkstadContactItems">
            <?php if( $hemsida ): ?>
                <i class="fas fa-globe" style="font-size: 1rem; margin-right: 1em;"></i><a href="<?php echo $hemsida; ?>" target="_blank"> <?php echo $hemsida; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="singleVerkstadContactItems">
            <?php if( $epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $epost; ?>" target="_blank"> <?php echo $epost; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="singleVerkstadContactItems">
                <?php if( $telefon ): ?>
                <i class="fas fa-phone-alt" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $telefon; ?></p>
                <?php endif; ?>
            </div>
            
            <div class="singleVerkstadContactItems">
                <?php if( $kontaktperson ): ?>
                    <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i>
                    <p><?php echo $kontaktperson;?></p>
                <?php endif; ?>
            </div>
            
        </div>
</div>

        <div class="singleVerkstadFull">
    
        <div class="singleVerkstadCol1">
        <p><?php the_content() ?></p>
        </div>
        <div class="singleVerkstadCol2">
            <?php if( $bild ): ?>
                <div class="singleVerkstadImg"> 
                        
                        <img src="<?= $bild ?>" alt="">
                        
                </div>
            <?php endif; ?>
        </div>
        
        </div>

        
         <!-- Verkstadstaggar -->


         <p class="weOffer">Hos oss finns:</p>
            <div class="verkstadsTaggar">
                <?php
                    $post_tags = get_the_tags();
                    $separatorTags = ' ';
                    $outputTags = '';

                    if ( ! empty( $post_tags ) ) {
                        foreach ( $post_tags as $tag ) {
                            $outputTags .= '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . __( $tag->name ) . '</a>' . $separatorTags;
                        }


                    echo trim( $outputTags, $separatorTags );
                }
                ?>
            </div>
        </div>

        <!-- /Verkstadstaggar -->
        
        </div>