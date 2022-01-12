<?php
 
/*
*
* The template for displaying all bbPress pages
*
* This is the template that displays all bbPress pages by default.
* Please note that this is the template of all bbPress pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package WordPress
* @subpackage Theme
*/

 
get_header(); ?>

 <div class="mrl4 hero mt2 h30vh">
    <div class="col1 alignBottom">
        <h1 class="heroTitle"><i class="far fa-comment-alt" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php bbp_forum_title(); ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

 
<div id="primary" class="colFull column br4 beige mrl4 mt2">
 
    <div id="content" class="beige br4 plr2 pt2">
    
    
    <?php while ( have_posts() ) : the_post(); ?>
    
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
            <div class="main">
                <?php the_content(); ?>
            </div>
        
        </article>
    

    <?php endwhile; ?>
    
    </div>
 
</div>
 
<?php get_footer(); ?>