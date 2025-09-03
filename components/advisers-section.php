
<?php 
$projectAdvisers = get_field('project_advisers');
?>

<!-- Advisers Section -->
<section id="advisers" class="advisers-section">
    <div class="container">
        <h2 class="section-title"><?= $projectAdvisers['title']?></h2>
        <div class="advisers-grid">

            <?php foreach($projectAdvisers['consult-people'] as $people) ?>
            <div class="adviser-card">
                <img src="<?= $people['image']?>" alt="" class="adviser-photo">
                <h3 class="adviser-name"><?= $people['name']?></h3>
                <p class="adviser-role"><?= $people['role']?></p>
            </div>

        </div>
    </div>
</section>
