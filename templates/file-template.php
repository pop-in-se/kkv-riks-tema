<?php
    $file = get_field('dokument');
    if( $file ):

            // Extract variables.
            $url = $file['url'];
            $title = $file['title'];
            $caption = $file['caption'];
            $icon = $file['icon'];

            // Begin caption wrap.
            if( $caption ): ?>
                <div class="wp-caption">
            <?php endif; ?>
            <div class="dashedBottom"></div>
            <div class="spacer1em"></div>
            <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                
            <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
            </a>

            <?php 
            // End caption wrap.
            if( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                </div>
    <?php endif; ?>
<?php endif; ?>

<?php
    $file2 = get_field('dokument_2');
    if( $file2 ):

            // Extract variables.
            $url = $file2['url'];
            $title = $file2['title'];
            $caption = $file2['caption'];
            $icon = $file2['icon'];

            // Begin caption wrap.
            if( $caption ): ?>
                <div class="wp-caption">
            <?php endif; ?>
            <div class="spacer1em"></div>
            <div class="dashedBottom"></div>
            <div class="spacer1em"></div>
            <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                
            <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
            </a>

            <?php 
            // End caption wrap.
            if( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                </div>
    <?php endif; ?>
<?php endif; ?>

<?php
    $file3 = get_field('dokument_3');
    if( $file3 ):

            // Extract variables.
            $url = $file3['url'];
            $title = $file3['title'];
            $caption = $file3['caption'];
            $icon = $file3['icon'];

            // Begin caption wrap.
            if( $caption ): ?>
                <div class="wp-caption">
            <?php endif; ?>
            <div class="spacer1em"></div>
            <div class="dashedBottom"></div>
            <div class="spacer1em"></div>
            <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                
            <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
            </a>

            <?php 
            // End caption wrap.
            if( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                </div>
    <?php endif; ?>
<?php endif; ?>

<?php
    $file4 = get_field('dokument_4');
    if( $file4 ):

            // Extract variables.
            $url = $file4['url'];
            $title = $file4['title'];
            $caption = $file4['caption'];
            $icon = $file4['icon'];

            // Begin caption wrap.
            if( $caption ): ?>
                <div class="wp-caption">
            <?php endif; ?>
            <div class="spacer1em"></div>
            <div class="dashedBottom"></div>
            <div class="spacer1em"></div>
            <a class="link" href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
                
            <i class="far fa-file-alt" style="font-size: 1.6rem; color:#990F0F; margin-right:8px;"></i><span><?php echo esc_html($title); ?></span>
            </a>

            <?php 
            // End caption wrap.
            if( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
                </div>
    <?php endif; ?>
<?php endif; ?>