
    <?php
        $file = get_field('dokument');
        if( $file ):

                // Variabler.
                $url = $file['url'];
                $title = $file['title'];
                $caption = $file['caption'];
                $icon = $file['icon'];

                // Text och länk
                if( $caption ): ?>
            <div class="wp-caption">
                <?php endif; ?>
                <div class="dashedBottom"></div>
                <div class="spacer1em"></div>
                <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                    
                <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
                </a>

            </div>
    
    <?php endif; ?>

    <?php
        $file2 = get_field('dokument_2');
        if( $file2 ):

                // Variabler.
                $url = $file2['url'];
                $title = $file2['title'];
                $caption = $file2['caption'];
                $icon = $file2['icon'];

                // Text och länk
                if( $caption ): ?>
            <div class="wp-caption">
                <?php endif; ?>
                <div class="spacer1em"></div>
                <div class="dashedBottom"></div>
                <div class="spacer1em"></div>
                <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                    
                <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
                </a>

            
        </div>
        
    <?php endif; ?>

    <?php
        $file3 = get_field('dokument_3');
        if( $file3 ):

                // Variabler.
                $url = $file3['url'];
                $title = $file3['title'];
                $caption = $file3['caption'];
                $icon = $file3['icon'];

                // // Text och länk
                if( $caption ): ?>
            <div class="wp-caption">
                <?php endif; ?>
                <div class="spacer1em"></div>
                <div class="dashedBottom"></div>
                <div class="spacer1em"></div>
                <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                    
                <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
                </a>

            </div>
    
    <?php endif; ?>

    <?php
        $file4 = get_field('dokument_4');
        if( $file4 ):

                // Variabler.
                $url = $file4['url'];
                $title = $file4['title'];
                $caption = $file4['caption'];
                $icon = $file4['icon'];

                // // Text och länk
                if( $caption ): ?>
            <div class="wp-caption">
                <?php endif; ?>
                <div class="spacer1em"></div>
                <div class="dashedBottom"></div>
                <div class="spacer1em"></div>
                <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                    
                <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
                </a>
                    
            </div>
        
    <?php endif; ?>

