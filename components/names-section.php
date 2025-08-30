<!-- Names Section -->
    <section class="names">
        <div class="container">
            <h2 class="section-title">Інші імена, що живуть у пам'яті</h2>
            <div class="swiper names-swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="name-card">
                            <div class="card-image ">
                               <img src="<?php echo get_template_directory_uri(); ?>/uploads/people2.png" alt="Анастасія Савіцька">
                            </div>
                            <div class="card-content">
                                <h3 class="card-name">Анастасія Савіцька</h3>
                                <p class="card-subtitle">Письменниця, правозахисниця</p>
                                <p class="card-description">
                                    Досліджувала воєнні злочини, писала про них для міжнародної аудиторії. 
                                    Загинула внаслідок російського удару по Краматорську.
                                </p>
                            </div>
                            <button class="card-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                     <div class="swiper-slide">
                        <div class="name-card">
                            <div class="card-image ">
                               <img src="<?php echo get_template_directory_uri(); ?>/uploads/people1.png" alt="Анастасія Савіцька">
                            </div>
                            <div class="card-content">
                                <h3 class="card-name">Анастасія Савіцька</h3>
                                <p class="card-subtitle">Письменниця, правозахисниця</p>
                                <p class="card-description">
                                    Досліджувала воєнні злочини, писала про них для міжнародної аудиторії. 
                                    Загинула внаслідок російського удару по Краматорську.
                                </p>
                            </div>
                            <button class="card-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                     <div class="swiper-slide">
                        <div class="name-card">
                            <div class="card-image ">
                               <img src="<?php echo get_template_directory_uri(); ?>/uploads/people2.png" alt="Анастасія Савіцька">
                            </div>
                            <div class="card-content">
                                <h3 class="card-name">Анастасія Савіцька</h3>
                                <p class="card-subtitle">Письменниця, правозахисниця</p>
                                <p class="card-description">
                                    Досліджувала воєнні злочини, писала про них для міжнародної аудиторії. 
                                    Загинула внаслідок російського удару по Краматорську.
                                </p>
                            </div>
                            <button class="card-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                     <div class="swiper-slide">
                        <div class="name-card">
                            <div class="card-image ">
                               <img src="<?php echo get_template_directory_uri(); ?>/uploads/people1.png" alt="Анастасія Савіцька">
                            </div>
                            <div class="card-content">
                                <h3 class="card-name">Анастасія Савіцька</h3>
                                <p class="card-subtitle">Письменниця, правозахисниця</p>
                                <p class="card-description">
                                    Досліджувала воєнні злочини, писала про них для міжнародної аудиторії. 
                                    Загинула внаслідок російського удару по Краматорську.
                                </p>
                            </div>
                            <button class="card-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                     <div class="swiper-slide">
                        <div class="name-card">
                            <div class="card-image ">
                               <img src="<?php echo get_template_directory_uri(); ?>/uploads/people2.png" alt="Анастасія Савіцька">
                            </div>
                            <div class="card-content">
                                <h3 class="card-name">Анастасія Савіцька</h3>
                                <p class="card-subtitle">Письменниця, правозахисниця</p>
                                <p class="card-description">
                                    Досліджувала воєнні злочини, писала про них для міжнародної аудиторії. 
                                    Загинула внаслідок російського удару по Краматорську.
                                </p>
                            </div>
                            <button class="card-link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>



    <script>

     // Initialize Swiper for Names section
        const namesSwiper = new Swiper('.names-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.names-swiper .swiper-button-next',
                prevEl: '.names-swiper .swiper-button-prev',
            },
            pagination: {
                el: '.names-swiper .swiper-pagination',
                clickable: true,
            },
            loop: true,
            freeMode: true,
            breakpoints: {
                320: {
                    slidesPerView: 'auto',
                    spaceBetween: 8,
                    freeMode: true,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                    freeMode: false,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 16,
                    freeMode: false,
                }
            }
        });

    </script>