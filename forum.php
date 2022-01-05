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
 
 
/*
Self explanatory its a functions that gets your header template.
*/
 
get_header(); ?>

 <div class="mrl4 hero mt2 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="far fa-comment-alt" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i>Forum</h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<?php
/*
Surrounding Classes for the site
 
These are different every theme and help with structure and layout
 
These could be SPANs or DIVs and with entirely different classes.
*/
?>
 
<div id="primary" class="colFull column br4 beige mrl4 mt2">
 
<div id="content" class="beige br4 plr2 pt2">
 
 
<?php
/*
Start the Loop
*/
?>
 
<?php while ( have_posts() ) : the_post(); ?>
 
 
<?php
/*
This is the start of the page and also the insertion of the post classes.
 
Post classes are very handy to style your forums.
*/
?>
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
 
<?php
/*
This is the title wrapped in a header tag
 
and a class to better style the title for your theme
*/
?>
 
<header class="entry-header">
 
<h1 class="entry-title"><?php the_title(); ?></h1>
 
</header>
 
 
<?php
/*
This is the content wrapped in a div
 
and class to better style the content
*/
?>
 
<div class="main mt4">
<?php the_content(); ?>
</div>
 
<!-- .entry-content -->
 
 
<?php
/*
End of Page
*/
?>
 
</article>
 
<!-- #post -->
<?php endwhile; // end of the loop. ?>
 
</div>
 
<!-- #content -->
 
</div>
 
<!-- #primary -->
 
 
<?php
/*
This is code to display the sidebar and the footer.
 
Remove the sidebar code to get full-width forums.
 
This would also need CSS to make it actually full width.
*/
?>
 

<?php get_footer(); ?>