<?php

$args = array(
        'post_type' => 'verkstad', 
        'orderby' => 'title',
        'order'   => 'ASC',
        'show_option_none' => 'Byt stad',  
    );
        
    $post_query = new WP_Query($args); 
    ?>

    <div class="colFull row mt3">
        <div class="col1">
        <a href="<?php
                $verkstader_url = get_permalink('13');
                echo $verkstader_url;
                ?>"> 
        <p class="moreCities"><i class="fas fa-chevron-left" style="font-size: 1rem; margin-right: 1em;"></i>Alla verkstäder</p></div>
    </a>
    <div class="cityDropdown">
                <form class="dropdown" action="<?php echo esc_url( the_guid() ); ?>" method="get" >
                    <?php wp_dropdown_pages($args); ?>
                    <input type="submit" name="submit" value="Visa" />
                </form>
            </div>
        <div class="col2"> 

        </div>
    </div>