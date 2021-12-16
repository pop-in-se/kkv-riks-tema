<?php get_header() ?>

<div class="heroTitleContainer">
    <div class="heroTitleContainerCol1">
    <h1 class="heroTitle"><i class="fas fa-paint-brush icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
    <div class="pageLineRed"></div>
    </div>
    <div class="heroTitleContainerCol2">
    <div class="pageLineBeige"></div>  
    </div>

</div>


   
<div class="verkstaderMain"> 
    <?php 
        get_template_part('/templates/dropdown-single-verkstad')
    ?>
</div>
<div class="singleVerkstadMain">
    <?php 
        get_template_part('/templates/verkstad-template')
    ?>
</div>


<?php wp_footer()?>

<?php get_footer() ?>
