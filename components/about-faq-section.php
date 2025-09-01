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
