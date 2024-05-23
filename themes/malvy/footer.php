<?php include( 'template-parts/css-parts/footer-css.php' ); ?>
    <footer>
        <div class="container">
            <div class="footer_intro">
                <div class="left_side">
                    <?php $images = get_field('footer_logo', 'option') ?>
                    <?php if($images): ?>
                        <div class="logo">
                            <a href="/">
                                <img src="<?php echo $images['url']?>" alt="<?php echo $images['alt']?>" class="site_logo"/>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php $link = get_field('phone_number', 'option') ?>
                    <?php if($link): ?>
                        <a class="phone_number" target="<?php echo $link['target']; ?>" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                    <?php endif; ?>
                    <?php $linkEmail = get_field('footer_email', 'option') ?>
                    <?php if($linkEmail): ?>
                        <a class="footer_email" target="<?php echo $linkEmail['target']; ?>" href="<?php echo $linkEmail['url'] ?>"><?php echo $linkEmail['title'] ?></a>
                    <?php endif; ?>
                </div>
                <div class="footer_items">
                    <div class="footer_item">
                        <h3>Категорії</h3>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'items_wrap' => '<ul>%3$s</ul>',
                        )); ?>
                    </div>
                    <div class="footer_item">
                        <h3>Покупцям</h3>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-menu2',
                            'items_wrap' => '<ul>%3$s</ul>',
                        )); ?>
                    </div>
                    <div class="footer_item">
                        <h3>про нас</h3>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-menu3',
                            'items_wrap' => '<ul>%3$s</ul>',
                        )); ?>
                    </div>
                </div>
            </div>

            <div class="copyright-footer">
                <p>© <?php echo date("Y"); ?> Всі права захищені</p>
                <div class="links">
                    <a href="#">Публічна оферта</a>
                    <a href="#">Політика конфіденційності</a>
                </div>
            </div>
        </div>
       
    </footer>
<?php wp_footer(); ?>
<!--Here Put Google Fonts Links-->

    </body>
</html>
