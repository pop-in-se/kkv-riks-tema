    
    <div class="col1 column pt2 pb2">
        
        <div class="column">
            <?php $user_info = get_userdata(1);
        $username = $user_info->user_login;
        $first_name = $user_info->first_name;
        ?>
        <h2 class="colorDarkGrey">Välkommen <?php echo "$first_name"; ?></h2>
        <p class="colorDarkGrey">Som inloggad har du tillgång till Köp / Sälj-sidan, du kan posta i forumet och redigera verkstadsinformation och kurser. </p>
        <p> <?php the_content() ?> </p>
        
        <h3 class="mt2 colorDarkGrey">Senaste inläggen:</h3>

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
            <div class="colFull justifyRight link">   
            <p> <?php edit_post_link( __( ' ', 'textdomain' ), '<i>', '</i>', null, 'fas fa-edit colorBlack' ); ?></p>
            </div> 
            <h3 class="colorMaroon"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>    
            
            <p class="colorDarkGrey"><?php bbp_topic_excerpt(); ?></br></p>
            <div class="spacer1em"></div>
            <P class="colorRed"><b>Forum: </b><?php echo get_the_title($post->post_parent); ?><br></p>
            <P class="colorDarkGrey">
            <i class="far fa-clock" style="font-size: 0.85rem; margin-right: 0.75em;"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></br>
            <i class="fas fa-feather-alt" style="font-size: 0.85rem; margin-right: 0.25em;"></i> <?php the_author(); ?> <br> 
			</p></a></div>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
			<?php endif; ?>
			
		<?php endif; ?>

        <?php  
        $kurs_posts = new WP_Query( array( 'post_type' => 'kurs', 'post_status' => 'publish', 'posts_per_page' => 1 ) );
        ?>

    <?php while ( $kurs_posts->have_posts() ) : $kurs_posts->the_post(); ?>

        <div class="medlemMeta">
        <div class="colFull justifyRight link">   
            <p> <?php edit_post_link( __( ' ', 'textdomain' ), '<i>', '</i>', null, 'fas fa-edit' ); ?></p>
        </div> 
        <h3 class="colorRed"><a href="<?php the_permalink(); ?>"><?php the_title() ?></h3>
        <p class="colorDarkGrey"><?php $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 12) ?></p>
            <div class="spacer1em"></div>
            <p class="colorRed"><b>Kurser</b></p>
            <p class="colorDarkGrey"><i class="far fa-clock" style="font-size: 0.85rem; margin-right: 0.75em;"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></br>
            <p class="colorDarkGrey"><i class="fas fa-feather-alt" style="font-size: 0.85rem; margin-right: 0.25em;"></i> <?php the_author() ?> </p>
        </div>

    <?php endwhile; ?>


        <?php  
        $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1 ) );
        ?>

    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>

        <div class="medlemMeta">
        <div class="colFull justifyRight link">   
            <p> <?php edit_post_link( __( ' ', 'textdomain' ), '<i>', '</i>', null, 'fas fa-edit link' ); ?></p>
        </div> 
        <h3 class="colorRed"><a href="<?php the_permalink(); ?>"><?php the_title() ?></h3>
        <p class="colorDarkGrey"><?php $excerpt = get_the_excerpt();
            echo wp_trim_words($excerpt, 12) ?></p>
            <div class="spacer1em"></div>
            <p class="colorRed"><b>Aktuellt</b></p>
            <p class="colorDarkGrey"><i class="far fa-clock" style="font-size: 0.85rem; margin-right: 0.75em;"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></br>
            <p class="colorDarkGrey"><i class="fas fa-feather-alt" style="font-size: 0.85rem; margin-right: 0.25em;"></i> <?php the_author() ?> </p>
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
            'before' => '<p class="inloggad colorDarkGrey plr1 mb1">',
            'after' => "</p>", )
        ); 
        ?>

        <div class="knapp mrl1 ml05 plr1">
                <a href="https://kkv-riks.se/wp-admin"><i class="fas fa-wrench"></i> Gå till adminpanelen</a></p>
        </div>
    </div>
    
