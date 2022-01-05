<div class="hero mrl4 ">
    <div class="col1 mt4">
        <div class="pageLineRed"></div>
        <?php
        wp_nav_menu( array( 
            'menu' => 'sidfotsmeny',
            'theme_location' => 'sidfotsmeny', 
            'container_class' => 'menu-sidfotsmeny-container',
            'before' => '',
            'after' => "", )
        ); 
        ?>
    </div>
    <div class="col2 mt4">
        <div class="pageLineBeige"></div>  
        <p class="mb1 mt1 colorWhite">Konstnärernas <br> Kollektivverkstäder <br> Riksorganisation</p>

    </div>

</div>

<div class="justifyCenter mb2">
    <img src="<?php $imgId = 8; echo wp_get_attachment_image_url($imgId); ?>">
</div>



<?php 
wp_footer()
?>
</body>
</html>