<?php
function _otherPagesBtn($websiteUrl) { ?>
    <div class="btn-div slide-btn-div" id="otherPagesBtn">
        <script>
        generalButtons({
            container: "otherPagesBtn",
            buttons: [{
                id: "otherPagesBtn",
                text: "Make a Reservation!",
                size: "btn-lg",
                icon: "bi bi-calendar2-check-fill",
                link: "<?php echo $websiteUrl ?>/#"
            }, {
                text: "Service Areas",
                icon: "bi bi-pin-map",
                size: "btn-lg",
                variant: "btn-outline",
                link: "<?php echo $websiteUrl ?>/#"
            }]
        });
        </script>
    </div>
<?php } ?>

<?php
function _otherPagesTitleContent($props) {
    global $websiteUrl, $appName;

    $title = $props['title'] ?? '';
    $highlight = $props['highlight'] ?? '';
    $description = $props['description'] ?? '';
    $breadcrumbs = $props['breadcrumbs'] ?? [];
    ?>
    <div class="other-pages-back-div">
        <div class="nav-title">
            <ul>
                <?php foreach ($breadcrumbs as $breadcrumb): ?>
                <a href="<?php echo $breadcrumb['url']; ?>">
                    <li title="<?php echo htmlspecialchars($breadcrumb['title']); ?>">
                        <?php echo htmlspecialchars($breadcrumb['title']); ?>

                        <?php if (!$breadcrumb['last']) { ?>
                        <span><i class="bi-caret-right-fill"></i></span>
                        <?php } ?>
                    </li>
                </a>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="main-content-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800">
                    <?php echo htmlspecialchars($title); ?>
                    <?php if ($highlight) { ?>
                    <span><?php echo htmlspecialchars($highlight); ?></span>
                    <?php } ?>
                </h1>

                <p>
                    <?php echo $description; ?>
                </p>

                <?php _otherPagesBtn($websiteUrl); ?>
            </div>

            <div class="right-wrapper" id="requestCallForm">
                <div class="mobile-booking-form">
                    <div class="title-div">
                        <div class="icon">
                            <i class="bi bi-calendar2-check-fill"></i>
                        </div>

                        <div class="content">
                            <h3>Quick Booking</h3>
                            <p>Book your next ride in minutes.</p>
                        </div>
                    </div>

                    <div class="form-wrapper">
                        <div class="tabs-btn-div">
                            <button class="btn active" onclick="changeBookingType('distance')">
                                <i class="bi bi-signpost-2"></i> Distance
                            </button>

                            <button class="btn" onclick="changeBookingType('hourly')">
                                <i class="bi bi-clock"></i> Hourly
                            </button>

                            <button class="btn" onclick="changeBookingType('flat-rate')">
                                <i class="bi bi-cash-coin"></i> Flat Rate
                            </button>
                        </div>

                        <div class="text_field_container" id="route_container" style="display: none;">
                            <script>
                                selectField({
                                    id: 'route',
                                    title: 'Route',
                                    icon: '<i class="bi bi-signpost-2"></i>',
                                    applyBorder: true,
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="pickUp_container">
                            <script>
                                textField({
                                    id: 'pickUp',
                                    title: 'Pickup Location',
                                    oninputFunction: 'getMapDetails()',
                                    icon: '<i class="bi bi-geo-alt"></i>',
                                    applyBorder: true,
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="destination_container">
                            <script>
                                textField({
                                    id: 'destination',
                                    title: 'Drop-off Location',
                                    oninputFunction: 'getMapDetails()',
                                    icon: '<i class="bi bi-geo"></i>',
                                    applyBorder: true,
                                });
                            </script>
                        </div>

                        <div class="flex-cont">
                            <div class="text_field_container" id="pickupDate_container">
                                <script>
                                    textField({
                                        id: 'pickupDate',
                                        title: 'Pickup Date',
                                        type: 'date',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="pickupTime_container">
                                <script>
                                    textField({
                                        id: 'pickupTime',
                                        title: 'Pickup Time',
                                        type: 'time',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="text_field_container" id="duration_container" style="display: none;">
                            <script>
                                selectField({
                                    id: 'duration',
                                    title: 'Duration (In Hours)',
                                    icon: '<i class="bi bi-hourglass-split"></i>',
                                });
                            </script>
                        </div>

                        <div class="btn-div" id="bookBtn">
                            <script>
                                generalButtons({
                                    container: "bookBtn",
                                    buttons: [{
                                        id: "bookBtn",
                                        text: "Book Now!",
                                        icon: "bi-car-front-fill",
                                        width: "btn-full",
                                        size: "btn-lg",
                                        onClick: ""
                                    }]
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
function _customerReviewSection($extraClass = '', $ambientBg = '') { 
    global $websiteUrl;
    ?>
    <section class="body-div <?= !empty($ambientBg) ? ' '.$ambientBg : ''; ?> customer-review-body-div  <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
        <div class="body-div-in">
            <div class="main-pages-back-div">
                <div class="general-title" data-aos="fade-in" data-aos-duration="1000">
                    <div class="top-title">
                        <i class="bi-car-front-fill"></i>
                        <span><strong>Testimonials</strong></span>
                    </div>
                </div>
                
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-da7202e9-404c-4854-b154-c25bf91f03e1" style="width:96%; margin:auto;"></div>
            </div>
        </div>
    </section>
<?php } ?>

<?php
function _howItWorksSection($extraClass = '', $ambientBg = '') { 
    global $websiteUrl;
    ?>
    <section class="body-div <?= !empty($ambientBg) ? ' '.$ambientBg : ''; ?> how-it-works-body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
        <div class="body-div-in how-it-works-body-div-in">
            <div class="main-pages-back-div">
                <div class="general-title how-it-works-title" data-aos="fade-in" data-aos-duration="1000">
                    <div class="top-title">
                        <i class="bi-car-front-fill"></i>
                        <span><strong>How It Works</strong></span>
                    </div>

                    <div class="main-title">
                        <h2>Luxury, Made Effortless</h2>
                        <p>From choosing your vehicle to turning the key, Revamo keeps every step simple, seamless, and tailored to the way you travel.</p>

                        <div class="btn-div">
                            <a href="<?php echo $websiteUrl?>/#" title="Start Your Journey">
                            <button class="btn" title="Start Your Journey">
                                <i class="bi-car-front-fill"></i>
                                Start Your Journey
                            </button></a>
                        </div>
                    </div>
                </div>
                
                <div class="how-it-works-wrapper" data-aos="fade-in" data-aos-duration="1000">
                    <div class="how-it-works" data-number="01">
                        <div class="message-user">
                            <div class="user-avatar">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/choose-ride.png"
                                    alt="Choose Your Car">
                            </div>
                        </div>
                        
                        <div class="text-div">
                            <h3>Choose Your Car</h3>
                            <p>
                                Explore our fleet and find your perfect ride.
                            </p>
                        </div>
                    </div>

                    <div class="how-it-works" data-number="02">
                        <div class="message-user">
                            <div class="user-avatar">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/details.png"
                                    alt="Select Your Details">
                            </div>
                        </div>

                        <div class="text-div">
                            <h3>Select Your Details</h3>
                            <p>
                                Select your dates, locations & preferences.
                            </p>
                        </div>
                    </div>

                    <div class="how-it-works" data-number="03">
                        <div class="message-user">
                            <div class="user-avatar">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/confirm-ride.png"
                                    alt="Confirm Your Ride">
                            </div>
                        </div>
                        
                        <div class="text-div">
                            <h3>Confirm Your Ride</h3>
                            <p>
                                Review your booking & confirm your reservation.
                            </p>
                        </div>
                    </div>

                    <div class="how-it-works" data-number="04">
                        <div class="message-user">
                            <div class="user-avatar">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/enjoy-ride.png"
                                    alt="Enjoy The Drive">
                            </div>
                        </div>
                        
                        <div class="text-div">
                            <h3>Enjoy The Drive</h3>
                            <p>
                                Collect your car and enjoy every moment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php
function _whyChooseUsSection($extraClass = '', $websiteUrl, $appName)  { ?>
    <section class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
        <div class="body-div-in">
            <div class="main-pages-back-div">
                <div class="general-title" data-aos="fade-in" data-aos-duration="1000">
                    <div class="top-title">
                        <i class="bi-car-front-fill"></i>
                        <span><strong>Why Choose Us</strong></span>
                    </div>

                    <div class="main-title">
                        <h2>Why Choose <?php echo $appName; ?>?</h2>
                        <p>Discover a better way to travel with exceptional comfort, timeless class, and complete confidence on every journey.</p>
                    </div>
                </div>

                <div class="why-choose-us-wrapper">
                    <div class="text-wrapper">
                        <div class="listing" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <i class="bi bi-calendar2-check"></i>
                            </div>

                            <div class="content">
                                <h3>Real-time booking System</h3>
                                <p>Booking your transportation service online and get an instant confirmation</p>
                            </div>
                        </div>

                        <div class="listing" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <i class="bi bi-clock-history"></i>
                            </div>

                            <div class="content">
                                <h3>24/7 service available</h3>
                                <p>We are a 24/7 car service provider. Always at your service when needed.</p>
                            </div>
                        </div>

                        <div class="listing" data-aos="fade-up" data-aos-duration="1300">
                            <div class="icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>

                            <div class="content">
                                <h3>Secure online payment system</h3>
                                <p>Go cashless by securely paying online not having to carrying cash with you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="center-image" data-aos="fade-in" data-aos-duration="1000">
                        <img src="<?php echo $websiteUrl; ?>/all-images/body-pix/why-us.jpg" alt="Why Choose<?php echo $appName ?>">
                    </div>

                    <div class="text-wrapper">
                        <div class="listing" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon">
                                <i class="bi bi-emoji-smile"></i>
                            </div>

                            <div class="content">
                                <h3>100% customer satisfaction</h3>
                                <p>We ensure maximum client satisfaction guiding our vision and mission</p>
                            </div>
                        </div>

                        <div class="listing" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon">
                                <i class="bi bi-award"></i>
                            </div>

                            <div class="content">
                                <h3>Premium Standards</h3>
                                <p>Experience exceptional vehicle care, comfort, and attention to every detail.</p>
                            </div>
                        </div>

                        <div class="listing" data-aos="fade-up" data-aos-duration="1300">
                            <div class="icon">
                                <i class="bi bi-headset"></i>
                            </div>

                            <div class="content">
                                <h3>Always Ready</h3>
                                <p>Get dedicated reservation assistance whenever your next journey calls.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php
function _sideHotLinks($websiteUrl)  { ?>
    <div class="div-in">
        <h3>Hot Links</h3>

        <div class="related-services-cont" id="relatedServicesCont">
            <a href="<?php echo $websiteUrl ?>/airport-transportation-limousine-car-service">
            <div class="services-cont">
                <div class="icon">
                    <i class="bi bi-check2-circle"></i>
                </div>

                <div class="content">
                    <h4 title="Our Services">Our Services</h4>  
                </div>
            </div></a>

            <a href="<?php echo $websiteUrl ?>/fleet">
            <div class="services-cont">
                <div class="icon">
                    <i class="bi bi-check2-circle"></i>
                </div>

                <div class="content">
                    <h4 title="Fleets">Fleets</h4>  
                </div>
            </div></a>
            
            <a href="<?php echo $websiteUrl ?>">
            <div class="services-cont">
                <div class="icon">
                    <i class="bi bi-check2-circle"></i>
                </div>

                <div class="content">
                    <h4 title="Wine Tour">Wine Tour</h4>  
                </div>
            </div></a>

            <a href="<?php echo $websiteUrl ?>">
            <div class="services-cont">
                <div class="icon">
                    <i class="bi bi-check2-circle"></i>
                </div>

                <div class="content">
                    <h4 title="Package Deals">Package Deals</h4>  
                </div>
            </div></a>
            <a href="<?php echo $websiteUrl ?>/service-locations">
            <div class="services-cont">
                <div class="icon">
                    <i class="bi bi-check2-circle"></i>
                </div>

                <div class="content">
                    <h4 title="Service Locations">Service Locations</h4>  
                </div>
            </div></a>
        </div>

        <div class="btn-div" id="otherBookBtn">
            <script>
                generalButtons({
                    container: "otherBookBtn",
                    buttons: [{
                        id: "otherBookBtn",
                        text: "Book a ride now!",
                        icon: "bi-car-front-fill",
                        size: "btn-lg",
                        width: "btn-full",
                        link: "<?php echo $websiteUrl ?>/#"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>