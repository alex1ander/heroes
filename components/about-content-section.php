<?php 
$gallery = get_field('gallery');
?>

<!-- About Content Section -->
<section class="about-content-section">
    <div class="container">
        <?php if($gallery): ?>
        <div class="about-content-header">
            <?php if($gallery['title']): ?>
            <h2 class="about-content-title"><?php echo wp_kses_post($gallery['title']); ?></h2>
            <?php endif; ?>
            
            <?php if($gallery['description']): ?>
            <p class="about-content-text">
                <?php echo wp_kses_post($gallery['description']); ?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if($gallery && $gallery['photos']): ?>
        <div class="about-gallery">
            <!-- Desktop Grid -->
            <div class="about-gallery-grid">
                <?php foreach($gallery['photos'] as $photo): ?>
                <div class="about-gallery-item">
                    <img src="<?php echo esc_url($photo); ?>" alt="Галерея" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Mobile Swiper -->
            <div class="about-gallery-swiper swiper">
                <div class="swiper-wrapper">
                    <?php foreach($gallery['photos'] as $photo): ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($photo); ?>" alt="Галерея" loading="lazy">
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
