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

<div class="colFull mrl4">
    <div class="col1"></div>              
      <div class="col2edit relative alignRight mt2"> 
          <div class="redigera mt1">
          <?php if ( is_user_logged_in() ) { ?>
              <?php 
              get_template_part('/templates/edit-page-template')
              ?>
            <?php } else { ?>
                <!--  Ingenting -->
          <?php } ?>
        </div>
    </div>
</div>

<div class="colFull column br4 mrl4 mt2">
  
  <div class="aboutContainer">

    <div class="aboutText">
      <?php the_content() ?>
      <div class="spacer1em"></div>
      <div class="spacer1em"></div>
      <div class="dashedBottom"></div>

      <?php 
                get_template_part('/templates/link-template')
            ?>  

    </div>

  </div>
</div>


<?php get_footer() ?>
