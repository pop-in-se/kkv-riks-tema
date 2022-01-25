    <div class="colFull">
            
        <div class="col1 mt3">
            
            <a href="<?php
                $aktuellt_url = get_permalink('11');
                echo $aktuellt_url;
                ?>"> 
                <p class="knappSvart"><i class="fas fa-chevron-left" style="font-size: 1rem; margin-right: 1em;"></i>Till aktuellt</p></div>
            </a>
            
        </div>
      
        
        <div class="col2edit relative alignRight mb1"> 

            <div class="redigera mt1">
            <?php if ( is_user_logged_in() ) { ?>
                
                <?php 
                get_template_part('/templates/edit-page-template')
                ?>

            <?php } else { ?>
            
                <!--  Ingenting -->
                
            <?php } ?>
            </div>

        </div>

    </div>