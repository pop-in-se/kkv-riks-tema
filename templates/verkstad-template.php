
<?php
// ACF fields.
$verkstadInfo = get_field('verkstads_info');
$namn = $verkstadInfo['verkstadens_namn'];
$adress = $verkstadInfo['adress'];
$postAdress = $verkstadInfo['postadress'];
$hemsida = $verkstadInfo['hemsida'];
$epost = $verkstadInfo['e-post'];
$telefon = $verkstadInfo['telefon'];
$kontaktpersonTelefon = $verkstadInfo['kontaktperson_telefon'];
$kontaktpersonEpost = $verkstadInfo['kontaktperson_epost'];
$kontaktperson = $verkstadInfo['kontaktperson'];
$beskrivning = $verkstadInfo['beskrivning'];
$bild = $verkstadInfo['bild'];
$taggar = $verkstadInfo['taggar'];
?>

<?php

if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'acf/load_value', 'eae_encode_emails' );
}
?>

<h1 class="rubrikBorderBottom"> 
<?php echo $namn; ?>
</h1>

<div class="colFull dashedBottom pb2 mb2 row">
    <div class="col1 mr1 mb1">
    <p><?php echo $adress; ?>
    <br><?php echo $postAdress; ?></p>
    <a class="link mt1 mb1" href="https://maps.google.com/maps?q= <?php echo $adress, ", ", $postAdress; ?>" target="_blank"><i class="fas fa-map-marker-alt" style="font-size: 1rem; margin-right: 0.75em;"></i>Visa på karta</a>
    </div>

        <div class="col2">

            <div class="contactItems">
            <?php if( $hemsida ): ?>
                <i class="fas fa-globe" style="font-size: 1rem; margin-right: 0.75em;"></i><a href="<?php echo $hemsida; ?>" target="_blank"> <?php echo $hemsida; ?> </a>
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
                    <p><?php echo $kontaktperson;?></p>  
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

        <div class="colFull dashedBottom pb2 mb2" >
    
        <div class="col1 mb2">
        <p><?php echo $beskrivning?></p>
        </div>
        <div class="col2">
            <?php if( $bild ): ?>
                <div class="singleVerkstadImg"> 
                        
                <img src="<?php echo $bild; ?>" />
                        
                </div>
            <?php endif; ?>
        </div>
        
        </div>


         <!-- Verkstadstaggar -->


         <p class="weOffer">Hos oss finns:</p>
            <div class="verkstadsTaggar">
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
            
        </div>

        <!-- /Verkstadstaggar -->
        
        </div>