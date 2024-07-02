<?php include( 'template-parts/css-parts/footer-css.php' ); ?>
    <footer>
        <?
        $logo = get_field('footer_logo', 'option');
        $phone_number = get_field('phone_number', 'option');
        $linkEmail = get_field('footer_email', 'option');
        $socialItems = get_field('social_items', 'option');
        ?>
        <div class="container">
            <div class="footer_intro">
                <div class="left_side">
                    <?php if($logo): ?>
                        <div class="logo">
                            <a href="/">
                                <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>" class="site_logo"/>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if($socialItems): ?>
                        <div class="social_items">
                        <?php
                        if($socialItems):
                            foreach($socialItems as $item):
                                ?>
                                <?php $social_icon = $item['social_icon']; ?>
                                <a class="social_item" href="<?=$item['social_link']?>"><img src="<?php echo $social_icon['url']?>" alt="<?php echo $social_icon['alt']?>" /></a>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <?php endif; ?>
                    <div class="connection">
                        <?php if($phone_number): ?>
                            <a class="phone_number" target="<?php echo $phone_number['target']; ?>" href="<?php echo $phone_number['url'] ?>"><?php echo $phone_number['title'] ?></a>
                        <?php endif; ?>
                        <?php if($linkEmail): ?>
                            <a class="footer_email" target="<?php echo $linkEmail['target']; ?>" href="<?php echo $linkEmail['url'] ?>"><?php echo $linkEmail['title'] ?></a>
                        <?php endif; ?>
                    </div>
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
