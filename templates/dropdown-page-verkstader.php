<?php  
    $args = array(
        'post_type' => 'verkstad', 
        'orderby' => 'title',
        'order'   => 'ASC',
        'show_option_none' => 'Välj stad',  
    );
        
    $post_query = new WP_Query($args); 
    ?>

<div class="verkstaderContainer">
    <div class="col1">
    <div class="cityDropdown">
            <form class="dropdown" action="<?php echo esc_url( the_guid() ); ?>" method="get" >
                <?php wp_dropdown_pages($args); ?>
                <input type="submit" name="submit" value="Visa" />
            </form>
        </div>
    </div>
    <div class="col2"> 

    </div>
</div>