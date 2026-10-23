<section class="body-div app-download-body-div" id="download-app">
    <div class="body-div-in">
        <div class="main-pages-back-div">
            <div class="general-title how-it-works-title app-download-title" data-aos="fade-in" data-aos-duration="1000">
                <div class="top-title">
                    <i class="bi-car-front-fill"></i>
                    <span><strong><?php echo $appName; ?> In Your Pocket</strong></span>
                </div>

                <div class="main-title">
                    <h2>Discover A Smarter Way To Travel In Luxury</h2>
                    <p>Manage your reservations, explore our premium fleet, request concierge assistance, and keep every journey within reach with the Revamo experience.</p>
                </div>
            </div>

            <div class="feature-wrapper" data-aos="fade-in" data-aos-duration="1000">
                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>Easy Booking</h4>
                </div>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>Real-Time Updates</h4>
                </div>
            </div>

            <div class="download-wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="download-app" title="Download On Google Play">
                    <div class="icon">
                        <i class="bi bi-google-play"></i>
                    </div>

                    <div class="text">
                        <p>Get It On</p>
                        <h4>Google Play</h4>
                    </div>
                </div>

                <div class="download-app" title="Download On App Store">
                    <div class="icon">
                        <i class="bi bi-apple"></i>
                    </div>

                    <div class="text">
                        <p>Download On The</p>
                        <h4>App Store</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-div">
    <div class="footer-div-in">
        <div class="support-wrapper" data-aos="fade-up" data-aos-duration="1000">
            <a href="<?php echo $websiteUrl; ?>/#" class="support-item" title="Book Your Ride">
                <div class="icon">
                    <i class="bi-car-front-fill"></i>
                </div>

                <div class="content">
                    <h3>Book Your Ride</h3>
                    <span>Reserve your ride in just a few steps.</span>
                </div>
            </a>

            <a href="tel:(+1) 800 658 679" class="support-item" title="Call Us">
                <div class="icon">
                    <i class="bi-telephone"></i>
                </div>

                <div class="content">
                    <h3>Call Us</h3>
                    <span>(+1) 800 658 679</span>
                </div>
            </a>

            <a href="mailto:info@1stclassiclimos.com" class="support-item" title="Email Us">
                <div class="icon">
                    <i class="bi bi-envelope-open"></i>
                </div>

                <div class="content">
                    <h3>Email Us</h3>
                    <span>info@1stclassiclimos.com</span>
                </div>
            </a>
        </div>

        <div class="segment-back-div top-segment">
            <div class="segment-div service-locations-div" data-aos="fade-up" data-aos-duration="1000">
                <div class="title-div">
                    <h3>Service Locations</h3>
                    <button class="btn" id="toggleServiceLocationBtn" title="View All Locations" onclick="_toggleServiceLocation();">
                        View All Locations
                    </button>
                </div>

                <ul id="footerServiceLocationContent">
                    <script>
                        _getPageList({
                            pageCategory: "SERVICE-LOCATION",
                            pageContainer: "footerServiceLocationContent"
                        })
                    </script>
                </ul>
            </div>
        </div>
        
        <div class="segment-back-div bottom-segment">
            <div class="segment-div" data-aos="fade-up" data-aos-duration="1000">
                <h3>About Us</h3>
                <div class="logo-div"><img src="<?php echo $websiteUrl?>/all-images/images/footer-logo.png" alt="<?php echo $appName?> Logo"></div>
                <p><strong><?php echo $appName?> </strong> is a full-service chauffeured ground transportation company providing private airport transfers, corporate black-car service, FBO transportation, executive travel, hourly chauffeur service, Sprinter transportation, charter buses, group transportation, special events, and private tours.</p>
               
                <div class="flex-column">
                    <h3>Social Media Links</h3>
                    <div class="social-media">
                        <a href="https://web.facebook.com/1stclassiclimos/" target="_blank" title="Facebook">
                        <button class="social-icon" title="Facebook"><i class="bi-facebook"></i></button></a>
                        <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                        <button class="social-icon" title="Whatsapp"><i class="bi-whatsapp"></i></button></a>
                        <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
                        <button class="social-icon" title="Instagram"><i class="bi-instagram"></i></button></a>
                        <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="X">
                        <button class="social-icon" title="X"><i class="bi bi-twitter-x"></i></button></a>
                        <a href="https://www.linkedin.com/company/1stclassiclimos" target="_blank" title="Linkedin">
                        <button class="social-icon" title="Linkedin"><i class="bi bi-linkedin"></i></button></a>
                        <a href="https://www.pinterest.com/1stclassic" target="_blank" title="Pinterest">
                        <button class="social-icon" title="Pinterest"><i class="bi bi-pinterest"></i></button></a>
                        <a href="https://www.youtube.com/c/1stClassicLimousineCarServicesSanFrancisco" target="_blank" title="Youtube">
                        <button class="social-icon" title="Youtube"><i class="bi bi-youtube"></i></button></a>
                    </div> 
                </div>

                <div class="flex-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our regular Newsletter and receive update via email</p>
                    <div class="newsletter-text-div">
                        <div class="input-container">
                            <input class="input-field" placeholder="Email Address" />
                        </div>
                        <button class="btn" title="Send Mail" onclick=""><i class="bi-send"></i></button>
                    </div>
                </div>
            </div>

            <div class="segment-div" data-aos="fade-up" data-aos-duration="1200">
                <h3>Quick Links</h3>
                <ul>
                    <a href="<?php echo $websiteUrl?>/service-locations" title="Service Locations">
                        <li>Service Locations</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Book A Ride Now">
                        <li>Book A Ride Now</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Account SignUp/Login">
                        <li>Account SignUp/Login</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/about" title="About Us">
                        <li>About <?php echo $appName?></li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/contact-us" title="Contact Us">
                        <li>Contact Us</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Wine Tour">
                        <li>Wine Tour</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/blog" title="Blog & Articles">
                        <li>Blog & Articles</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/faq" title="Frequently Asked Questions">
                        <li>Frequently Asked Questions</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/terms-and-conditions" title="Terms & Conditions">
                        <li>Terms & Conditions</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/privacy-policy" title="Privacy Policy">
                        <li>Privacy Policy</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/cookies-policy" title="Cookies Policy">
                        <li>Cookies Policy</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/affiliates" title="Affiliate Networks">
                        <li>Affiliate Networks</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/fleet" title="Fleets">
                        <li>Fleets</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/airport-transportation-limousine-car-service" title="Services">
                        <li>Services </li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Package Deals">
                        <li>Package Deals</li>
                    </a>
                </ul>
            </div>

            <div class="segment-div" data-aos="fade-up" data-aos-duration="1300">
                <h3>Our Services</h3>
                <ul>
                    <a href="<?php echo $websiteUrl?>/#" title="Airport Transportation">
                        <li>Airport Transportation</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Corporate Transportation Black Car Services">
                        <li>Corporate Transportation Black Car Services </li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Point to Point Transportation Car Service">
                        <li>Point to Point Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Prom and Graduation Transportation Car Service">
                        <li>Prom and Graduation Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Night Out In Town Transportation Car Service">
                        <li>Night Out In Town Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Sports Events Transportation Car Service">
                        <li>Sports Events Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Wine Tasting Tour Transportation Car Service.">
                        <li>Wine Tasting Tour Transportation Car Service.</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Concert Events Transportation Car Service.">
                        <li>Concert Events Transportation Car Service.</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Wedding Transportation Car Service">
                        <li>Wedding Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Non-Emergency Medical Transportation Service">
                        <li>Non-Emergency Medical Transportation Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Bachelor or Bachelorette Transportation Car Service">
                        <li>Bachelor or Bachelorette Transportation Car Service</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Corporate Events Transportation Charter Bus Service">
                        <li>Corporate Events Transportation Charter Bus Service</li>
                    </a>
                </ul>
            </div>

            <div class="segment-div" data-aos="fade-up" data-aos-duration="1400">
                <h3>Fleets</h3>
                <ul>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Sedan">
                        <li>Executive Class Sedan</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class SUV">
                        <li>Executive Class SUV </li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Sprinter Van">
                        <li>Executive Class Sprinter Van</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Stretch Limo">
                        <li>Executive Class Stretch Limo</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Sprinter Limo">
                        <li>Executive Class Sprinter Limo</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Exec. Class H2 Hummer Limo">
                        <li>Exec. Class H2 Hummer Limo</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Limo Party Bus">
                        <li>Executive Class Limo Party Bus</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Class Charter Bus">
                        <li>Executive Class Charter Bus</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Exec. Class Charter Tour Bus">
                        <li>Exec. Class Charter Tour Bus</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Exec. Cadillac Escalade Limo">
                        <li>Exec. Cadillac Escalade Limo</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="VIP Class SUV">
                        <li>VIP Class SUV</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="VIP Class Sedan - s550 Benz">
                        <li>VIP Class Sedan - s550 Benz</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Economy Class Van">
                        <li>Economy Class Van</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Regular Sprinter Shuttle Van">
                        <li>Regular Sprinter Shuttle Van</li>
                    </a>
                    <a href="<?php echo $websiteUrl?>/#" title="Executive Electric Class Sedan">
                        <li>Executive Electric Class Sedan</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>  

    <div class="main-bottom-div">
        <div class="div-in">
            <div class="text">
                <div class="contnent">
                    © 2022 - <?php echo date('Y') ?> <?php echo $appName?>. All Rights Reserved.
                </div>
            
                <ul>
                    <li><a href="<?php echo $websiteUrl?>/#" title="Privacy Policy">Privacy Policy</a></li> |
                    <li><a href="<?php echo $websiteUrl?>/#" title="Terms & Conditions">Terms & Conditions</a></li> |
                    <li><a href="<?php echo $websiteUrl?>/#" title="Cookie Policy">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php include 'bottom-scripts.php'?>