<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Worldwide Chauffeured Transportation</title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta property="og:title" content="<?php echo $appName ?> | Worldwide Chauffeured Transportation" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>

    <meta name="twitter:title" content="<?php echo $appName ?> | Worldwide Chauffeured Transportation" />
    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta name="twitter:description" content="Premier Airport Transportation Limousine Car service provider in San Francisco for Corporate Transportation, Wine Tour to Napa, Sonoma, Livermore Valley"/>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="slide-section">
        <div class="slide-div">
            <div class="content-back-div">
                <div class="text-content-div animated fadeIn">
                    <div class="top-content">
                        <i class="bi-car-front-fill"></i> <h3>Premium Chauffeured & Airpot Transportation</h3>
                    </div>
                    <h1 id="pageTitle">1st Classic Chauffeur Services.</h1>
                    <p><strong><?php echo $appName ?></strong> is a premier chauffeured transportation provider serving the San Francisco Bay Area and beyond. We specialize in professional airport transportation, corporate travel, private car service.</p>

                    <div class="btn-div">
                        <button class="btn" title="Make Reservation Now"><i class="bi bi-calendar2-check-fill"></i> Make Reservation Now</button>
                        <button class="btn variant-btn" title="Make Reservation Now"><i class="bi-car-front-fill"></i> Explore Our Fleets</button>
                    </div>

                    <div class="features-wrapper">
                        <div class="feature-div">
                            <div class="icon-div">
                                <i class="bi-car-front-fill"></i> 
                            </div>

                            <div class="content">
                                <h3>Premium Fleet</h3>
                                <p>The finest cars. Always.</p>
                            </div>
                        </div>

                        <div class="feature-div">
                            <div class="icon-div">
                                <i class="bi bi-headset"></i>
                            </div>
                            
                            <div class="content">
                                <h3>24/7 Support</h3>
                                <p>We're here, always.</p>
                            </div>
                        </div>

                        <div class="feature-div">
                            <div class="icon-div">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            
                            <div class="content">
                                <h3>Trusted & Secure</h3>
                                <p>Your journey, our priority.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // List of sentences
            var _CONTENT = ["1st Classic Worldwide Chauffeur Services.",
                "Airport Limo, Black Car & Bus Services.",
                "Ride in style, comfort and class!",
                "Corporate Travel, Wine Tours & More!",
            ];
            // Current sentence being processed
            var _PART = 0;
            // Character number of the current sentence being processed 
            var _PART_INDEX = 0;
            // Element that holds the text
            var _ELEMENT = document.querySelector("#pageTitle");
            // Implements typing effect
            function Type() {
                var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
                _ELEMENT.innerHTML = text;
                _PART_INDEX++;

                // If full sentence has been displayed then start to delete the sentence after some time
                if (text === _CONTENT[_PART]) {
                    clearInterval(_INTERVAL_VAL);
                    setTimeout(function() {
                        _INTERVAL_VAL = setInterval(Delete, 2);
                    }, 5000);
                }
            }
            // Implements deleting effect
            function Delete() {
                var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
                _ELEMENT.innerHTML = text;
                _PART_INDEX--;

                // If sentence has been deleted then start to display the next sentence
                if (text === '') {
                    clearInterval(_INTERVAL_VAL);

                    // If last sentence then display the first one, else move to the next
                    if (_PART == (_CONTENT.length - 1))
                        _PART = 0;
                    else
                        _PART++;
                    _PART_INDEX = 0;

                    // Start to display the next sentence after some time
                    setTimeout(function() {
                        _INTERVAL_VAL = setInterval(Type, 50);
                    }, 200);
                }
            }
            // Start the typing effect on load
            _INTERVAL_VAL = setInterval(Type, 50);
        </script>
    </div>

    <section class="index-content-div">
        <section class="body-div form-body-div">
            <div class="body-div-in form-body-div-in">
                <div class="slide-book-wrapper animated fadeInUp">
                    <div class="slide-book-header">
                        <div class="slide-book-heading">
                            <span>BOOK YOUR JOURNEY</span>
                            <h3>Where would you like to go?</h3>
                        </div>

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
                    </div>

                    <div class="slide-book-form">
                        <div class="slide-book-fields" id="slideBookFields">
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

                            <div class="text_field_container" id="duration_container" style="display: none;">
                                <script>
                                    selectField({
                                        id: 'duration',
                                        title: 'Duration (In Hours)',
                                        icon: '<i class="bi bi-hourglass-split"></i>',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>
                        </div>

                        <input type="hidden" name="bookingType"
                            id="slideBookingType" value="distance">

                        <button title="Book Your Ride" class="btn">
                            <i class="bi-car-front-fill"></i>
                            <span>Book Now!</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div ambient-bg fleets-body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title" data-aos="fade-in" data-aos-duration="1000">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Our Fleet</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>Exceptional Cars For Exceptional Journeys</h2>
                            <p>Explore a carefully curated collection of luxury vehicles, selected for refined comfort, distinctive design, and effortless performance on every journey.</p>
                        </div>
                    </div>

                    <div class="fleet-wrapper" id="indexFleetPageContent">
                        <script>
                            _getPageList({
                                pageCategory: "FLEET",
                                limit: 3,
                                pageContainer: "indexFleetPageContent"
                            })
                        </script> 
                    </div>

                    <div class="bottom-btn-div animated fadeIn">
                        <a href="<?php echo $websiteUrl; ?>/fleet">
                        <button class="btn" title="Explore More Fleet">
                            Explore More Fleet
                            <i class="bi bi-car-front-fill"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="about-wrapper"  data-aos="fade-in" data-aos-duration="1200">
                        <div class="content-div">
                            <div class="general-title other-title" data-aos="fade-in" data-aos-duration="1000">
                                <div class="top-title">
                                    <i class="bi-car-front-fill"></i>
                                    <span><strong>About <?php echo $appName ?></strong></span>
                                </div>

                                <div class="main-title">
                                    <h2>Know Us <strong>A Little More</strong></h2>
                                </div>
                            </div>

                            <div class="text-div">
                                <p>
                                   <strong><?php echo $appName ?></strong>, is a premier chauffeured transportation provider serving the San Francisco Bay Area and beyond. We specialize in professional airport transportation, corporate travel, private car service, and group transportation. Built around reliability, safety, comfort, and exceptional customer care, we provide seamless transportation solutions for residential, business, and leisure travelers.
                                </p>

                                <div class="about-listing">
                                    <div class="list-div">
                                        <div class="icon">
                                            <i class="bi bi-car-front-fill"></i>
                                        </div>

                                        <div class="content">
                                            <h3>Exceptional Fleet</h3>
                                            <p>Curated luxury vehicles crafted for memorable and effortless journeys.</p>
                                        </div>
                                    </div>

                                    <div class="list-div">
                                        <div class="icon">
                                            <i class="bi bi-gem"></i>
                                        </div>

                                        <div class="content">
                                            <h3>Refined Experiences</h3>
                                            <p>Personalized service and premium comfort designed for every journey.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-div">
                                    <button class="btn" title="Learn More About Us">
                                        Learn More About Us
                                        <i class="bi bi-arrow-right-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="image-div" data-aos="fade-up" data-aos-duration="1000">
                            <img src="<?php echo $websiteUrl; ?>/all-images/body-pix/about-bg.png" alt="About <?php echo $appName ?>">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div service-body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title service-title" data-aos="fade-in" data-aos-duration="1000">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Our Services</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>Premium Services for Every Journey</h2>
                            <p>Discover our luxury vehicle rentals and professional chauffeur services, tailored to deliver comfort, convenience, and a first-class travel experience.</p>
                        </div>
                    </div>

                    <div class="service-wrapper">
                        <div class="service-div" data-aos="fade-up" data-aos-duration="1000">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/services/service-2.jpg" alt="Service">
                            </div>

                            <div class="icon-div">
                                <img 
                                    src="<?php echo $websiteUrl; ?>/all-images/images/icon.png"
                                    alt="Airport Transportation Icon" 
                                />
                            </div>

                            <div class="content-div">
                                <h3>Airport Transportation</h3>
                                <p>Book an Airport Transportation, Car, Sedan, SUV, and Van services for Airport Transfer To and From San Francisco (SFO),...</p>
                                <button class="btn" title="Learn More About Airport Transportation">
                                    Read More
                                    <i class="bi bi-arrow-right-circle"></i>
                                </button>
                            </div>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/services/service-1.jpg" alt="Service">
                            </div>

                            <div class="icon-div">
                                <img 
                                    src="<?php echo $websiteUrl; ?>/all-images/images/icon.png"
                                    alt="Airport Transportation Icon" 
                                />
                            </div>

                            <div class="content-div">
                                <h3>Corporate Transportation Black Car Services</h3>
                                <p>Book a Corporate and Private Jet Aviation FBO Black Car Transportation Service for Corporate Business travelers and exec...</p>
                                <button class="btn" title="Learn More About Corporate Transportation Black Car Services">
                                    Read More
                                    <i class="bi bi-arrow-right-circle"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="service-div" data-aos="fade-up" data-aos-duration="1300">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/services/service-3.jpg" alt="Service">
                            </div>

                            <div class="icon-div">
                                <img 
                                    src="<?php echo $websiteUrl; ?>/all-images/images/icon.png"
                                    alt="Airport Transportation Icon" 
                                />
                            </div>

                            <div class="content-div">
                                <h3>Point to Point Transportation Limousine Car Service</h3>
                                <p>Book a Point to Point Transportation Limousine Car Service for your business...</p>

                                <button class="btn" title="Learn More About Point to Point Transportation Limousine Car Service">
                                    Read More
                                    <i class="bi bi-arrow-right-circle"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-btn-div animated fadeIn">
                        <a href="<?php echo $websiteUrl; ?>/#">
                        <button class="btn" title=" Discover All Services">
                            Discover All Services
                            <i class="bi bi-gem"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

        <?php _whyChooseUsSection('net-bg-bl', $websiteUrl, $appName); ?>

        <?php _howItWorksSection('net-bg-tl', 'ambient-bg'); ?>

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="faq-wrapper" data-aos="fade-in" data-aos-duration="1200">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/body-pix/faq.png"
                                alt="Frequently Asked Questions" />
                        </div>

                        <div class="faq-content-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="general-title other-title" data-aos="fade-in" data-aos-duration="1000">
                                <div class="top-title">
                                    <i class="bi-car-front-fill"></i>
                                    <span><strong>Frequently Asked Questions</strong></span>
                                </div>

                                <div class="main-title">
                                    <h2>Answers Before You Drive</strong></h2>
                                </div>
                            </div>

                            <div class="faq-toggle-back" id="indexFaqPageContent">
                                <script>
                                    _getFaqList({
                                        limit: 4,
                                        pageContainer: "indexFaqPageContent"
                                    })
                                </script>
                            </div>

                            <div class="btn-div">
                                <a href="<?php echo $websiteUrl; ?>/faq">
                                <button class="btn" title="Read More FAQ">
                                    Read More FAQ
                                    <i class="bi bi-arrow-right-circle"></i>
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php _customerReviewSection('net-bg-tr', 'ambient-bg'); ?>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Our Blogs</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>News, Blogs & Articles</h2>
                            <p>Explore our latest travel stories, vehicle insights, and destination guides to find inspiration for your next Revamo experience.</p>
                        </div>
                    </div>

                    <div class="blog-back-div" id="indexBlogPageContainer">
                        <script>
                            _getPageList({
                                pageCategory: "BLOG",
                                pageContainer: "indexBlogPageContainer"
                            })
                        </script>
                    </div>

                    <div class="bottom-btn-div animated fadeIn">
                        <a href="<?php echo $websiteUrl; ?>/blog">
                        <button class="btn" title="Read More Blogs">
                            Read More Blogs
                            <i class="bi bi-arrow-right-circle"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
    <!-- Load Google Maps API with Places & call initMap -->
    <script>
        const timestamp = new Date().getTime();
        document.write(`
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNYG0x6xtJOeYx6PTmRjjqBVI9FPgGNSw&libraries=places&callback=initMap&t=${timestamp}">
            <\/script>
        `);
    </script>
</body>

</html>