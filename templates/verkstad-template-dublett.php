
<?php
// ACF fields.
$verkstadInfoDublett = get_field('verkstads_info_dublett');
$namnDublett = $verkstadInfoDublett['verkstadens_namn_dublett'];
$adressDublett = $verkstadInfoDublett['adress_dublett'];
$hemsidaDublett = $verkstadInfoDublett['hemsida_dublett'];
$epostDublett = $verkstadInfoDublett['e-post_dublett'];
$telefonDublett = $verkstadInfoDublett['telefon_dublett'];
$kontaktpersonDublett = $verkstadInfoDublett['kontaktperson_dublett'];
$omVerkstadenDublett = $verkstadInfoDublett['text_om_verkstaden_dublett'];
$beskrivningDublett = $verkstadInfoDublett['beskrivning_dublett'];
$bildDublett = $verkstadInfoDublett['bild_dublett'];
$taggarDublett = $verkstadInfoDublett['taggar_dublett'];
?>

<?php

if ( function_exists( 'eae_encode_emails' ) )  {
    add_filter( 'acf/load_value', 'eae_encode_emails' );
}
?>




      <!-- Dublett  -->


<h1 class="rubrikBorderBottom"> 
<a href="<?php echo esc_url( the_guid() ); ?>"><?php echo $namnDublett; ?></a>
</h1>

<div class="colFull dashedBottom pb2 mb2 row">
    <div class="col1 mr1 mb1">
        <p><?php echo $adressDublett; ?></p>
    </div>

        <div class="col2">

            <div class="contactItems">
            <?php if( $hemsidaDublett ): ?>
                <i class="fas fa-globe" style="font-size: 1rem; margin-right: 1em;"></i><a href="<?php echo $hemsidaDublett; ?>" target="_blank"> <?php echo $hemsidaDublett; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
            <?php if( $epostDublett ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $epostDublett; ?>" target="_blank"> <?php echo $epostDublett; ?> </a>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
                <?php if( $telefonDublett ): ?>
                <i class="fas fa-phone-alt" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $telefonDublett; ?></p>
                <?php endif; ?>
            </div>
            
            <div class="contactItems">
                <?php if( $kontaktpersonDublett ): ?>
                    <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i>
                    <p><?php echo $kontaktpersonDublett;?></p>
                <?php endif; ?>
            </div>
            
        </div>
</div>

        <div class="colFull dashedBottom pb2 mb2" >
    
        <div class="col1 mb2">
        <p><?php echo $beskrivningDublett?></p>
        </div>
        <div class="col2">
            <?php if( $bildDublett ): ?>
                <div class="singleVerkstadImg"> 
                        
                <img src="<?php echo $bildDublett; ?>" />
                        
                </div>
            <?php endif; ?>
        </div>
        
        </div>


         <!-- Verkstadstaggar -->


         <p class="weOffer">Hos oss finns:</p>
            <div class="verkstadsTaggar">
                <?php 
                


if( $taggarDublett ): ?>
    <ul>
    <?php foreach( $taggarDublett as $tagDublett ): ?>
        <li>
            
            <a href="<?php echo esc_url( get_term_link( $tagDublett ) ); ?>"><?php echo esc_html( $tagDublett->name ); ?></a>
            
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
            </div>
        </div>

        <!-- /Verkstadstaggar -->
        
        </div>