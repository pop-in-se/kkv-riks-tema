<?php get_header() ?>


<?php 
        $produkt = get_field('produkt');
        $produktbeskrivning = get_field('produktbeskrivning');
        $pris = get_field('pris');
    ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="fas fa-store icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="colFull column br4 mrl4 mt2 colorDarkGrey">
  
  <div class="colFull pt2 pb2 plr2">

    <div class="col1">
    <?php if ( has_post_thumbnail() ) { ?>
                <img class="image mlr4 mb1" src="<?php the_post_thumbnail_url() ?>" ></img>  
        
            <?php }else{   ?>
                <!-- Ingenting -->
            <?php } ?>
    
</div>

    <div class="col2 mrl2">
    <?php the_content( ) ?>
    <h1 class="rubrikBorderBottom"> 
    <?php echo $produkt; ?>
    </h1>
      <p><?php echo $produktbeskrivning;?></p>
      <h2 class="mt1"><?php echo $pris;?></h2>
      <h5><i class="fas fa-shipping-fast" style="font-size: 1rem; margin-right:16px;"></i>Fri frakt</h5>
      <a class="knapp mb1" href="https://buy.stripe.com/test_5kA4jw9gF2FR2SA7st" target="_blank">Köp boken</a>
      <i class="fab fa-stripe" style="font-size: 2.4rem;"></i><h5>Betala med kort via Stripe. Öppnas i nytt fönster.</h5>
    </div>

  </div>
</div>


<?php get_footer() ?>
