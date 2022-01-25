<?php get_header() ?>

<div class="mrl4 h30vh hero">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-eye icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i>Aktuellt</h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="mrl4 colFull">
    <?php 
        get_template_part('/templates/single-post-logged-in-template')
    ?>
</div>


<div class="colFull column br4 mrl4 mt1">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="pt2 pb2 colorWhite">

        <div class="column">
            <?php if ( has_post_thumbnail() ) { ?>
                <img class="image mb1" src="<?php the_post_thumbnail_url() ?>" ></img>  
        
            <?php }else{   ?>
                <!-- Ingenting -->
            <?php } ?>
        
            <h1 class="rubrikBorderBottom"> 
                <?php the_title() ?>
            </h1>
            <div class="justifyRight">
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
            </div>
            <div class="spacer"></div>
            <p><?php the_content() ?></p>
            <div class="spacer"></div>
            
            
            <p>Postad av: <?php the_author() ?> </p>
            <div class="spacer"></div>
            
            <div class="colFull column">
            <?php 
                get_template_part('/templates/file-template')
            ?>
            </div>
            
        </div>
        
    </div>
    
    <?php endwhile; // end of the loop. ?>
</div>

<p class="justifyCenter mb1 mt2 colorWhite">Fler inlägg:</p>
<div class="mrl4 br4 postLink row">
<p class="postLink"><?php previous_post_link(); ?></p>
<p class="postLink"><?php next_post_link(); ?></p>
</div>


<?php get_footer() ?>
