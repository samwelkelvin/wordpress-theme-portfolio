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
              <ul>
                  <li><a href="index.html" class="active">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="resume.html">Resume</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                              <ul>
                                  <li><a href="#">Deep Dropdown 1</a></li>
                                  <li><a href="#">Deep Dropdown 2</a></li>
                                  <li><a href="#">Deep Dropdown 3</a></li>
                                  <li><a href="#">Deep Dropdown 4</a></li>
                                  <li><a href="#">Deep Dropdown 5</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Dropdown 2</a></li>
                          <li><a href="#">Dropdown 3</a></li>
                          <li><a href="#">Dropdown 4</a></li>
                      </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <div class="header-social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>

      </div>
  </header>