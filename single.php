<?php get_header() ?>

<div class="mrl4 h30vh hero">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-eye icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i>Aktuellt</h1>
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
    <div class="pt1 pb2 colorDarkGrey">

        <div class="column">
            <?php if ( has_post_thumbnail() ) { ?>
                <img class="image mb1" src="<?php the_post_thumbnail_url() ?>" ></img>  
        
            <?php }else{   ?>
                <!-- Ingenting -->
            <?php } ?>
        
            <h2 class="rubrikBorderBottom"> 
                <?php the_title() ?>
            </h2>
            <div>
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><h5>Publicerad: </h5> <?php echo get_the_date(); ?></time>
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
            <div class="dashedBottom mt2 mb1"></div>
        </div>
        
    </div>
    
    <?php endwhile; // end of the loop. ?>
</div>

<p class="justifyCenter mb1 mt2 colorDarkGrey">Fler inlägg:</p>
<div class="mrl4 br4 postLink row">
<p class="postLink"><?php previous_post_link(); ?></p>
<p class="postLink"><?php next_post_link(); ?></p>
</div>


<?php get_footer() ?>
