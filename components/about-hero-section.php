<?php 
$hero_block = get_field('hero-block');
?>

<!-- Hero Section -->
<section class="about-hero-section" <?php if($hero_block && $hero_block['image']): ?>style="background-image: url('<?php echo esc_url($hero_block['image']); ?>');"<?php endif; ?>>
    <div class="about-hero-overlay"></div>
    <div class="about-hero-content">
        <?php if($hero_block && $hero_block['title']): ?>
        <h1 class="about-hero-title">
            <?php echo wp_kses_post($hero_block['title']); ?>
        </h1>
        <?php endif; ?>
        
        <?php if($hero_block && $hero_block['description']): ?>
        <p class="about-hero-text">
            <?php echo wp_kses_post($hero_block['description']); ?>
        </p>
        <?php endif; ?>
        
        <?php if($hero_block && $hero_block['link']): ?>
        <a href="<?php echo esc_url($hero_block['link']['url']); ?>" 
           class="about-hero-btn"
           <?php if($hero_block['link']['target']): ?>target="<?php echo esc_attr($hero_block['link']['target']); ?>"<?php endif; ?>>
            <?php echo esc_html($hero_block['link']['title']); ?>
        </a>
        <?php endif; ?>
    </div>
</section>
