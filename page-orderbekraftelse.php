<?php get_header() ?>


<?php 
        $produkt = get_field('produkt');
        $produktbeskrivning = get_field('produktbeskrivning');
        $pris = get_field('pris');
        $orderbekraftelse = get_field('orderbekraftelse');
        $frakt = get_field('frakt');
    ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="colFull column br4 mrl4 mt2 colorWhite">
  
  <div class="colFull pt2 pb2 plr2 column alignCenter">

    <i class="fas fa-award" style="font-size: 8rem;"></i>
    <h1 class="rubrikBorderBottom"> 
    <?php echo $orderbekraftelse; ?>
    </h1>
    <p class="mt1 mb1 plr2"><i class="fas fa-shipping-fast" style="font-size: 1rem;"></i><?php echo $frakt;?></p>
    <p class="mt1 mb1 plr2"><?php the_content( ) ?></p>
      
  

  </div>
</div>


<?php get_footer() ?>
