<?php 
$project_advisers = get_field('project_advisers');
?>

<!-- Advisers Section -->
<section class="advisers-section">
    <div class="container">
        <?php if($project_advisers && $project_advisers['title']): ?>
        <h2 class="section-title"><?php echo esc_html($project_advisers['title']); ?></h2>
        <?php endif; ?>
        
        <?php if($project_advisers && $project_advisers['consult-people']): ?>
        <div class="advisers-grid">
            <?php foreach($project_advisers['consult-people'] as $adviser): ?>
            <div class="adviser-card">
                <?php if($adviser['image']): ?>
                <img src="<?php echo esc_url($adviser['image']); ?>" alt="<?php echo esc_attr($adviser['name']); ?>" class="adviser-photo">
                <?php endif; ?>
                
                <?php if($adviser['name']): ?>
                <h3 class="adviser-name"><?php echo esc_html($adviser['name']); ?></h3>
                <?php endif; ?>
                
                <?php if($adviser['role']): ?>
                <p class="adviser-role"><?php echo esc_html($adviser['role']); ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
