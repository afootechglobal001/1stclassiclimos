<div class="all-alert-back-div">
    <div class="success-alert-div animated fadeInDown">
        <div class="icon"><i class="bi-check-all"></i></div>
        <div class="text">
            <p>PASSWORD RESET SUCCESSFUL! Check your email to confirm.</p>
        </div>
    </div>
</div>

<div id="get-form-more-div">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px" alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="get-more-div-secondary">
    <div class="alert-loading-div">
        <div class="icon"><img src="<?php echo $websiteUrl ?>/all-images/images/loading.gif" width="20px" alt="Loading" /></div>
        <div class="text">
            <p>LOADING...</p>
        </div>
    </div>
</div>

<div id="customConfirmModal" class="modal-overlay" style="display:none;"></div>
<div id="globalLoader" class="modal-preloader modal-overlay" style="display:none;">
    <div>
        <div class="spinner"></div>
        <p id="globalLoaderText">Locking result, please wait...</p>
    </div>
</div>

<div class="sidenavdiv">
    <div class="live-chat-back-div">

        <a href="tel:+1 (832) 743-9353" title="Call Customer Care">
            <div class="chat-div">
                <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
                <div class="text">+1 (832) 743-9353</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://api.whatsapp.com/send?text=Greetings! I'd like to make an enquiry on the services you offer.&phone=+1 (832) 743-9353" target="_blank" title="Whatsapp">
            <div class="chat-div">
                <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
                <div class="text">+1 (832) 743-9353</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.facebook.com/profile.php?id=61595073264053&mibextid=wwXIfr/" target="_blank" title="Facebook">
            <div class="chat-div">
                <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
                <div class="text">Facebook Page </div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://twitter.com/" target="_blank" title="Twitter">
            <div class="chat-div">
                <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
                <div class="text">Twitter Page</div>
                <br clear="all" />
            </div>
        </a>

        <a href="https://www.instagram.com/bowcares?stkn=MW5rdXUzd29oOG1kcA%3D%3D&utm_source=qr/" target="_blank" title="Instagram">
            <div class="chat-div">
                <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
                <div class="text">Instagram Page</div>
                <br clear="all" />
            </div>
        </a>
    </div>

   <div class="index-menu-back-div">
        <div class="top-div">
            <div class="logo-div">
                <a href="<?php echo $websiteUrl ?>">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png"
                        alt="<?php echo $appName ?> Logo"
                        class="animated zoomIn" />
                </a>
            </div>
        </div>

        <div class="div-in">
            <div class="div">
                <a href="<?php echo $websiteUrl; ?>" title="Home Page">
                    <li <?php if ($page == 'index.php') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-house"></i>
                        Home
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Transportation Services">
                    <li <?php if ($page == 'services') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-car-front"></i>
                        Transportation Services
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Make a Reservation">
                    <li <?php if ($page == 'reservations') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-calendar-check"></i>
                        Reservations
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="About Us">
                    <li <?php if ($page == 'about') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-building"></i>
                        About Us
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Customer Reviews">
                    <li <?php if ($page == 'reviews') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-star"></i>
                        Reviews
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Our Fleet Gallery">
                    <li <?php if ($page == 'gallery') { ?> id="active-li" <?php } ?>>
                        <i class="bi-car-front-fill"></i>
                        Our Fleet
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Travel Tips and News">
                    <li <?php if ($page == 'blog') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-journal-text"></i>
                        Blog
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Frequently Asked Questions">
                    <li <?php if ($page == 'faq') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-patch-question"></i>
                        FAQs
                    </li>
                </a>
            </div>

            <div class="div">
                <a href="<?php echo $websiteUrl; ?>/#" title="Contact Us">
                    <li <?php if ($page == 'contact-us') { ?> id="active-li" <?php } ?>>
                        <i class="bi bi-headset"></i>
                        Contact Us
                    </li>
                </a>
            </div>
        </div>

        <div class="mobile-menu-button-wrapper">
            <div class="heading-title">
                <div class="content">
                    <h3>Ready to Book Your Ride?</h3>
                    <p>Luxury transportation<br>made simple.</p>
                </div>

                <div class="menu-icon">
                    <i class="bi bi-car-front"></i>
                </div>
            </div>

            <div class="alert-menu-buttons">
                <a href="<?php echo $websiteUrl; ?>/#"
                    class="get-started-btn">
                    <i class="bi bi-calendar-check"></i>
                    <span>Make Reservation</span>
                </a>

                <a href="<?php echo $websiteUrl; ?>/#"
                    class="join-team-btn">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Account Login</span>
                </a>

                <a href="<?php echo $websiteUrl; ?>/#"
                    class="join-team-btn">
                    <i class="bi bi-person-plus"></i>
                    <span>Sign Up</span>
                </a>
            </div>
        </div>
    </div>

    <div class="sidenavdiv-in" onclick="_closeSideNav()"></div>
</div>