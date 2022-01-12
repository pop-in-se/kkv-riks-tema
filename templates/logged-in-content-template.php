

<div class="col1 column  pt2 pb2 plr2">
        
        <div class="column">
        <?php $user_info = get_userdata(1);
      $username = $user_info->user_login;
      $first_name = $user_info->first_name;
      ?>
            <h2>Välkommen <?php echo "$first_name"; ?></h2>
        <p>Som medlem i KKV har du tillgång till </p>
        

        <h3 class="mt1">Senaste inläggen i forumet:</h3>

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
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>    
            <p><b>Forum: </b> <?php echo get_the_title($post->post_parent); ?><br><b>Postad av: </b> <?php the_author_posts_link(); ?> <br> 
			<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j F, Y'); ?></time></p></div>	
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php wp_reset_query(); ?>
			<?php endif; ?>
			
		<?php endif; ?>

        </div>

    </div>

    <div class="col2 pt2 pb2 ml1">
    <?php
        wp_nav_menu( array( 
            'menu' => 'inloggad',
            'theme_location' => 'inloggad', 
            'container_class' => 'menu-inloggad-container',
            'before' => '<p class="inloggad colorWhite plr1 mb1 ml1">',
            'after' => "</p>", )
        ); 
        ?>
    </div>
    
