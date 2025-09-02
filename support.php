<?php
/**
 * Template Name: Support Page
 */

get_header(); ?>


<?php 
$donats = get_field('donats');
$details = get_field('details');
$detailsPP = get_field('details-pp');

// echo '<pre>';
// print_r($details);
// echo '</pre>';
?>


<main class="support-page">
    <div class="container">
        <div class="support-container">
            <h1 class="support-title"><?php the_title() ?></h1>
            
            <!-- Tab Navigation -->
            <div class="tab-navigation">
                <button class="tab-button active" onclick="switchTab('card-payment')">
                    Платіж карткою
                </button>
                <button class="tab-button" onclick="switchTab('ukraine-transfer')">
                    Переказ по Україні
                </button>
                <button class="tab-button" onclick="switchTab('paypal')">
                    PayPal
                </button>
            </div>

            <!-- Card Payment Tab -->
            <div id="card-payment" class="tab-content active">
                <div class="payment-form">
                    <div class="form-group">
                        <div class="form-row">
                            <input type="text" class="form-field" placeholder="Сума" id="amount-input">
                            <div class="form-field currency-field">
                                <span style="color: #828282; opacity: 0.6;">UAH</span>
                                <span style="margin-left: auto;">▼</span>
                            </div>
                        </div>
                        <div class="quick-amounts">
                            <?php foreach ($donats as $donat): ?>
                                <button class="amount-button" onclick="setAmount(<?php echo esc_js($donat['uah']); ?>)">+<?php echo esc_html($donat['uah']); ?> UAH</button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <button class="payment-button">
                        <span style="background: white; padding: 4px 8px; border-radius: 4px; color: black; font-weight: bold;">mono</span>
                        <span>PAY</span>
                    </button>
                    
                    <div class="card-pay-info">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                        <span>Оплатити картою</span>
                    </div>
                </div>
            </div>

            <!-- Ukraine Transfer Tab -->
            <div id="ukraine-transfer" class="tab-content">
                <div class="bank-accounts">

                    <?php foreach ($details as $detail): ?>
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label"><?= $detail['bank'] ?></div>
                            <div class="account-value"><?= $detail['tax'] ?></div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('<?= $detail['tax'] ?>')">
                            <svg width="20" height="21"><use xlink:href="#copy"></use></svg>
                            Копіювати
                        </button>
                    </div>
                    <?php endforeach; ?>
                
                </div>
            </div>

            <!-- PayPal Tab -->
            <div id="paypal" class="tab-content">
                <div class="paypal-account">

                  <?php foreach ($detailsPP as $detail): ?>
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label"><?= $detail['bank'] ?></div>
                            <div class="account-value"><?= $detail['tax'] ?></div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('<?= $detail['tax'] ?>')">
                            <svg width="20" height="21"><use xlink:href="#copy"></use></svg>
                            Копіювати
                        </button>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Copy Feedback -->
    <div id="copy-feedback" class="copy-feedback">
        Скопійовано до буфера обміну!
    </div>

    <script>
        // Tab switching functionality
        function switchTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(tab => tab.classList.remove('active'));

            // Remove active class from all tab buttons
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('active'));

            // Show selected tab content
            document.getElementById(tabName).classList.add('active');

            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Set amount for card payment
        function setAmount(amount) {
            document.getElementById('amount-input').value = amount;
        }

        // Copy to clipboard functionality
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showCopyFeedback();
            }).catch(function(err) {
                // Fallback for older browsers
                const textArea = document.createElement('textarea');
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                showCopyFeedback();
            });
        }

        // Show copy feedback
        function showCopyFeedback() {
            const feedback = document.getElementById('copy-feedback');
            feedback.classList.add('show');
            setTimeout(() => {
                feedback.classList.remove('show');
            }, 2000);
        }
    </script>
</main>

<?php get_footer(); ?>

