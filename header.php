<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="headerRow">
        <div class="header-row" >
            <div class="brand-logo">
                <a href="#">Branding</a>
            </div>
            <button class="menu-toggle" id="menuToggle">
                <svg viewBox="0 0 12 10" class="hamburger" width="40px" height="40px">
                    <path d="M10,2 L2,2" class="bar-1"></path>
                    <path d="M5,5 L10,5" class="bar-2"></path>
                    <path d="M10,8 L2,8" class="bar-3"></path>
                </svg>
            </button>
        </div>
    </header>

    <section class="fullpage-menu">
        <div class="fullpage-menu-inner">
            <div class="menu-bg">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'main',
                    ));
                ?>
            </nav>
            <div class="header-nav-footer">
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li>&copy 2022, All Rights Reserved</li>
                </ul>
            </div>
        </div>
    </section>