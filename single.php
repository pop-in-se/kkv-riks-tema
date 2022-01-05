<?php get_header() ?>

<div class="hero heroHeight">
    <div class="col1"></div>
    <div class="col2"></div>
</div>


<div class="colFull column br4 beige mrl4 mt2">
<?php
    if ( have_posts() ) while ( have_posts() ) : the_post();
            ?>
    <div class="colFull pt2 pb2 plr2">

        <div class="column">
        <h1 class="rubrikBorderBottom"> 
        <?php the_title() ?>
        </h1>
            <p><?php the_content() ?></p>
            <div class="spacer1em"></div>
            <p>Skrivet av: <?php the_author() ?> </p>
        </div>

    </div>

    <?php endwhile; // end of the loop. ?>
</div>

<p class="justifyCenter mb1 mt2 colorWhite">Fler inlägg:</p>
<div class="mrl4 beige br4 postLink row">
    <p><?php previous_post_link(); ?></p>
    <p><?php next_post_link(); ?></p>
</div>


<?php get_footer() ?>
