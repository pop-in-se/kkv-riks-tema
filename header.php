<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
    <header class="topHeader">
        <div class="cornerSquare"></div>
        <input type="checkbox" class="openSidebarMenu mobileInput" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
                <p class="menyText">Meny</p>
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
        <div class="header-logo">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
                <img class="mobileLogo" src="<?php $imgId = 8; echo wp_get_attachment_image_url($imgId); ?>">
            </a>
        </div>

        <?php if ( is_user_logged_in() ) { ?>
       
            <?php 
             get_template_part('/templates/menu-logged-in-template')
            ?> 

        <?php } else { ?>
    
            <?php 
            get_template_part('/templates/menu-template')
            ?> 
    
        <?php } ?>

            

    </header>