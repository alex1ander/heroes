
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
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M15 6.66667C16.3807 6.66667 17.5 5.54738 17.5 4.16667C17.5 2.78595 16.3807 1.66667 15 1.66667C13.6193 1.66667 12.5 2.78595 12.5 4.16667C12.5 4.34 12.5138 4.5095 12.5394 4.675L7.725 7.08167C7.2825 6.63917 6.67 6.37417 6 6.37417C4.61929 6.37417 3.5 7.49345 3.5 8.87417C3.5 10.2549 4.61929 11.3742 6 11.3742C6.67 11.3742 7.2825 11.1092 7.725 10.6667L12.5394 13.0742C12.5138 13.2397 12.5 13.4092 12.5 13.5825C12.5 14.9632 13.6193 16.0825 15 16.0825C16.3807 16.0825 17.5 14.9632 17.5 13.5825C17.5 12.2018 16.3807 11.0825 15 11.0825C14.33 11.0825 13.7175 11.3475 13.275 11.79L8.46063 9.38333C8.48625 9.21783 8.5 9.04833 8.5 8.875C8.5 8.70167 8.48625 8.53217 8.46063 8.36667L13.275 5.96C13.7175 6.4025 14.33 6.66667 15 6.66667Z" fill="#828282"/>
                        </svg>
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
