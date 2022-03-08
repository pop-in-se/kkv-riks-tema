
<?php get_header() ?>

    <?php 
        $datum = get_field('datum');
        $tid = get_field('tid');
        $tidEnd = get_field('tid_end');
        $plats = get_field('plats');
        $date = new DateTime(get_field('datum'));
        $day = $date->format('d');
        $month = $date->format('M');
        $pris = get_field('pris');
        $kursledare = get_field('kursledare');
        $deltagare = get_field('deltagare');
        $anmalningsdag = get_field('anmalningsdag');
    ?>


<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
        <h1 class="heroTitle"><i class="far fa-calendar-alt icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i>Kurs</h1>
        <div class="pageLineRed"></div>
    </div>

    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="colFull column mt2 mrl4 mb1">
        
        <?php 
            get_template_part('/templates/kurs-template');
        ?>
    
    </div>



<p class="justifyCenter mb1 mt2 colorDarkGrey">Fler kurser:</p>
<div class="mrl4 br4 postLink row">
    <p class="postLink"><?php previous_post_link(); ?></p>
    <p class="postLink"><?php next_post_link(); ?></p>
</div>


<?php get_footer() ?>
