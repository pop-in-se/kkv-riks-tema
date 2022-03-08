<?php
// Load values and assign defaults.
$styrelsen = get_field('styrelsen');
$ordforande = $styrelsen['ordforande'];
$ordforandeEpost = $styrelsen['ordforande_e_post'];
$sekreterare = $styrelsen['sekreterare'];
$sekreterareEpost = $styrelsen['sekreterare_e_post'];
$kassor = $styrelsen['kassor'];
$kassorEpost = $styrelsen['kassor_e_post'];
$ledamot1 = $styrelsen['ledamot_1'];
$ledamot1Epost = $styrelsen['ledamot_1_e_post'];
$ledamot2 = $styrelsen['ledamot_2'];
$ledamot2Epost = $styrelsen['ledamot_2_e_post'];
$ledamot3 = $styrelsen['ledamot_3'];
$ledamot3Epost = $styrelsen['ledamot_3_e_post'];
$ledamot4 = $styrelsen['ledamot_4'];
$ledamot4Epost = $styrelsen['ledamot_4_e_post'];
$suppleant = $styrelsen['suppleant'];
$suppleantEpost = $styrelsen['suppleant_e_post'];
$valberedning = $styrelsen['valberedning'];
$valberedningEpost = $styrelsen['valberedning_e_post'];
?>

<div class="colFull pb2 mb2 row">

    <div class="col1">

        <?php if( $ordforande ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Ordförande:</P>
            </div>
            <div class="contactItems">
                <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $ordforande; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $ordforandeEpost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $ordforandeEpost; ?>" target="_blank"> <?php echo $ordforandeEpost; ?> </a>
            <?php endif; ?>
        </div>
        
        <?php if( $sekreterare ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Sekreterare:</P>
            </div>
            <div class="contactItems">
                <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $sekreterare; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $sekreterareEpost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $sekreterareEpost; ?>" target="_blank"> <?php echo $sekreterareEpost; ?> </a>
            <?php endif; ?>
        </div>


        <?php if( $kassor ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Kassör:</P>
            </div>
            <div class="contactItems">
                <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $kassor; ?></p>
            </div>
            <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $kassorEpost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $kassorEpost; ?>" target="_blank"> <?php echo $kassorEpost; ?> </a>
            <?php endif; ?>
        </div>

    </div>

    <div class="col2">

        <?php if( $ledamot1 ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Ledamot:</P>
            </div>
            <div class="contactItems">
            <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $ledamot1; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $ledamot1Epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $ledamot1Epost; ?>" target="_blank"> <?php echo $ledamot1Epost; ?> </a>
            <?php endif; ?>
        </div>

        <?php if( $ledamot2 ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Ledamot:</P>
            </div>
            <div class="contactItems">
            <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $ledamot2; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $ledamot2Epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $ledamot2Epost; ?>" target="_blank"> <?php echo $ledamot2Epost; ?> </a>
            <?php endif; ?>
        </div>

        <?php if( $ledamot3 ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Ledamot:</P>
            </div>
            <div class="contactItems">
            <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $ledamot3; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $ledamot3Epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $ledamot3Epost; ?>" target="_blank"> <?php echo $ledamot3Epost; ?> </a>
            <?php endif; ?>
        </div>    

        <?php if( $ledamot4 ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Ledamot:</P>
            </div>
            <div class="contactItems">
            <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $ledamot4; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $ledamot4Epost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $ledamot4Epost; ?>" target="_blank"> <?php echo $ledamot4Epost; ?> </a>
            <?php endif; ?>
        </div>
        
        <?php if( $suppleant ): ?>
                <div class="contactItems dashedBottom mt2">
                    <P>Suppleant:</P>
                </div>
                <div class="contactItems">
                <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $suppleant; ?></p>
                </div>
        <?php endif; ?>
        
        <?php if( $suppleantEpost ): ?>
            <div class="contactItems">
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $suppleantEpost; ?>" target="_blank"> <?php echo $suppleantEpost; ?> </a>
            </div>
        <?php endif; ?>
       
        <?php if( $valberedning ): ?>
            <div class="contactItems dashedBottom mt2">
                <P>Valberedning:</P>
            </div>
            <div class="contactItems">
            <i class="fas fa-user" style="font-size: 1rem; margin-right: 1em;"></i><p><?php echo $valberedning; ?></p>
            </div>
        <?php endif; ?>
        
        <div class="contactItems">
            <?php if( $valberedningEpost ): ?>
                <i class="fas fa-at" style="font-size: 1rem; margin-right: 1em;"></i><a href="mailto:<?php echo $valberedningEpost; ?>" target="_blank"> <?php echo $valberedningEpost; ?> </a>
            <?php endif; ?>
        </div>

    </div>

</div>