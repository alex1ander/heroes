<?php 
$supporters = get_field('supported-about-us');
?>

<!-- Supporters Section -->
<section class="supporters-section">
    <div class="container">
        <h2 class="section-title">Нас підтримують</h2>
        
        <?php if($supporters): ?>
        <div class="supporters-grid">
            <?php 
            $i = 0;
            $count = count($supporters);
            foreach($supporters as $supporter_group): 
                if($i % 2 == 0): ?>
                    <div class="supporters-row"><!-- открываем ряд -->
                <?php endif; ?>
                
                <?php if($supporter_group['image']): ?>
                <div class="supporter-card">
                    <img src="<?php echo esc_url($supporter_group['image']['url']); ?>" alt="<?php echo esc_attr($supporter_group['image']['alt']); ?>" class="supporter-logo">
                </div>
                <?php endif; ?>
                
                <?php 
                $i++;
                // если закрыли пару
                if($i % 2 == 0): ?>
                    </div><!-- закрываем ряд -->
                <?php endif; ?>
            <?php endforeach; ?>
            
            <?php 
            // если элементов нечетное количество — добавляем пустую карточку
            if($count % 2 != 0): ?>
                <div class="supporter-card empty"></div>
                </div><!-- закрываем ряд -->
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
