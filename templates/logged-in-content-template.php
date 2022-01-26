    
    <div class="col1 column pt2 pb2">
        
        <div class="column">
            <?php $user_info = get_userdata(1);
        $username = $user_info->user_login;
        $first_name = $user_info->first_name;
        ?>
        <h2 class="colorBeige">Välkommen <?php echo "$first_name"; ?></h2>
        <p class="colorBeige">Som inloggad har du tillgång till Köp / Sälj-sidan, <br>
        du kan posta i forumet och redigera verkstadsinformation. </p>
        <p> <?php the_content() ?> </p>
        
        <h3 class="mt2 colorBeige">Senaste inläggen:</h3>

        <?php if (current_user_can('manage_options')) : ?>
			
			<?php // Senaste foruminlägget
			
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			
			$args = array('post_type' => array('topic'), 'posts_per_page' => 2, 'paged' => $paged, 'order' => 'DESC'); 
			
			$temp = $wp_query;
			$wp_query = null;
			
			$wp_query = new WP_Query();
			$wp_query->query($args);
	
			if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			
			
			<div class="medlemMeta">
            <div class="colFull justifyRight beigeLink">   
            <p> <?php edit_post_link( __( ' ', 'textdomain' ), '<i>', '</i>', null, 'fas fa-edit colorBlack' ); ?></p>
            </div> 
            <h3 class="colorMaroon"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>    
            
            <p class="colorBeige"><?php bbp_topic_excerpt(); ?></br></p>
            <div class="spacer1em"></div>
            <P class="colorMaroon"><b>Forum: </b><?php echo get_the_title($post->post_parent); ?><br></p>
            <P class="colorBeige">
            <i class="far fa-clock" style="font-size: 0.85rem; margin-right: 0.75em;"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></br>
            <i class="fas fa-feather-alt" style="font-size: 0.85rem; margin-right: 0.25em;"></i> <?php the_author(); ?> <br> 
			</p></a></div>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
			<?php endif; ?>
			
		<?php endif; ?>


        <?php  
        $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1 ) );
        ?>

    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

        <div class="medlemMeta">
        <div class="colFull justifyRight beigeLink">   
            <p> <?php edit_post_link( __( ' ', 'textdomain' ), '<i>', '</i>', null, 'fas fa-edit' ); ?></p>
        </div> 
        <h3 class="colorRed"><a href="<?php the_permalink(); ?>"><?php the_title() ?></h3>
        <p class="colorBeige"><?php $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 12) ?></p>
            <div class="spacer1em"></div>
            <p class="colorMaroon"><b>Aktuellt</b></p>
            <p class="colorBeige"><i class="far fa-clock" style="font-size: 0.85rem; margin-right: 0.75em;"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></br>
            <p class="colorBeige"><i class="fas fa-feather-alt" style="font-size: 0.85rem; margin-right: 0.25em;"></i> <?php the_author() ?> </p>
        </div>

    <?php endwhile; ?>

        </div>

    </div>

    <div class="col2 pt2 pb2">

    <?php
        wp_nav_menu( array( 
            'menu' => 'medlemsmeny',
            'theme_location' => 'medlemsmeny', 
            'container_class' => 'menu-inloggad-container',
            'before' => '<p class="inloggad colorWhite plr1 mb1">',
            'after' => "</p>", )
        ); 
        ?>

<!--     <button class="knappSvart">
        <p><a class="colorWhite" href="https://kkv-riks.se/wp-admin">Kontrollpanelen</a></p>
    </button> -->

    </div>
    
