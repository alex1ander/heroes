<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<main class="about-page">
    <style>
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80');
            background-size: cover;
            background-position: center;
            height: 590px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 32px 0;
        }

        .hero-content {
            max-width: 678px;
        }

        .hero-title {
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .hero-text {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 24px;
            max-width: 622px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-secondary {
            background-color: #fbf5f3;
            color: #333333;
            padding: 12px 32px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #f0e9e7;
        }

        /* About Section */
        .about-section {
            padding: 152px 0;
        }

        .about-header {
            text-align: center;
            margin-bottom: 56px;
            max-width: 686px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-title {
            font-size: 36px;
            font-weight: 700;
            color: #333333;
            margin-bottom: 16px;
            line-height: 1.27;
        }

        .about-text {
            font-size: 16px;
            color: #828282;
            line-height: 1.5;
        }

        .gallery {
            display: flex;
            gap: 8px;
            height: 603px;
        }

        .gallery-main {
            flex: 1;
            border-radius: 4px;
            overflow: hidden;
        }

        .gallery-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-side {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 446px;
        }

        .gallery-side-top {
            height: 294px;
            border-radius: 4px;
            overflow: hidden;
        }

        .gallery-side-top img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-side-bottom {
            height: 301px;
            display: flex;
            gap: 8px;
        }

        .gallery-side-bottom > div {
            flex: 1;
            border-radius: 4px;
            overflow: hidden;
        }

        .gallery-side-bottom img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Goals Section */
        .goals-section {
            padding: 152px 0;
        }

        .goals-grid {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .goals-row {
            display: flex;
            gap: 24px;
        }

        .goals-row.single {
            justify-content: center;
        }

        .goal-card {
            background-color: #fbf5f3;
            padding: 48px 24px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 24px;
            flex: 1;
        }

        .goal-icon {
            width: 36px;
            height: 36px;
            flex-shrink: 0;
        }

        .goal-text {
            font-size: 20px;
            color: #333333;
            line-height: 1.4;
        }

        /* Advisers Section */
        .advisers-section {
            padding: 152px 0;
        }

        .advisers-grid {
            display: flex;
            gap: 24px;
            justify-content: center;
        }

        .adviser-card {
            width: 268px;
            text-align: center;
        }

        .adviser-photo {
            width: 100%;
            height: 375px;
            border-radius: 8px;
            margin-bottom: 8px;
            object-fit: cover;
        }

        .adviser-name {
            font-size: 24px;
            font-weight: 600;
            color: #000000;
            margin-bottom: 4px;
        }

        .adviser-role {
            font-size: 14px;
            font-weight: 500;
            color: #828282;
        }

        /* Supporters Section */
        .supporters-section {
            padding: 152px 0;
        }

        .supporters-grid {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .supporters-row {
            display: flex;
            gap: 24px;
        }

        .supporter-card {
            background-color: #fbf5f3;
            padding: 24px 36px;
            border-radius: 8px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 192px;
        }

        .supporter-logo {
            max-width: 229px;
            max-height: 115px;
            object-fit: contain;
        }

        /* Media Section */
        .media-section {
            padding: 152px 0;
        }

        .media-grid {
            display: flex;
            gap: 42px;
        }

        .media-card {
            background-color: #fbf5f3;
            padding: 24px 36px;
            border-radius: 8px;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 192px;
        }

        .media-logo {
            max-width: 231px;
            max-height: 84px;
            object-fit: contain;
        }

        /* FAQ Section */
        .faq-section {
            padding: 152px 0;
        }

        .faq-item {
            margin-bottom: 48px;
        }

        .faq-question {
            background-color: #fbf5f3;
            padding: 36px 16px;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-question-text {
            font-size: 24px;
            font-weight: 700;
            color: #2c2c2c;
        }

        .faq-answer {
            padding: 36px;
            font-size: 24px;
            color: #4f4f4f;
            line-height: 1.5;
            display: none;
        }

        .faq-answer.active {
            display: block;
        }

        .faq-icon {
            width: 36px;
            height: 36px;
            transition: transform 0.3s;
        }

        .faq-item.active .faq-icon {
            transform: rotate(90deg);
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 28px;
            }

            .about-title,
            .section-title {
                font-size: 28px;
            }

            .goals-row {
                flex-direction: column;
            }

            .advisers-grid {
                flex-direction: column;
                align-items: center;
            }

            .supporters-row,
            .media-grid {
                flex-direction: column;
            }

            .faq-question-text {
                font-size: 18px;
            }

            .faq-answer {
                font-size: 18px;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Жертви не повинні бути<br>
                    статистикою.
                </h1>
                <p class="hero-text">
                    Ми хочемо, щоб світ бачив не лише дати смерті, а історії життя. Щоб за кожним ім'ям було обличчя, мрія, шлях. Бо кожна втрата — це зупинене серце всесвіту.
                </p>
                <button class="btn-secondary">Підтримати проєкт</button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-header">
                <h2 class="about-title">Не просто історії. Це — пам'ять, яка має обличчя.</h2>
                <p class="about-text">
                    Наш проєкт — це цифрова книга пам'яті. Альбом, де обличчя, імена та історії тих, чиє життя обірвали злочинні дії російської федерації, назавжди залишаються серед нас. Ми фіксуємо не лише факти — ми зберігаємо присутність. Щоб не забули. Щоб жили у словах, у світлинах, у нашій пам'яті.
                </p>
            </div>
            
            <div class="gallery">
                <div class="gallery-main">
                    <img src="https://images.unsplash.com/photo-1617791160536-598cf32026fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1964&q=80" alt="Пам'ять">
                </div>
                <div class="gallery-side">
                    <div class="gallery-side-top">
                        <img src="https://images.unsplash.com/photo-1520637836862-4d197d17c735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" alt="Спогади">
                    </div>
                    <div class="gallery-side-bottom">
                        <div>
                            <img src="https://images.unsplash.com/photo-1618737196924-5e7c0ec9e9c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Герої">
                        </div>
                        <div>
                            <img src="https://images.unsplash.com/photo-1611090900700-ad5b05da56bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2062&q=80" alt="Пам'ятник">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="goals-section">
        <div class="container">
            <h2 class="section-title">Цілі проєкту</h2>
            <div class="goals-grid">
                <div class="goals-row">
                    <div class="goal-card">
                        <div class="goal-icon">🕯️</div>
                        <div class="goal-text">Зберегти пам'ять про кожного, хто постраждав</div>
                    </div>
                    <div class="goal-card">
                        <div class="goal-icon">📖</div>
                        <div class="goal-text">Перетворити суху статистику на живі історії</div>
                    </div>
                </div>
                <div class="goals-row">
                    <div class="goal-card">
                        <div class="goal-icon">👁️</div>
                        <div class="goal-text">Створити персоніфіковані свідчення вторгнення</div>
                    </div>
                    <div class="goal-card">
                        <div class="goal-icon">🕊️</div>
                        <div class="goal-text">Показати єдність України через долі її людей</div>
                    </div>
                </div>
                <div class="goals-row single">
                    <div class="goal-card">
                        <div class="goal-icon">🤝</div>
                        <div class="goal-text">Дати кожному спосіб допомогти — через підтримку, донат, розповідь</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advisers Section -->
    <section class="advisers-section">
        <div class="container">
            <h2 class="section-title">Project Advisers</h2>
            <div class="advisers-grid">
                <div class="adviser-card">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b829?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Olesia Kovalchuk" class="adviser-photo">
                    <h3 class="adviser-name">Olesia Kovalchuk</h3>
                    <p class="adviser-role">Art Director</p>
                </div>
                <div class="adviser-card">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Marta Lysenko" class="adviser-photo">
                    <h3 class="adviser-name">Marta Lysenko</h3>
                    <p class="adviser-role">Founder member</p>
                </div>
                <div class="adviser-card">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Andrii Cherniak" class="adviser-photo">
                    <h3 class="adviser-name">Andrii Cherniak</h3>
                    <p class="adviser-role">Founder member</p>
                </div>
                <div class="adviser-card">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Kateryna Bondar" class="adviser-photo">
                    <h3 class="adviser-name">Kateryna Bondar</h3>
                    <p class="adviser-role">Founder member</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Supporters Section -->
    <section class="supporters-section">
        <div class="container">
            <h2 class="section-title">Нас підтримують</h2>
            <div class="supporters-grid">
                <div class="supporters-row">
                    <div class="supporter-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/JavaScript-logo.png/768px-JavaScript-logo.png" alt="Партнер 1" class="supporter-logo">
                    </div>
                    <div class="supporter-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png" alt="Партнер 2" class="supporter-logo">
                    </div>
                </div>
                <div class="supporters-row">
                    <div class="supporter-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Typescript_logo_2020.svg/1200px-Typescript_logo_2020.svg.png" alt="Партнер 3" class="supporter-logo">
                    </div>
                    <div class="supporter-card">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1200px-CSS3_logo_and_wordmark.svg.png" alt="Партнер 4" class="supporter-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Section -->
    <section class="media-section">
        <div class="container">
            <h2 class="section-title">ЗМІ про нас</h2>
            <div class="media-grid">
                <div class="media-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/BBC_News_2019.svg/1200px-BBC_News_2019.svg.png" alt="BBC" class="media-logo">
                </div>
                <div class="media-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/CNN.svg/1200px-CNN.svg.png" alt="CNN" class="media-logo">
                </div>
                <div class="media-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Reuters_Logo.svg/1200px-Reuters_Logo.svg.png" alt="Reuters" class="media-logo">
                </div>
                <div class="media-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/AP_2012_logo.svg/1200px-AP_2012_logo.svg.png" alt="AP" class="media-logo">
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Питання та відповіді</h2>
            <div class="faq-item active">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span class="faq-question-text">Як додати сторінку пам'яті про близьку людину?</span>
                    <span class="faq-icon">▶</span>
                </div>
                <div class="faq-answer active">
                    <p><strong>Залиште заявку на платформі.</strong><br>
                    Ми попросимо вас вказати дані про загиблу людину — ім'я, фото, коротку біографію, спогади, цінності та мрії.</p>
                    
                    <p><strong>Підтвердіть інформацію.</strong><br>
                    Для перевірки просимо завантажити:<br>
                    – фото або скан свідоцтва про смерть,<br>
                    – фото загиблого,<br>
                    – ваші документи: паспорт, ІПН, банківські реквізити (якщо плануєте отримувати фінансову допомогу).</p>
                    
                    <p><strong>Пройдіть модерацію.</strong><br>
                    Наша команда з повагою перевірить усі матеріали. Це може зайняти від 1 до 3 днів. Ми зв'яжемося з вами, якщо будуть уточнення.</p>
                    
                    <p><strong>Сторінка стає публічною.</strong><br>
                    Після підтвердження вона з'явиться на платформі. Інші люди зможуть побачити історію, залишити слова подяки або напряму підтримати родину фінансово через кнопку «ПІДТРИМАТИ».</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span class="faq-question-text">Як проходить перевірка інформації?</span>
                    <span class="faq-icon">▶</span>
                </div>
                <div class="faq-answer">
                    <p>Наша команда ретельно перевіряє всі подані документи та інформацію. Ми працюємо з офіційними джерелами та зв'язуємося з родичами для підтвердження даних.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span class="faq-question-text">Як зробити внесок або допомогти?</span>
                    <span class="faq-icon">▶</span>
                </div>
                <div class="faq-answer">
                    <p>Ви можете підтримати проєкт фінансово або поширивши інформацію в соціальних мережах. Кожна допомога важлива для збереження пам'яті.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <span class="faq-question-text">Хто може подати інформацію про людину?</span>
                    <span class="faq-icon">▶</span>
                </div>
                <div class="faq-answer">
                    <p>Інформацію можуть подавати близькі родичі, друзі або колеги загиблого. Важливо мати документальні підтвердження та право на розміщення інформації.</p>
                </div>
            </div>
        </div>
    </section>

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
</main>

<?php get_footer(); ?>
