<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/hero-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/aboutProject-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/howItWorks-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/sta-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/names-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/support-section.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <div class="logo">
                        <img src="images/trident.svg" alt="Трезубець" class="logo-icon">
                        <span class="logo-text">НЕЗАБУТІ</span>
                    </div>
                    <nav class="nav">
                        <a href="#" class="nav-link">Про проєкт</a>
                        <a href="#" class="nav-link">Як це працює</a>
                        <a href="#" class="nav-link">Додати ім'я</a>
                        <a href="#" class="nav-link">Історії життя</a>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="header-actions">
                        <button class="search-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <div class="language-selector">
                            <span>UA</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M4 6L8 10L12 6" stroke="#6B6B6B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <button class="donate-btn btn-hover-effect">Пожертвувати</button>
                    </div>
                    <!-- Burger Menu Button -->
                    <button class="burger-menu" id="burger-menu" aria-label="Открыть меню">
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                        <span class="burger-line"></span>
                    </button>
                </div>
                <!-- Mobile Menu Overlay -->
                <div class="mobile-menu-overlay" id="mobile-menu-overlay">
                    <div class="mobile-menu">
                        <div class="mobile-menu-header">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/trident.svg" alt="Трезубець" class="logo-icon">
                                <span class="logo-text">НЕЗАБУТІ</span>
                            </div>
                            <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Закрыть меню">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 6L6 18M6 6L18 18" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                        <nav class="mobile-nav">
                            <a href="#" class="mobile-nav-link">Про проєкт</a>
                            <a href="#" class="mobile-nav-link">Як це працює</a>
                            <a href="#" class="mobile-nav-link">Додати ім'я</a>
                            <a href="#" class="mobile-nav-link">Історії життя</a>
                        </nav>
                        <div class="mobile-menu-footer">
                            <div class="mobile-actions">
                                <button class="search-btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <span>Пошук</span>
                                </button>
                                <div class="language-selector">
                                    <span>UA</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M4 6L8 10L12 6" stroke="#6B6B6B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                            <button class="donate-btn mobile-donate-btn">Пожертвувати</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> 