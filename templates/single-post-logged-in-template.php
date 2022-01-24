    <div class="colFull">
            
        <div class="col1 mt3">
            
            <a href="<?php
                $aktuellt_url = get_permalink('11');
                echo $aktuellt_url;
                ?>"> 
                <p class="knappSvart"><i class="fas fa-chevron-left" style="font-size: 1rem; margin-right: 1em;"></i>Till aktuellt</p></div>
            </a>
            
        </div>
      
        
        <div class="col2 relative"> 

        <div class="redigera mt1">
        <?php 
        get_template_part('/templates/edit-page-template')
        ?>
        </div>
        </div>

    </div>