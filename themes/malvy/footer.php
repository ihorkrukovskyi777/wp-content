<?php include( 'template-parts/css-parts/footer-css.php' ); ?>
    <footer>
        <div class="container">
             <?php wp_nav_menu(array(
            'theme_location' => 'footer-menu',
                'items_wrap' => '<ul>%3$s</ul>',
            )); ?>
                
            <div class="copyright-footer">
                <p>Copyright <?php echo date("Y"); ?> ©</p>
            </div>
        </div>
       
    </footer>
<?php wp_footer(); ?>
<!--Here Put Google Fonts Links-->

    </body>
</html>
