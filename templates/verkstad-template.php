
<?php
// ACF fields.
$verkstadInfo = get_field('verkstads_info');
$namn = $verkstadInfo['verkstadens_namn'];
$adress = $verkstadInfo['adress'];
$postAdress = $verkstadInfo['postadress'];
$hemsida = $verkstadInfo['hemsida'];
$hemsida = str_replace(array('www.', 'http://', 'https://'), '', $hemsida);
$hemsida = rtrim($hemsida, '/');
$epost = $verkstadInfo['e-post'];
$telefon = $verkstadInfo['telefon'];
$kontaktpersonTelefon = $verkstadInfo['kontaktperson_telefon'];
$kontaktpersonEpost = $verkstadInfo['kontaktperson_epost'];
$kontaktperson = $verkstadInfo['kontaktperson'];
$beskrivning = $verkstadInfo['beskrivning'];
$taggar = $verkstadInfo['taggar'];
$bild = $verkstadInfo['bild'];
$bildUrl = $bild['url'];
$alt = $bild['alt'];
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

<h2 class="rubrikBorderBottom"> 
<?php echo $namn; ?>
</h2>

<div class="colFull dashedBottom pb2 mb2 row">
    <div class="col1 mr1">
    <p class="colorBeige"><?php echo $adress; ?>
    <br><?php echo $postAdress; ?></p>
    <a class="link mt1 mb1 beigeLink" href="https://maps.google.com/maps?q= <?php echo $adress, ", ", $postAdress; ?>" target="_blank"><i class="fas fa-map-marker-alt" style="font-size: 1rem; margin-right: 0.75em;"></i>Visa på karta</a>
    </div>

        <div class="col2">

            <div class="contactItems">
            <?php if( $hemsida ): ?>
                <i class="fas fa-globe" style="font-size: 1rem; margin-right: 0.75em;"></i><a href="http://<?php echo $hemsida; ?>" target="_blank"> <?php echo $hemsida; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
            <?php if( $epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 0.75em;"></i><a href="mailto:<?php echo $epost; ?>" target="_blank"> <?php echo $epost; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
                <?php if( $telefon ): ?>
                <i class="fas fa-phone-alt" style="font-size: 1rem; margin-right: 0.75em;"></i><a href="tel: <?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
                <?php if( $kontaktperson ): ?>
                    <i class="fas fa-user" style="font-size: 1rem; margin-right: 0.75em;"></i>
                    <p class="colorBeige"><?php echo $kontaktperson;?></p>  
                    <?php endif; ?>

                    <?php if( $kontaktpersonTelefon ): ?>
                    <a href="tel: <?php echo $kontaktpersonTelefon; ?>"><?php echo ", ", $kontaktpersonTelefon; ?></a>
                    <?php endif; ?>
                </div>

                <div class="contactItems">
                <?php if( $kontaktpersonEpost ): ?>
                    <i class="fas fa-at" style="font-size: 1rem; margin-right: 0.75em;"></i><a href="mailto:<?php echo $kontaktpersonEpost; ?>" target="_blank"> <?php echo $kontaktpersonEpost; ?> </a>
                <?php endif; ?>
                </div>
        </div>
</div>

<div class="colFull pb2 mb2" >
    <?php if( $bild ): ?>
        <div class="singleVerkstadImg colorBeige"> 
            
        <img src="<?php echo esc_url($bildUrl); ?>" alt="<?php echo esc_attr($alt); ?>">
            <div class="justifyRight mt05">
            <h5><?php echo esc_attr($alt); ?></h5>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <p class="weOffer">Om oss:</p>
    <div class="mb2 br4 colorWhite" >
    <p><?php the_content() ?></p>
    
    </div>
        
        


         <!-- Verkstadstaggar -->


         <p class="weOffer">Hos oss finns:</p>
            <div class="verkstadsTaggar mb2">
                <?php 
                    if( $taggar ): ?>
                        <ul>
                        <?php foreach( $taggar as $tag ): ?>
                            <li>
                                
                                <a href="<?php echo esc_url( get_term_link( $tag ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                                
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
            </div>
            <div class="dashedBottom mt1 mb1"></div>
        </div>

        <!-- /Verkstadstaggar -->
        
        </div>