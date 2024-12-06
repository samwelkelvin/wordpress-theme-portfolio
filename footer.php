<footer id="footer" class="footer light-background mt-auto">

    <div class="container">

        <div class="social-links d-flex justify-content-center mb-4">

            <?php if (get_theme_mod('show_social_media_handles')) { ?>

                <?php if (get_theme_mod('facebook')) { ?>
                    <a href="<?php echo get_theme_mod('facebook'); ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <?php } ?>

                <?php if (get_theme_mod('twitter')) { ?>

                    <a href="<?php echo get_theme_mod('twitter'); ?>" class="twitter"><i class="bi bi-twitter-x"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('instagram')) { ?>

                    <a href="<?php echo get_theme_mod('instagram'); ?>" class="instagram"><i class="bi bi-instagram"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('linkedin')) { ?>

                    <a href="<?php echo get_theme_mod('linkedin'); ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('whatsapp')) { ?>

                    <a href="<?php echo get_theme_mod('whatsapp'); ?>" class="whatsapp"><i class="bi bi-whatsapp"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('tiktok')) { ?>

                    <a href="<?php echo get_theme_mod('tiktok'); ?>" class="tiktok"><i class="bi bi-tiktok"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('github')) { ?>

                    <a href="<?php echo get_theme_mod('github'); ?>" class="github"><i class="bi bi-github"></i></a>

                <?php } ?>

                <?php if (get_theme_mod('youtube')) { ?>

                    <a href="<?php echo get_theme_mod('youtube'); ?>" class="youtube"><i class="bi bi-youtube"></i></a>

                <?php } ?>

            <?php } ?>

        </div>

        <div class="copyright text-center ">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Freelancer</strong> <span>All Rights Reserved<br></span></p>
        </div>

        <!-- <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Preloader -->
<div id="preloader"></div>

<?php
wp_footer();
