<?php get_header(); ?>

<section class="search-results-page">
    <div class="container">
        <h2 class="section-title">
            <?php printf( __( 'Результати пошуку за запитом: %s', 'your-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>

        <?php if ( have_posts() ) : ?>
            <div class="names-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="name-card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card-image">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ); ?>" 
                                         alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>

                            <div class="card-content">
                                <h3 class="card-name"><?php the_title(); ?></h3>
                                <p class="card-subtitle">
                                    <?php the_field('about-people_activity'); ?>
                                </p>
                                <p class="card-description">
                                    <?php echo wp_trim_words( get_field('about-people_description'), 25, '...' ); ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Пагинация -->
            <div class="pagination">
                <?php
                echo paginate_links( array(
                    'total'   => $wp_query->max_num_pages,
                    'current' => max( 1, get_query_var('paged') ),
                ) );
                ?>
            </div>

        <?php else : ?>
            <p><?php _e( 'Нічого не знайдено.', 'your-textdomain' ); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
