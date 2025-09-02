<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/support-page.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/hero-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/aboutProject-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/howItWorks-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/sta-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/names-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/support-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/header.css">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/about-content-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/about-content-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/goals-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/advisers-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/about-supporters-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/about-media-section.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/components/about-faq-section.css">

    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="header-left">
                    <a href="/" class="logo">
                        <svg width="18" height="30"><use xlink:href="#trident"></use></svg>
                        <span class="logo-text">НЕЗАБУТІ</span>
                    </a>
                    <nav class="nav">
                        <a href="#" class="nav-link">Про проєкт</a>
                        <a href="#" class="nav-link">Як це працює</a>
                        <a href="#" class="nav-link">Додати ім'я</a>
                        <a href="#" class="nav-link">Історії життя</a>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="header-actions">
                        <div class="search-container" id="search-container">
                            <button class="search-toggle-btn" id="search-toggle-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <div class="search-input-container" id="search-input-container">
                                <input type="text" class="search-input" id="search-input" placeholder="Пошук по іменах..." autocomplete="off">
                                <button class="search-close-btn" id="search-close-btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M15 5L5 15M5 5L15 15" stroke="#4F4F4F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                                <div class="search-results" id="search-results"></div>
                            </div>
                        </div>
                        <!-- <div class="language-selector">
                            <span>UA</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M4 6L8 10L12 6" stroke="#6B6B6B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div> -->
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
                                <svg width="18" height="30"><use xlink:href="#trident"></use></svg>
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
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search functionality -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Элементы поиска - десктоп
        const searchContainer = document.getElementById('search-container');
        const searchToggleBtn = document.getElementById('search-toggle-btn');
        const searchInputContainer = document.getElementById('search-input-container');
        const searchInput = document.getElementById('search-input');
        const searchCloseBtn = document.getElementById('search-close-btn');
        const searchResults = document.getElementById('search-results');
        
        // Элементы поиска - мобильный
        const mobileSearchContainer = document.getElementById('mobile-search-container');
        const mobileSearchToggleBtn = document.getElementById('mobile-search-toggle-btn');
        const mobileSearchInputContainer = document.getElementById('mobile-search-input-container');
        const mobileSearchInput = document.getElementById('mobile-search-input');
        const mobileSearchCloseBtn = document.getElementById('mobile-search-close-btn');
        const mobileSearchResults = document.getElementById('mobile-search-results');
        
        let searchTimeout;
        
        // Функции управления состоянием поиска
        function openSearch(container, inputContainer, input) {
            container.classList.add('search-open');
            inputContainer.classList.add('active');
            setTimeout(() => {
                input.focus();
            }, 300);
        }
        
        function closeSearch(container, inputContainer, input, results) {
            container.classList.remove('search-open');
            inputContainer.classList.remove('active');
            results.classList.remove('show');
            input.value = '';
        }
        
        // Функция поиска
        function performSearch(query, resultsContainer) {
            if (query.length < 2) {
                resultsContainer.classList.remove('show');
                return;
            }
            
            // Показываем индикатор загрузки
            resultsContainer.innerHTML = '<div class="search-loading">Пошук...</div>';
            resultsContainer.classList.add('show');
            
            // AJAX запрос к WordPress
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'action=search_posts&query=' + encodeURIComponent(query) + '&nonce=<?php echo wp_create_nonce('search_nonce'); ?>'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success && data.data.length > 0) {
                    let html = '';
                    data.data.forEach(post => {
                        const highlightedTitle = post.title.replace(
                            new RegExp('(' + query + ')', 'gi'), 
                            '<span class="highlight">$1</span>'
                        );
                        
                        html += `
                            <div class="search-result-item" onclick="window.location.href='${post.url}'">
                                <div class="search-result-photo" style="background-image: url('${post.thumbnail || ''}')"></div>
                                <div class="search-result-info">
                                    <h3 class="search-result-name">${highlightedTitle}</h3>
                                    <p class="search-result-description">${post.excerpt}</p>
                                </div>
                            </div>
                        `;
                    });
                    
                    html += '<button class="search-more-btn" onclick="window.location.href=\'<?php echo home_url('/?s='); ?>' + encodeURIComponent(query) + '\'">Більше результатів</button>';
                    resultsContainer.innerHTML = html;
                } else {
                    resultsContainer.innerHTML = '<div class="no-results">Результати не знайдено</div>';
                }
            })
            .catch(error => {
                console.error('Search error:', error);
                resultsContainer.innerHTML = '<div class="no-results">Помилка пошуку</div>';
            });
        }
        
        // Обработчики событий для десктопного поиска
        if (searchToggleBtn) {
            searchToggleBtn.addEventListener('click', function() {
                openSearch(searchContainer, searchInputContainer, searchInput);
            });
        }
        
        if (searchCloseBtn) {
            searchCloseBtn.addEventListener('click', function() {
                closeSearch(searchContainer, searchInputContainer, searchInput, searchResults);
            });
        }
        
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    performSearch(this.value, searchResults);
                }, 300);
            });
            
            searchInput.addEventListener('focus', function() {
                if (this.value.length >= 2) {
                    searchResults.classList.add('show');
                }
            });
        }
        
        // Обработчики событий для мобильного поиска
        if (mobileSearchToggleBtn) {
            mobileSearchToggleBtn.addEventListener('click', function() {
                openSearch(mobileSearchContainer, mobileSearchInputContainer, mobileSearchInput);
            });
        }
        
        if (mobileSearchCloseBtn) {
            mobileSearchCloseBtn.addEventListener('click', function() {
                closeSearch(mobileSearchContainer, mobileSearchInputContainer, mobileSearchInput, mobileSearchResults);
            });
        }
        
        if (mobileSearchInput) {
            mobileSearchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    performSearch(this.value, mobileSearchResults);
                }, 300);
            });
            
            mobileSearchInput.addEventListener('focus', function() {
                if (this.value.length >= 2) {
                    mobileSearchResults.classList.add('show');
                }
            });
        }
        
        // Закрытие поиска при клике вне области
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.search-container')) {
                if (searchContainer && searchContainer.classList.contains('search-open')) {
                    closeSearch(searchContainer, searchInputContainer, searchInput, searchResults);
                }
                if (mobileSearchContainer && mobileSearchContainer.classList.contains('search-open')) {
                    closeSearch(mobileSearchContainer, mobileSearchInputContainer, mobileSearchInput, mobileSearchResults);
                }
            }
        });
        
        // Закрытие поиска по ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (searchContainer && searchContainer.classList.contains('search-open')) {
                    closeSearch(searchContainer, searchInputContainer, searchInput, searchResults);
                }
                if (mobileSearchContainer && mobileSearchContainer.classList.contains('search-open')) {
                    closeSearch(mobileSearchContainer, mobileSearchInputContainer, mobileSearchInput, mobileSearchResults);
                }
            }
        });
    });
    </script> 