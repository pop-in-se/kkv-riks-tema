<?php get_header() ?>

<div class="heroTitleContainer">
    <div class="heroTitleContainerCol1">
        <h1 class="heroTitle"><i class="far fa-smile icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
    <div class="pageLineRed"></div>
    </div>
    <div class="heroTitleContainerCol2">
    <div class="pageLineBeige"></div>  
    </div>

</div>

<div class="main">
<?php the_content() ?>
</div>

<?php wp_footer()?>

<?php get_footer() ?>
