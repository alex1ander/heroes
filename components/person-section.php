
<?php 
$gallery = get_field('gallery');
$details = get_field('details');
$info = get_field('info');

// echo '<pre>';
// print_r($info);
// echo '</pre>';
?>


<section class="person-detail">
    <div class="container">
        <div class="person-content">
            <!-- Gallery Section -->
            <div class="person-gallery">
                <div class="main-gallery">
                    <div class="swiper main-gallery-swiper">
                        <div class="swiper-wrapper">

                            <?php foreach($gallery as $image):?>
                            <div class="swiper-slide">
                                <img src="<?= $image ?>" alt="" class="main-image">
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <!-- Navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                
                <!-- Thumbnail Gallery -->
                <div class="thumbnail-gallery">
                    <?php foreach($gallery as $image):?>
                        <div class="thumbnail">
                            <img src="<?= $image ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Person Info Section -->
            <div class="person-info">
                <!-- Person Header -->
                <div class="person-header">
                    <div class="person-title">
                        <h1><?php the_title() ?></h1>
                        <p class="person-subtitle"><?= get_field('about-people_activity') ?></p>
                    </div>
                    <button class="share-btn" aria-label="Поделиться">
                        <svg width="18" height="15"><use xlink:href="#share"></use></svg>
                    </button>
                </div>

                <!-- Person Details -->
                <div class="person-details">
                    <div class="details-line">
                        <div class="start-dot"></div>
                        <div class="middle-line"></div>
                        <div class="end-dot"></div>
                    </div>
                    <div class="details-group">

                        <?php foreach($details as $detail): ?>
                        <div class="detail-item">
                            <span class="detail-value"><?= $detail['value']?></span>
                            <span class="detail-label"><?= $detail['label']?></span>
                        </div>
                        <?php endforeach; ?>
                  
                    </div>
                </div>

                <!-- Person Stories -->
                <div class="person-stories">
                    <?php foreach($info as $block): ?>           
                    <div class="story-card">
                        <h3><?= $block['title']?></h3>
                        <p><?= $block['description']?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const galleryEl = document.querySelector('.main-gallery-swiper');
  if (!galleryEl) return;

  // Сначала собираем превью
  const thumbnails = Array.from(document.querySelectorAll('.thumbnail'));

  function updateActiveThumbnail(activeIndex) {
    thumbnails.forEach((thumb, i) => {
      thumb.classList.toggle('active', i === activeIndex);
    });
  }

  // Потом инициализируем Swiper
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

  // Обработчики кликов по превью
  thumbnails.forEach((thumb, index) => {
    thumb.addEventListener('click', () => {
      mainSwiper.slideToLoop(index);
      updateActiveThumbnail(index);
    });
  });
});

</script>
