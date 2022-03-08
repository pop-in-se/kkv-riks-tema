<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-envelope icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="main">
    <div class="col1 mt2">
        <?php the_content() ?>
    </div>
    <div class="col2">

    </div>

</div>


<?php get_footer() ?>
