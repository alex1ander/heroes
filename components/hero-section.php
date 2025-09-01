<?php 
$heroSection = get_field('hero-section');

// echo '<pre>';
// print_r($heroSection);
// echo '</pre>';
?>



<section class="hero">
    <div class="container">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                

            <?php foreach($heroSection as $slide): ?>
                <div class="swiper-slide" role="group"  >
                    <div class="hero-bg">
                        <div class="hero-content">
                            <div class="hero-person">
                                <h1 class="hero-name"><?= $slide['name']?></h1>
                                <p class="hero-subtitle"><?= $slide['activity']?></p>
                            </div>
                            <div class="hero-main">
                                <h2 class="hero-title"><?= $slide['title']?></h2>
                                <p class="hero-description"><?= $slide['description']?></p>
                            </div>
                        </div>

                        <?php if($slide['image']['type'] === 'image'): ?>
                            <img class="bg-image" src="<?= $slide['image']['url'] ?>" alt="">
                        <?php else: ?>
                            <video class="bg-image" autoplay muted loop>
                                <source src="<?= $slide['image']['url'] ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
                
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination">
            </div>
    </div>
</section>
