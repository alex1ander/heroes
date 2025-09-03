<?php 
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$linkedin = get_field('linkedin', 'option');
?>


<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-logo">
                    <svg width="44" height="72"><use xlink:href="#trident-big"></use></svg>
                    <span class="footer-logo-text">НЕЗАБУТІ</span>
                </div>
                <p class="footer-description">
                    Цифрова меморіальна ініціатива.<br>
                    Кожен заслуговує бути згаданим.
                </p>
                <div class="social-links">
                    <?php if(isset($instagram) && !empty($instagram)):?>
                    <a href="#" class="social-link social-hover">
                        <svg width="24" height="24"><use xlink:href="#instagram"></use></svg>
                        <span>Instagram</span>
                    </a>
                    <?php endif; ?>
                    <?php if(isset($facebook) && !empty($facebook)):?>     
                    <a href="#" class="social-link social-hover">
                         <svg width="24" height="25"><use xlink:href="#facebook"></use></svg>
                        <span>Facebook</span>
                    </a>
                    <?php endif; ?>
                    <?php if(isset($linkedin) && !empty($linkedin)):?>
                    <a href="#" class="social-link social-hover">
                        <svg width="24" height="24"><use xlink:href="#linkedin"></use></svg>
                        <span>LinkedIn</span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer-right">
                <div class="contact-form">
                    <h3>Збережімо пам'ять разом</h3>
                    <p>Заповніть коротку форму —&nbsp;ми&nbsp;зв'яжемося&nbsp;з&nbsp;вами,&nbsp;щоб&nbsp;створити сторінку пам'яті&nbsp;про&nbsp;близьку людину.</p>
                    <?= do_shortcode('[contact-form-7 id="ec91b10" title="Контактна форма 1"]'); ?>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-links">
                <?php
                $footer_menu = wp_get_nav_menu_items('Footer Menu');
                if ($footer_menu) {
                    foreach ($footer_menu as $menu_item) {
                        echo '<a href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
                    }
                }
                ?>
            </div>
            <div class="developer-info">
                <span>Розроблено - </span>
                <a href="https://sofenty.com/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/uploads/sf.png" alt="Sofenty"></a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>