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
$kontaktperson = $verkstadInfo['kontaktperson'];
$omVerkstaden = $verkstadInfo['text_om_verkstaden'];
$ortsNamn = $verkstadInfo['ortsnamn'];
?>


<h2 class="rubrikBorderBottom"> 
<a href="<?php the_permalink(); ?>"><?php echo esc_html( $ortsNamn->name ); ?></a>
</h2>

<div class="colFull">
    <p class="colorMaroon letter-spacing"><b><?php echo $namn ?></b></p>
</div>
<div class="colFull mb2 column">
    <div class="colFull mr1 mb05">
    <p><?php echo $adress; ?>
    <br><?php echo $postAdress; ?></p>
</div>
        <div class="colFull column hideMobile">
            <div class="dashedBottom mb1 mt1"></div>
            <div class="contactItems">
            <?php if( $hemsida ): ?>
                <i class="fas fa-globe" style="font-size: 0.95rem; margin-right: 0.5em;"></i><a href="http://<?php echo $hemsida; ?>" target="_blank"> <?php echo $hemsida; ?> </a>
                <?php endif; ?>
            </div>
            <div class="contactItems">
            <?php if( $epost ): ?>
                <i class="fas fa-at" style="font-size: 0.95rem; margin-right: 0.5em;"></i><a href="mailto:<?php echo $epost; ?>" target="_blank"> <?php echo $epost; ?> </a>
                <?php endif; ?>
            </div>
            <div class="contactItems">
                <?php if( $telefon ): ?>
                <i class="fas fa-phone-alt" style="font-size: 0.95rem; margin-right: 0.5em;"></i><a href="tel: <?php echo $telefon; ?>"><?php echo $telefon; ?></a>
                <?php endif; ?>
            </div>

        </div>

</div>

        
    
        <div class="verkstadsTaggar justifyRight">
        <a class="link colorRed" href="<?php the_permalink(); ?>"> Mer info <i class="fas fa-chevron-right" style="font-size: 1rem; margin-right: 0.5em; margin-left: 0.5em;"></i> </a>
        </div>
    