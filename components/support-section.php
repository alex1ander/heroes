

<?php 
$saveHistory = get_field('save-history','option');


// echo '<pre>';
// print_r($saveHistory);
// echo '</pre>';
?>
<section class="support">
    <div class="container">

        <div class="stats-block">

            <div class="stats-content bg-pink">
                
                <div class="qr-code">
                    <img src="<?= $saveHistory['image'];?>" alt="">
                </div>

                <div class="support-text">
                    <h2 class="section-title"><?= $saveHistory['title'] ?></h2>
                    <p class="section-subtitle"><?= $saveHistory['description'] ?></p>
                    <a href="<?= $saveHistory['link']['url'];?>" target="<?= $saveHistory['link']['target'];?>" class="btn-secondary"><?= $saveHistory['link']['title'];?></a>
                </div>

            </div>

            <div class="stats-content bg-pink">
                <div class="stats-number"><?= $saveHistory['cash'];?> грн</div>
                <p class="stats-description"><?= $saveHistory['cash-title'];?></p>
            </div>

        </div>


    </div>
</section>