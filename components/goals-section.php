<?php 
$project_goals = get_field('project-goals');
?>

<!-- Goals Section -->
<section id="goals" class="goals-section">
    <div class="container">
        <?php if($project_goals && $project_goals['title']): ?>
        <h2 class="section-title"><?php echo esc_html($project_goals['title']); ?></h2>
        <?php endif; ?>
        
        <?php if($project_goals && $project_goals['goals']): ?>
        <div class="stats-content">
            <div class="goals-grid">
                <?php 
                $goals_count = count($project_goals['goals']);
                $rows = array_chunk($project_goals['goals'], 2);
                
                foreach($rows as $row_index => $row): 
                    $is_single = (count($row) === 1 && $row_index === count($rows) - 1);
                ?>
                <div class="goals-row <?php echo $is_single ? 'single' : ''; ?>">
                    <?php foreach($row as $goal): ?>
                    <div class="goal-card">
                        <?php if($goal['image']): ?>
                        <div class="goal-icon">
                            <img src="<?php echo esc_url($goal['image']); ?>" alt="Goal icon" />
                        </div>
                        <?php endif; ?>
                        
                        <?php if($goal['text']): ?>
                        <div class="goal-text"><?php echo esc_html($goal['text']); ?></div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
