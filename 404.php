<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

 get_header(); ?>


<div class="mrl4 hero mt2 h30vh">
    <div class="col1 alignBottom">
    <h1 class="heroTitle"><?php esc_html_e( 'Sidan hittade inte', 'kkv-riks' ); ?></h1>
        <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>

<div class="colFull column br4 mrl4 mt2">
    <p class="colorDarkGrey"><?php esc_html_e( 'Vi är ledsna, men sidan du letar efter kan inte hittas.', 'kkv-riks' ); ?></p>
    <div class="spacer1em"></div>
    <p>Testa att söka, eller <a class="link" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('gå tillbaka till startsidan', 'kkv-riks'); ?></a> </p>
    <div class="spacer1em"></div>
    <?php get_search_form(); ?>

	
</div>


<?php get_footer(); ?>