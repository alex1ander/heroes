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
                            <a href="<?= get_permalink(); ?>" class="name-card">
                                <div class="card-image">
                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" 
                                        alt="<?php echo esc_attr( get_the_title() ); ?>">
                                </div>

                                <div class="card-content">
                                    <div>
                                        <h3 class="card-name"><?php the_title(); ?></h3>
                                    </div>
                                        <p class="card-subtitle">
                                            <?php the_field('about-people_activity'); ?>
                                        </p>

                                        <p class="card-description">
                                            <?php echo wp_trim_words(get_field('about-people_description'), 25, '...'); ?>
                                        </p>
                                </div>
                                <div class="card-link">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M7 17l9.2-9.2M17 17V7H7" stroke="#fff" stroke-width="2"/>
                                    </svg>
                                </div>
                            </a>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                endif;
                ?>

            </div>
        </div>
    </div>
</section>
