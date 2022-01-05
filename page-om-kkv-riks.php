<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-lightbulb icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="colFull column br4 beige mrl4 mt2">
  
  <div class="aboutContainer">

    <div class="aboutText">
      <?php the_content() ?>
      
      <?php 
$link = get_field('link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
<?php 
$link2 = get_field('link_2');
if( $link2 ): 
    $link2_url = $link2['url'];
    $link2_title = $link2['title'];
    $link2_target = $link2['target'] ? $link2['target'] : '_self';
    ?>
    <a class="knapp" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
<?php endif; ?>

    </div>

  </div>
</div>


<?php get_footer() ?>
