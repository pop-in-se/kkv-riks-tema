<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-lightbulb icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="colFull column br4 mrl4 mt2 colorDarkGrey">
  
  <div class="colFull pt2 pb2 plr2">

    <div class="column">
      <p><?php the_content() ?></p>
    </div>

  </div>
</div>


<?php get_footer() ?>
