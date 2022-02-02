<?php 
/**
 * Template Name: Search Page
 */
?> 

<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><i class="fas fa-search icon" style="font-size: 2.4rem; color:#E7DCD1; margin-right:16px;"></i><?php the_title() ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>
<p class="colorWhite ml1 mt1 mrl4">
<?php echo $wp_query->found_posts; ?> <?php _e( 'sökresultat hittades för', 'locale' ); ?>: "<?php the_search_query(); ?>"
</p>


<div class="main column mt2">
  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="aktuelltKort">

  <h2 class="rubrikBorderBottom"> 
        <a href="<?php the_permalink() ?>" ><?php the_title() ?></a>
    </h2>

  <p><?php $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 10) ?></p>
        <p class="dashedBottom pb1 pt1">
          <a class="link" href="<?php the_permalink() ?>"> Läs mer <i class="fas fa-chevron-right" style="font-size: 1rem; margin-right: 0.5em; margin-left: 0.5em;"></i> </a>
        </p>
      </div>       

        <?php endwhile; ?>

        <?php else : ?>
        <div class="colFull justifyCenter colorWhite">
            <p class="colorWhite"><?php esc_html_e( 'Tyvärr, inga inlägg hittades.' ); ?></p>
        </div>
        <?php endif; ?>

  </div>
  
</div>


<?php get_footer() ?>

