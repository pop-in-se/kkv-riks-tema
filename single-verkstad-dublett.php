<?php 
/*
Template name: Single verkstad dublett
Template Post Type: verkstad, post, page
*/
?>

<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-dot-circle icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>
   
<div class="colFull mrl4"> 
    <?php 
        get_template_part('/templates/dropdown-single-verkstad')
    ?>
</div>

<div class="colFull column p3 br4 beige mrl4">
    <?php 
        get_template_part('/templates/verkstad-template')
    ?>
</div>

<div class="colFull column p3 mt4 br4 beige mrl4">
    <?php 
        get_template_part('/templates/verkstad-template-dublett')
    ?>
</div>


<?php get_footer() ?>
