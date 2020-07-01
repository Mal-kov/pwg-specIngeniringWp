<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package specIn
 */

?>


<footer>
    <div class="container">
        <div class="row footerInfo">
            <!-- <div class=""> -->
            <div class="col-md-4">
                <div class="footerInfo_logo">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-headerLogo.png" alt="">
                    <p><?php bloginfo( 'name' ); ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footerInfo_services">

                    <ul>
                        <li><a href="#videoBlock">Видеонаблюдение</a></li>
                        <li><a href="#alarmSystem">Сигнализация</a></li>
                        <li><a href="#skud">Контроль доступа</a></li>
                        <li><a href="#tvBlock">Спутниковое ТВ</a></li>
                        <li><a href="#gsmBlock">GSM оборудование</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footerInfo_contact">
                    <div class="footerInfo_element">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-location.png" alt="">
                        <p>Покров <br>Больничный пр. 18</p>
                    </div>
                    <div class="footerInfo_element">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-telephone.png" alt="">
                        <a href="tel:<?php echo get_option('mainPhone');?>"><?php echo get_option('mainPhone');?></a>
                    </div>
                    <div class="footerInfo_element">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/footer-email.png" alt="">
                        <a href="mailto:<?php echo get_option('mainEmail');?>"><?php echo get_option('mainEmail');?></a>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footerCopy">
                    <p>&copy;2010-<?php echo date('Y')?> ООО СпецИнжениринг</p>
                    <a href="#">Политика конфидециальности</a>
                    <p><?php echo get_option('mainLicense');?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
