<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <!-- Øverste række: Sprog og kontaktinformation -->
    <div class="top-bar">
        <div class="container">
            <!-- Sprogvalg til venstre -->
            <div class="language-switcher">
                <ul>
                    <?php
                    // Hent alle sprog
                    $languages = pll_the_languages(array('raw' => 1));
                    foreach ($languages as $lang) {
                        // Vis kun forkortelsen for sproget
                        echo '<li><a href="' . esc_url($lang['url']) . '">' . esc_html($lang['slug']) . '</a></li>';
                    }
                    ?>
                </ul> <!-- Polylang-sprogmenu -->
            </div>
            <!-- Kontaktinformation til højre -->
            <div class="contact-info">
                <p><?php pll_e("Åbningstider: Mandag - Fredag kl. 06.30 - 17.00"); ?></p>
            </div>
        </div>
    </div>

    <!-- Nederste række: Logo og menu -->
    <div class="bottom-bar">
        <div class="container">
            <!-- Logo til venstre -->
            <div class="site-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/JP2.png" alt="logo">
            </div>
            <!-- Menu til højre -->
            <nav class="main-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
    </div>
</header>

