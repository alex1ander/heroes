<?php 
$media_about_us = get_field('media-about-us');
?>

<!-- Media Section -->
<section class="media-section">
    <div class="container">
        <h2 class="section-title">ЗМІ про нас</h2>
        
        <?php if($media_about_us): ?>
        <div class="media-grid">
            <?php foreach($media_about_us as $media): ?>
            <div class="media-card">
                <?php if($media['image']): ?>
                <img src="<?php echo esc_url($media['image']); ?>" alt="ЗМІ" class="media-logo">
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
