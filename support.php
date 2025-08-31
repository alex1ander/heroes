<?php
/**
 * Template Name: Support Page
 */

get_header(); ?>

<main class="support-page">
    <style>
        /* Support Page Styles */
        .support-container {
            max-width: 960px;
            margin: 0 auto;
            padding: 98px 24px 0;
        }

        .support-title {
            font-size: 36px;
            font-weight: 700;
            color: #333333;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 79px;
            line-height: 1.2;
        }

        /* Tab Navigation */
        .tab-navigation {
            display: flex;
            margin-bottom: 56px;
        }

        .tab-button {
            flex: 1;
            max-width: 304px;
            padding: 12px 16px;
            background-color: #fffffa;
            border: 1px solid #e0e0e0;
            color: #333333;
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-button:first-child {
            border-radius: 8px 0 0 8px;
            border-right: none;
        }

        .tab-button:last-child {
            border-radius: 0 8px 8px 0;
            border-left: none;
        }

        .tab-button.active {
            background-color: #323131;
            color: white;
            border-color: #323131;
        }

        .tab-button:hover:not(.active) {
            background-color: #f5f5f5;
        }

        /* Tab Content */
        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Card Payment Tab */
        .payment-form {
            max-width: 468px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 36px;
        }

        .form-row {
            display: flex;
            gap: 10px;
            margin-bottom: 16px;
        }

        .form-field {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 12px 16px;
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.03);
            flex: 1;
        }

        .form-field::placeholder {
            color: #333333;
            opacity: 0.6;
        }

        .currency-field {
            width: 83px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 16px;
        }

        .quick-amounts {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .amount-button {
            background-color: #fbf5f3;
            border: none;
            border-radius: 8px;
            padding: 8px 4px;
            width: 110px;
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .amount-button:hover {
            background-color: #f0e9e7;
        }

        .payment-button {
            background-color: black;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 16px;
            width: 100%;
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .card-pay-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            padding: 16px;
            border-top: 1px solid #e0e0e0;
            color: #333333;
            font-weight: 500;
        }

        /* Bank Transfer Tab */
        .bank-accounts {
            max-width: 912px;
            margin: 0 auto;
        }

        .bank-account {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .bank-account:last-child {
            border-bottom: none;
        }

        .account-info {
            flex: 1;
        }

        .account-label {
            font-size: 14px;
            font-weight: 500;
            color: #3b3b3b;
            opacity: 0.6;
            margin-bottom: 4px;
        }

        .account-value {
            font-size: 16px;
            font-weight: 600;
            color: #3c3c3c;
        }

        .copy-button {
            display: flex;
            align-items: center;
            gap: 10px;
            background: none;
            border: none;
            cursor: pointer;
            font-family: 'Manrope', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #3b3b3b;
            opacity: 0.6;
            transition: opacity 0.3s ease;
        }

        .copy-button:hover {
            opacity: 1;
        }

        .copy-icon {
            width: 20px;
            height: 20px;
        }

        /* PayPal Tab */
        .paypal-account {
            max-width: 912px;
            margin: 0 auto;
            padding: 24px 0;
        }

        /* Copy feedback */
        .copy-feedback {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border-radius: 4px;
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            z-index: 1000;
            opacity: 0;
            transform: translateY(-20px);
            transition: all 0.3s ease;
        }

        .copy-feedback.show {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .support-container {
                padding: 60px 16px 0;
            }

            .support-title {
                font-size: 28px;
                margin-bottom: 40px;
            }

            .tab-navigation {
                flex-direction: column;
                gap: 0;
            }

            .tab-button {
                max-width: none;
                border-radius: 0 !important;
                border-right: 1px solid #e0e0e0;
                border-left: 1px solid #e0e0e0;
            }

            .tab-button:first-child {
                border-radius: 8px 8px 0 0 !important;
                border-bottom: none;
            }

            .tab-button:last-child {
                border-radius: 0 0 8px 8px !important;
                border-top: none;
            }

            .form-row {
                flex-direction: column;
                gap: 8px;
            }

            .quick-amounts {
                gap: 4px;
            }

            .amount-button {
                width: calc(50% - 2px);
            }

            .bank-account {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                padding: 20px 0;
            }

            .copy-button {
                align-self: flex-end;
            }
        }
    </style>

    <div class="container">
        <div class="support-container">
            <h1 class="support-title">Підтримати цей проєкт</h1>
            
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
                            <button class="amount-button" onclick="setAmount(200)">+200 UAH</button>
                            <button class="amount-button" onclick="setAmount(500)">+500 UAH</button>
                            <button class="amount-button" onclick="setAmount(1000)">+1000 UAH</button>
                            <button class="amount-button" onclick="setAmount(2000)">+2000 UAH</button>
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
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок в «Ощадбанку» (IBAN)</div>
                            <div class="account-value">UA431234560000026004200111123</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('UA431234560000026004200111123')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок в «Приватбанку» (IBAN)</div>
                            <div class="account-value">UA123456780000026007700222345</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('UA123456780000026007700222345')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок у «Сенс Банку» (IBAN)</div>
                            <div class="account-value">UA564321000000026009900333678</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('UA564321000000026009900333678')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок в «Універсал Банку» (IBAN)</div>
                            <div class="account-value">UA334455660000026002050666789</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('UA334455660000026002050666789')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок у «ПУМБ» (IBAN)</div>
                            <div class="account-value">UA556677880000000026002229999</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('UA556677880000000026002229999')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Отримувач</div>
                            <div class="account-value">Благодійна організація «Фонд пам'яті та гідності»</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('Благодійна організація «Фонд пам\'яті та гідності»')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">ЄДРПОУ</div>
                            <div class="account-value">12345678</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('12345678')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                    
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Призначення платежу</div>
                            <div class="account-value">Благодійна пожертва на збереження пам'яті</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('Благодійна пожертва на збереження пам\'яті')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
                </div>
            </div>

            <!-- PayPal Tab -->
            <div id="paypal" class="tab-content">
                <div class="paypal-account">
                    <div class="bank-account">
                        <div class="account-info">
                            <div class="account-label">Рахунок PayPal</div>
                            <div class="account-value">support@memory-foundation.org</div>
                        </div>
                        <button class="copy-button" onclick="copyToClipboard('support@memory-foundation.org')">
                            <svg class="copy-icon" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/>
                                <path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                            </svg>
                            Копіювати
                        </button>
                    </div>
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
