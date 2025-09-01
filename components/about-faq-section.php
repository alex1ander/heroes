<?php 
$accordions = get_field('accordions');
?>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title">Питання та відповіді</h2>
        
        <?php if($accordions): ?>
            <?php foreach($accordions as $index => $accordion): ?>
            <div class="faq-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <?php if($accordion['title']): ?>
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span class="faq-question-text"><?php echo esc_html($accordion['title']); ?></span>
                    <span class="faq-icon">▶</span>
                </div>
                <?php endif; ?>
                
                <?php if($accordion['description']): ?>
                <div class="faq-answer <?php echo $index === 0 ? 'active' : ''; ?>">
                    <p><?php echo wp_kses_post($accordion['description']); ?></p>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <script>
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const answer = faqItem.querySelector('.faq-answer');
            const icon = element.querySelector('.faq-icon');
            
            // Close all other FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').classList.remove('active');
                }
            });
            
            // Toggle current FAQ item
            faqItem.classList.toggle('active');
            answer.classList.toggle('active');
        }
    </script>
</section>
