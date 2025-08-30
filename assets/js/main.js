/**
 * Nezabutny Theme Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    initMobileMenu();
    
    // Initialize Swiper sliders
    initSwipers();
    
    // Responsive image loading
    initResponsiveImages();
});

/**
 * Initialize Mobile Menu functionality
 */
function initMobileMenu() {
    const burgerMenu = document.getElementById('burger-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const body = document.body;

    function openMobileMenu() {
        if (mobileMenuOverlay) {
            mobileMenuOverlay.classList.add('active');
            body.classList.add('menu-open');
            if (burgerMenu) burgerMenu.classList.add('active');
            
            // Prevent background scrolling
            body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (mobileMenuOverlay) {
            mobileMenuOverlay.classList.remove('active');
            body.classList.remove('menu-open');
            if (burgerMenu) burgerMenu.classList.remove('active');
            
            // Restore background scrolling
            body.style.overflow = '';
        }
    }

    // Burger menu click
    if (burgerMenu) {
        burgerMenu.addEventListener('click', function(e) {
            e.preventDefault();
            openMobileMenu();
        });
    }

    // Close button click
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', function(e) {
            e.preventDefault();
            closeMobileMenu();
        });
    }

    // Close menu when clicking on overlay
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', function(e) {
            if (e.target === mobileMenuOverlay) {
                closeMobileMenu();
            }
        });
    }

    // Close menu when clicking on navigation links
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            closeMobileMenu();
        });
    });

    // Close menu on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenuOverlay && mobileMenuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768 && mobileMenuOverlay && mobileMenuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });
}

/**
 * Initialize Swiper sliders
 */
function initSwipers() {
    // Hero Swiper
    const heroSwiper = document.querySelector('.hero-swiper');
    if (heroSwiper) {
        new Swiper('.hero-swiper', {
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-swiper .swiper-pagination',
                clickable: true,
            },
            loop: true,
            speed: 800,
        });
    }

    // Names Swiper
    const namesSwiper = document.querySelector('.names-swiper');
    if (namesSwiper) {
        new Swiper('.names-swiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: '.names-swiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.names-swiper .swiper-button-next',
                prevEl: '.names-swiper .swiper-button-prev',
            },
            breakpoints: {
                480: {
                    slidesPerView: 1.2,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
            }
        });
    }

    // Person Gallery Swiper
    const personGallerySwiper = document.querySelector('.main-gallery-swiper');
    if (personGallerySwiper) {
        const mainSwiper = new Swiper('.main-gallery-swiper', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.main-gallery .swiper-button-next',
                prevEl: '.main-gallery .swiper-button-prev',
            },
            loop: true,
            effect: 'slide',
            speed: 600,
            on: {
                slideChange: function() {
                    updateActiveThumbnail(this.realIndex);
                }
            }
        });

        // Thumbnail click handlers
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                mainSwiper.slideToLoop(index);
                updateActiveThumbnail(index);
            });
        });

        function updateActiveThumbnail(activeIndex) {
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === activeIndex);
            });
        }
    }
}


/**
 * Initialize responsive image loading
 */
function initResponsiveImages() {
    // Lazy loading for images
    const images = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for older browsers
        images.forEach(img => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
        });
    }
}

/**
 * Utility function to detect mobile devices
 */
function isMobile() {
    return window.innerWidth <= 768;
}

/**
 * Utility function to throttle function calls
 */
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

/**
 * Add touch support for mobile devices
 */
if ('ontouchstart' in window) {
    document.body.classList.add('touch-device');
}
