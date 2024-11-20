<?
$services_data = get_field('footer');
?>
<footer id="footer" class="hidden mt-section-120 footer-bgi">
    <section class="footer-bgi">
        <div class="container footer">
            <div class="footer_numeric">
                <div class="flex-numeric little-text">
                    <div class="numeric-section">07</div>
                    <span>Связаться с нами</span>
                </div>
                <div class="footer_numeric-img" style="margin-left: -13px">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/footer3.png" alt="footer3">
                </div>
            </div>
            <div>
                <!--                style="left: -83px;"-->
                <div class="footer_wrapper_content">
                    <div class="title-section" style="margin-top: 3px">
                        <span class="paragraph-section-text" >Свяжитесь с нами</span>
                        для консультации по платформе или обсуждения <span class="footer_wrapper_content_line">индивидуальных</span> условий
                    </div>
                    <div class="borderB-black border-section-middle"></div>
                    <div class="footer_wrapper">
                        <div class="footer_wrapper_addresses">
                            <div class="little-title-section footer_wrapper_content_subtitle">
                                <span>
                                    Центр Финансовой Информации
                                </span>
                                <div class="main-line"></div>
                            </div>
                            <div class="footer_wrapper_addresses_content">
                                <div class="footer_wrapper_content_ul mt-32">
                                    <div class="footer_wrapper_content_ul_li">
                                        <div class="footer_wrapper_content_ul_li-img">
                                            <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/place.png" alt="place">
                                        </div>
                                        <div class="footer_wrapper_content_ul_li-text little-text">г. Москва, Варшавское шоссе, д. 42</div>
                                    </div>
                                    <div class="footer_wrapper_content_ul_li mt-12">
                                        <div class="footer_wrapper_content_ul_li-img">
                                            <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/email.png" alt="email">
                                        </div>
                                        <div class="footer_wrapper_content_ul_li-text little-text">a.puzanov@risefinance.ru</div>
                                    </div>
                                    <div class="footer_wrapper_content_ul_li mt-12">
                                        <div class="footer_wrapper_content_ul_li-img">
                                            <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/phone.png" alt="phone">
                                        </div>
                                        <a class="footer_wrapper_content_ul_li-text little-text color-black"
                                           style="text-decoration: none"
                                           href="<?=$services_data['footer_phone']['link_feedback']?>">
                                            <?=$services_data['footer_phone']['phone_number']?>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer_wrapper_content_page_up">
                                    <a class="nav-link" href="#home">
                                        <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/page_up.png" alt="page_up">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer_wrapper_content_feedback">
                            <?php echo do_shortcode('[contact-form-7 id="613b9c9" title="Контактная форма 1"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="footer_develop mt-24">
                    <div class="footer_develop_wrapper">
                        <div class="footer_develop_wrapper_logoText">© 2024 ЦФИ</div>
                        <div class="footer_develop_wrapper_policy">
                            <div>
                                <a class="hover-text" href="<?=$services_data['policy']['link']?>">
                                    <?=$services_data['policy']['title']?>
                                </a>
                            </div>
                            <div class="footer_develop_wrapper_policy_cookie">
                                <a class="hover-text" href="<?=$services_data['Cookie']['link']?>">
                                    <?=$services_data['Cookie']['title']?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<? wp_footer(); ?>
</body>
</html>
