<?php 
$aboutProject = get_field('about_project');

// echo '<pre>';
// print_r($aboutProject);
// echo '</pre>';
?>


<section id="about-project" class="about-project">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title"><?= $aboutProject['title'];?></h2>
                <p class="section-description"><?= $aboutProject['description'];?></p>
                <a href="<?= $aboutProject['link']['url'];?>" target="<?= $aboutProject['link']['target'];?>" class="btn-secondary"><?= $aboutProject['link']['title'];?></a>
            </div>
            <div class="about-collage">
                <img src="<?= $aboutProject['image'];?>" alt="">
            </div>
        </div>
    </section>