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
        <div class="mb1 mt1">
        <?php dynamic_sidebar( 'footer-sidebar' ); ?>
        </div>

    </div>

</div>

<div class="justifyCenter mb2">
    <img src="<?php $imgId = 924; echo wp_get_attachment_image_url($imgId); ?>">
</div>
<div class="justifyCenter mb2">
<h5>Sidan skapad av <a href="https://pop-in.se" target="_blank">Pop-in.se</a></h5>
</div>



<?php 
wp_footer()
?>
</body>
</html>