<footer>
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__left">
                <div class="footer__logo">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' ); // Получаем ID логотипа, установленного в настройках темы
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
                    if ( has_custom_logo() ) { 
                      echo '<a href="'. esc_url( home_url( '/' ) ) .'"><img src="" alt="'. esc_attr( get_bloginfo( 'name' ) ) .'"></a>'; // Выводим логотип со ссылкой на главную страницу
                    } else {
                      echo '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name' ) ) .'</a>';  // Если логотип не установлен, выводим название сайта
                    }
                    ?>
                </div>
                <div class="footer__tooltip">
                    <p>© 2018–2022 ООО «К-Телеком»</p>
                </div>
            </div>
            <div class="footer__right">
                <div class="footer__social">
                    <a href="#" target="_blank"><img src="" alt="Instagram"></a>
                    <a href="#" target="_blank"><img src="" alt="YouTube"></a>
                    <a href="#" target="_blank"><img src="" alt="VKontakte"></a>
                    <?php // wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>