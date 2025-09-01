<!-- Names Section -->
<!-- Names Section -->
<section class="names">
    <div class="container">
        <h2 class="section-title">Інші імена, що живуть у пам'яті</h2>
        <div class="swiper names-swiper">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type'      => 'post', // можешь заменить на свой CPT
                    'posts_per_page' => -1,     // все записи
                    'orderby'        => 'rand', // рандомный порядок
                );
                $names_query = new WP_Query($args);

                if ($names_query->have_posts()) :
                    while ($names_query->have_posts()) : $names_query->the_post(); ?>
                        
                        <div class="swiper-slide">
                            <div class="name-card">
                                <div class="card-image">
                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" 
                                        alt="<?php echo esc_attr( get_the_title() ); ?>">
                                </div>

                                <div class="card-content">
                                    <a href="<?= get_permalink(); ?>"><h3 class="card-name"><?php the_title(); ?></h3></a>
                                        <p class="card-subtitle">
                                            <?php the_field('about-people_activity'); ?>
                                        </p>

                                        <p class="card-description">
                                            <?php echo wp_trim_words(get_field('about-people_description'), 25, '...'); ?>
                                        </p>
                                </div>
                                <a href="<?= get_permalink(); ?>" class="card-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>

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
                slidesPerView: 1.2
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