<?php get_header() ?>

<div class="hero mrl4 h30vh">
    <div class="col1 alignBottom">
    <?php if ( is_user_logged_in() ) { ?>
       
        <h1 class="heroTitle"><i class="far fa-smile icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i><?php the_title() ?></h1>


    <?php } else { ?>
    
        <h1 class="heroTitle"><i class="far fa-smile icon" style="font-size: 2.4rem; color:#b70909; margin-right:16px;"></i>Medlemsskap</h1>

    
    <?php } ?>
    <div class="pageLineRed"></div>
    </div>
    <div class="col2 alignBottom">
        <div class="pageLineBeige"></div>  
    </div>
</div>


<div class="colFull mrl4">
    <div class="col1"></div>
        <div class="col2 alignRight">

        <?php if ( is_user_logged_in() ) { ?>
       
       <?php 
        get_template_part('/templates/logged-in-template')
        ?>

    <?php } else { ?>
    
        <?php 
        get_template_part('/templates/logged-out-template')
        ?>
    
    <?php } ?>

        </div>
    </div>
    
    
<div class="colFull br4 mrl4 mt2">

    
    <?php if ( is_user_logged_in() ) { ?>
        
        <?php 
        get_template_part('/templates/logged-in-content-template')
        ?>

    <?php } else { ?>
    
        <?php 
        get_template_part('/templates/logged-out-content-template')
        ?>
    
    <?php } ?>

    
    </div>


</div>

<?php get_footer() ?>