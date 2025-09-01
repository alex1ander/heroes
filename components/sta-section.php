<?php 
$sta = get_field('sta','options');

// echo '<pre>';
// print_r($sta);
// echo '</pre>';
?>

<section class="cta">
        <div class="container">
            <div class="stats-content bg-pink">
                <div class="cta-content">
                    <h2 class="section-title"><?= $sta['title']?></h2>
                    <p class="section-subtitle"><?= $sta['description']?></p>
                    <a href="<?= $sta['link']['url'];?>" target="<?= $sta['link']['target'];?>" class="btn-primary"><?= $sta['link']['title'];?></a>
                </div>
            </div>
        </div>
    </section>