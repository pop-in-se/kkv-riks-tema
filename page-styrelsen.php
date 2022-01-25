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



<div class="colFull column p3 mt4 br4 mrl4 colorWhite">

    <?php the_content() ?>

    <?php 
        get_template_part('/templates/styrelsen-template')
    ?>
</div>


<?php get_footer() ?>
