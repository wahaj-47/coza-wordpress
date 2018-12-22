        <?php wp_footer(); ?>
        <footer>
            <div class="container">
                <div class="row">
                    <?php if(is_active_sidebar("footer_1")) :?>
                    <div class="footer-container col-sm-6 col-lg-3">
                        <?php dynamic_sidebar('footer_1') ?>
                    </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar("footer_2")) :?>
                    <div class="footer-container col-sm-6 col-lg-3">
                        <?php dynamic_sidebar('footer_2') ?>
                    </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar("footer_3")) :?>
                    <div class="footer-container col-sm-6 col-lg-3">
                        <?php dynamic_sidebar('footer_3') ?>
                    </div>
                    <?php endif; ?>
                    <?php if(is_active_sidebar("footer_4")) :?>
                    <div class="footer-container col-sm-6 col-lg-3">
                        <?php dynamic_sidebar('footer_4') ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="copyrights">
                        <?php dynamic_sidebar('footer_5') ?>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>