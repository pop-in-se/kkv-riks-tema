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



<div class="colFull column p3 mt4 br4 mrl4 colorDarkGrey">

    <?php the_content() ?>

    <?php 
        get_template_part('/templates/styrelsen-template')
    ?>
</div>

<div class="colFull column p3 br4 mrl4 colorDarkGrey">

<div class="dashedBottom mt2"></div>
<div class="spacer1em"></div>
    <div class="column">
        <?php 
            get_template_part('/templates/file-template')
        ?>
    </div>
   
    <div class="spacer1em mt4"></div>
          <h4>Relaterade sidor:</h4>
          <div class="spacer1em"></div>
          <div class="dashedBottom"></div>
    
        <div class="row">
            <?php 
                    get_template_part('/templates/link-template')
            ?>  

    </div>

</div>


<?php get_footer() ?>
