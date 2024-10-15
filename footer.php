    <footer class="footer">
        <div class="footer__container">
            <div class="footer__social-icons">
                <div class="footer__social-icons">
                    <div class="social-icon icon__facebook">
                        <a href="https://www.facebook.com/profile.php?id=100068670848466" target="_blank" rel="noopener noreferrer"></a>
                    </div>
                    <div class="social-icon icon__instagram">
                        <a href="https://www.instagram.com/ksyusha_baranik/" target="_blank" rel="noopener noreferrer"></a>
                    </div>
                    <div class="social-icon icon__email">
                        <a href="mailto:ksyubaranik@gmail.com" target="_blank" rel="noopener noreferrer"></a>
                    </div>
                </div>
            </div>

            <div class="footer__menu">
                <nav class="footer__menu-body">
                    <?php 
                        wp_nav_menu( [
                            'theme_location'       => 'footer',                          
                            'container'            => false,    
                            'menu_id'              => false,    
                            'echo'                 => true,
                            'depth'                => 0,       
                            'items_wrap'           => '<ul id="%1$s" class="footer__menu-list %2$s">%3$s</ul>',  
                            ] ); 
                    ?>
                </nav>
            </div>
            <div class="footer__bottom">
                <p>@ 2024 Real Estate. All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </div>
</body>

</html>