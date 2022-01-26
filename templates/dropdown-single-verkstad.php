<?php

    $args = array(
            'post_type' => 'verkstad', 
            'orderby' => 'title',
            'order'   => 'ASC',
            'show_option_none' => 'Byt ort',  
        );
        
    $post_query = new WP_Query($args); 
?>

    <div class="colFull row mt3">
            <div class="col1">
                <a href="<?php
                        $verkstader_url = get_permalink('13');
                        echo $verkstader_url;
                        ?>"> 
                <p class="knappSvart"><i class="fas fa-chevron-left" style="font-size: 1rem; margin-right: 1em;"></i>Alla verkstäder</p>
            </a>
            </div>
            
            <div class="dropdown cityDropdown">
                <button class="dropbtn">Byt ort <i class="fas fa-sort-down" style="font-size: 1.2rem; margin-left: 3.6em;"></i> </button>
        
                <div class="dropdown-content">

                    <?php $terms = get_terms('ort');  
                    foreach ($terms as $term) {
                
                    echo '<a href="'.get_term_link($term->slug, 'ort').'">'.$term->name.'</a>';

                    } ?>

                </div>
            </div>
        
        </div>
        
        <div class="col2edit relative alignRight mb2"> 

       
        </div>

    </div>