  <header id="header" class="header d-flex align-items-center light-background sticky-top">
      <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
          <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
              <?php

                if (function_exists('the_custom_logo')) {
                    $logo_id = get_theme_mod('custom_logo');

                    $logo = wp_get_attachment_image_src($logo_id);

                    if ($logo) {

                        echo '<img loading="prelaod" decoding="async" class="img-fluid" width="150px" src="' . $logo[0] . '" alt="Logo">';
                    } else {

                        echo '<h1 class="sitename">Logo</h1> ';
                    }
                } else {

                    echo '<h1 class="sitename">Logo</h1> ';
                }

                ?>
          </a>
          <nav id="navmenu" class="navmenu">
              <?php

                $defaults = array(
                    'menu' => '',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'container_aria_label' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    // 'item_spacing'         => 'preserve',
                    'depth' => 3,
                    'walker' => new WP_Bootstrap_Navwalker(),
                    'theme_location' => 'primary',
                );

                wp_nav_menu($defaults);

                ?>

              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

          </nav>

          <div class="header-social-links">

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

              <?php } ?>

          </div>

      </div>
  </header>