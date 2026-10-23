<?php include 'alert.php' ?>
<header data-aos="fade-down" data-aos-duration="900">
    <div class="header-top-div">
        <div class="header-top-div-in">
            <div class="left-content">
                <div class="social-media-div">
                    <ul>
                        <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                        <li><i class="bi-whatsapp"></i></li></a>
                        <a href="https://web.facebook.com/1stclassiclimos" target="_blank" title="Facebook">
                        <li class="li"><i class="bi-facebook"></i></li></a>
                        <a href="https://twitter.com/1stclassiclimos" target="_blank" title="X">
                        <li class="li"><i class="bi bi-twitter-x"></i></li></a>
                        <a href="https://www.linkedin.com/company/1stclassiclimos" target="_blank" title="Linkedin">
                        <li class="li"><i class="bi-linkedin"></i></li></a>
                        <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
                        <li class="li"><i class="bi-instagram"></i></li></a>
                        <a href="https://www.pinterest.com/1stclassic" target="_blank" title="Pinterest">
                        <li class="li"><i class="bi-pinterest"></i></li></a>
                    </ul>
                </div>

                <div class="contact-div">
                    <div class="contact"><a href="mailto:info@1stclassiclimos.com" title="Email Us"><i class="bi-envelope"></i> info@1stclassiclimos.com</a></div>
                    <div class="contact "><a href="tel:+1-800-658-5679" title="Call Us"><i class="bi-telephone"></i> (+1) 800 658 679</a></div>
                    <div class="contact"><i class="bi-clock"></i> Mon - Sun 24/7 Service</i></div>
                </div>
            </div> 

            <div class="right-content">
                <ul class="ul-right-content">
                    <a href="#download-app" title="Download Mobile App">
                        <li class="app-li">
                            <i class="bi bi-google-play"></i>
                            App
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/blog" title="Blog & Articles">
                        <li
                            class="blog-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/blog")) {?> active <?php }?>">
                            <i class="bi-journal"></i>
                            Blog
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/faq" title="Frequently Asked Questions">
                        <li
                            class="Faq-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/faq")) {?> active <?php }?>">
                            <i class="bi-question-circle"></i>
                            FAQ
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/service-locations" title="Service Locations">
                        <li
                            class="Faq-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/service-locations")) {?> active <?php }?>">
                            <i class="bi-geo-alt"></i>
                            Service Locations
                        </li>
                    </a>
                </ul>

                <div class="btn-div">
                    <div class="account-div" title="My Account">
                        <i class="bi-person"></i> My Account
                    </div>

                    <ul class="ul-login animated fadeIn">
                        <a href="<?php echo $websiteUrl ?>/#">
                            <li class="li" title="Account Login">
                                <i class="bi bi-box-arrow-in-right"></i> Account Login
                            </li>
                        </a>

                        <a href="<?php echo $websiteUrl ?>/#">
                            <li class="li" title="Account Sign Up">
                                <i class="bi bi-person-plus"></i> Account Sign-Up
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>

     <div class="header-bottom">
        <div class="header-bottom-inner">
            <div class="logo-div">
                <a href="<?php echo $websiteUrl ?>">
                    <img src="<?php echo $websiteUrl?>/all-images/images/logo.png" alt="<?php echo $appName?> Logo"
                        class="animated zoomIn" />
                </a>
            </div>

            <nav>
                <ul>
                    <a href="<?php echo $websiteUrl ?>" title="Home Page">
                        <li <?php if (($websiteAutoUrl=="$websiteUrl/index")||($websiteAutoUrl=="$websiteUrl/")||($websiteAutoUrl=="$websiteUrl")) {?>
                            class="active" <?php }?>> Home</li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/about" title="About Us">
                        <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/about")) {?> active <?php }?>">
                            About Us
                        </li>
                    </a>

                    <li id="expand-li"
                        class="services <?php if (strstr($websiteAutoUrl, "$websiteUrl/airport-transportation-limousine-car-service")) {?> active <?php }?>">
                        <a href="<?php echo $websiteUrl?>/airport-transportation-limousine-car-service" title="Services">
                            <i class="bi-plus"></i> Services </a>

                        <ul class="animated fadeIn">
                            <li class="li" title="Airport Transportation">
                                Airport Transportation
                            </li>
                            <li class="li" title="Corporate Transportation Black Car Services">
                                Corporate Transportation Black Car Services
                            </li>
                            <li class="li" title="Point to Point Transportation Limousine Car Service">
                                Point to Point Transportation Limousine Car Service
                            </li>
                        </ul>
                    </li>

                    <a href="<?php echo $websiteUrl?>/#" title="Package Deals">
                        <li
                            class="package-deals-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/package-deals")) {?> active <?php }?>">
                            Package Deals
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/fleet" title="Fleets">
                        <li
                            class="fleets-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/fleet")) {?> active <?php }?>">
                            Fleets
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/reviews" title="Wine Tour">
                        <li
                            class="wine-tour-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/wine-tour")) {?> active <?php }?>">
                            Wine Tour
                        </li>
                    </a>

                    <li class="mini-menu" id="expand-menu">
                        More <i class="bi-chevron-double-down"></i>
                        <div class="mini-nav-div animated animated">
                            <div class="li" id="li"><strong>MORE</strong></div>
                            <a href="<?php echo $websiteUrl?>/#" title="Fleets">
                            <div class="li">Fleets</div></a>
                            <a href="<?php echo $websiteUrl?>/#" title="Wine Tour">
                            <div class="li wine-li">Wine Tour</div></a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="btn-div">
                <a href="<?php echo $website_url?>/#" title="Book a ride now!">
                <button class="btn" title="Book a ride now!"><i class="bi-car-front-fill"></i> Book a ride now!</button></a>
                <button class="mobile-btn" onclick="_openMenu()"><i class="bi-text-right"></i></button>
            </div>
        </div>
    </div>
</header>