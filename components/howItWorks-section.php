<?php 
$howiItWorks = get_field('how-it-works');

// echo '<pre>';
// print_r($howiItWorks);
// echo '</pre>';
?>


<section class="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title"><?= $howiItWorks['title'] ?></h2>
                <p class="section-subtitle"><?= $howiItWorks['description'] ?></p>
            </div>
            <div class="how-it-works-content">
                <div class="phone-mockup">
                    <img src="<?= $howiItWorks['image'] ?>" alt="">
                </div>
                <div class="steps">
  

                    <?php foreach($howiItWorks['list'] as $element): ?>
                    <div class="step">
                        <div class="step-icon">
                            <img src="<?= $element['element']['image'] ?>" alt="">
                        </div>
                        <div class="step-content">
                            <h3 class="step-title"><?= $element['element']['title'] ?></h3>
                            <p class="step-description"><?= $element['element']['description'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </section>