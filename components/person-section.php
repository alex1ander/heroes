<?php 
$gallery = get_field('gallery');
$details = get_field('details');
$info    = get_field('info');
?>

<section id="person" class="person-detail">
    <div class="container">
        <div class="person-content">
            
            <!-- Gallery Section -->
            <?php if (!empty($gallery) && is_array($gallery)): ?>
            <div class="person-gallery">
                <div class="main-gallery">
                    <div class="swiper main-gallery-swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($gallery as $image): ?>
                                <?php if (!empty($image)): ?>
                                <div class="swiper-slide">
                                    <img src="<?= esc_url($image) ?>" alt="" class="main-image">
                                </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                
                <!-- Thumbnail Gallery -->
                <div class="thumbnail-gallery">
                    <?php foreach($gallery as $image): ?>
                        <?php if (!empty($image)): ?>
                        <div class="thumbnail">
                            <img src="<?= esc_url($image) ?>" alt="">
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Person Info Section -->
            <div class="person-info">
                
                <!-- Person Header -->
                <div class="person-header">
                    <div class="person-title">
                        <h1><?php the_title() ?></h1>
                        <?php if ($activity = get_field('about-people_activity')): ?>
                            <p class="person-subtitle"><?= esc_html($activity) ?></p>
                        <?php endif; ?>
                    </div>
                    <button id="shareBtn" class="share-btn">
                        <svg width="18" height="15"><use xlink:href="#share"></use></svg>
                    </button>
                </div>

                <!-- Person Details -->
                <?php if (!empty($details) && is_array($details)): ?>
                <div class="person-details">
                    <div class="details-line">
                        <div class="start-dot"></div>
                        <div class="middle-line"></div>
                        <div class="end-dot"></div>
                    </div>
                    <div class="details-group">
                        <?php foreach($details as $detail): ?>
                            <?php if (!empty($detail['value']) || !empty($detail['label'])): ?>
                            <div class="detail-item">
                                <?php if (!empty($detail['value'])): ?>
                                    <span class="detail-value"><?= esc_html($detail['value']) ?></span>
                                <?php endif; ?>
                                <?php if (!empty($detail['label'])): ?>
                                    <span class="detail-label"><?= esc_html($detail['label']) ?></span>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Person Stories -->
                <?php if (!empty($info) && is_array($info)): ?>
                <div class="person-stories">
                    <?php foreach($info as $block): ?>
                        <?php if (!empty($block['title']) || !empty($block['description'])): ?>
                        <div class="story-card">
                            <?php if (!empty($block['title'])): ?>
                                <h3><?= esc_html($block['title']) ?></h3>
                            <?php endif; ?>
                            <?php if (!empty($block['description'])): ?>
                                <p><?= esc_html($block['description']) ?></p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const galleryEl = document.querySelector('.main-gallery-swiper');
  if (!galleryEl) return;

  const thumbnails = Array.from(document.querySelectorAll('.thumbnail'));

  function updateActiveThumbnail(activeIndex) {
    thumbnails.forEach((thumb, i) => {
      thumb.classList.toggle('active', i === activeIndex);
    });
  }

  const mainSwiper = new Swiper(galleryEl, {
    spaceBetween: 10,
    loop: true,
    speed: 600,
    navigation: {
      nextEl: '.main-gallery .swiper-button-next',
      prevEl: '.main-gallery .swiper-button-prev',
    },
    on: {
      init(swiper) {
        updateActiveThumbnail(swiper.realIndex);
      },
      slideChange(swiper) {
        updateActiveThumbnail(swiper.realIndex);
      }
    }
  });

  thumbnails.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
      mainSwiper.slideToLoop(index);
      updateActiveThumbnail(index);
    });
  });
});



document.getElementById("shareBtn").addEventListener("click", async() => { 
    if (navigator.share) { 
    try { 
    await navigator.share({ 
    title: document.title, 
    text: "Подивися це 👇", 
    URL: window.location.href 
    }); 
    console.log("Успішно поділився!"); 
    } catch (err) { 
    console.log("Помилка при шарингу:", err); 
    } 
    } else { 
    alert("Ваш браузер не підтримує функцію поділитися."); 
    }
    });
</script>