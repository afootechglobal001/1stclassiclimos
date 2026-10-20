<?php include 'config/constants.php'; ?>
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
                        <button class="btn variant-btn" title="Make Reservation Now"><i class="bi-car-front-fill"></i> EXplore Our Fleets</button>
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
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="pickupDate_container">
                                <script>
                                    textField({
                                        id: 'pickupDate',
                                        title: 'Pickup Date',
                                        type: 'date',
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="pickupTime_container">
                                <script>
                                    textField({
                                        id: 'pickupTime',
                                        title: 'Pickup Time',
                                        type: 'time',
                                    });
                                </script>
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

                    <div class="fleet-wrapper">
                        <div class="fleet-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/fleets/executive-sedan.jpg" alt="Executive luxury sedan">
                                <span class="category">Luxury Sedan</span>
                                <h3>Executive Sedan</h3>
                            </div>

                            <div class="fleet-content">
                                <div class="fleet-features">
                                    <div class="feature">
                                        <i class="bi bi-people"></i>
                                        <span>4 Passengers</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-sliders"></i>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-luggage"></i>
                                        <span>2 Suitcase</span>
                                    </div>
                                </div>

                                <div class="price">$84.99  <span> / Hourly Rate</span></div>
                                <a href="#">
                                    <button class="btn" title="View Vehicle"><i class="bi bi-eye"></i> View Vehicle</button>
                                </a>
                            </div>
                        </div>

                        <div class="fleet-div" data-aos="fade-up" data-aos-duration="1300">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/fleets/executive-suv.jpg" alt="Executive class luxury SUV">
                                <span class="category">Luxury SUV</span>
                                <h3>Executive Class SUV</h3>
                            </div>

                            <div class="fleet-content">
                                <div class="fleet-features">
                                    <div class="feature">
                                        <i class="bi bi-people"></i>
                                        <span>6 Passengers</span>
                                    </div>
                                    <div class="feature">   
                                        <i class="bi bi-sliders"></i>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-luggage"></i>
                                        <span>6 Suitcase</span>
                                    </div>
                                </div>

                                <div class="price">$94.99 <span> / Hourly Rate</span></div>
                                <a href="#">
                                    <button class="btn" title="View Vehicle"><i class="bi bi-eye"></i> View Vehicle</button>
                                </a>
                            </div>
                        </div>

                        <div class="fleet-div" data-aos="fade-up" data-aos-duration="1400">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl; ?>/uploaded_files/fleets/executive-class-sprinter-van.jpg" alt="Executive class luxury Sprinter van">
                                <span class="category">Luxury Van</span>
                                <h3>Executive Class Sprinter Van</h3>
                            </div>

                            <div class="fleet-content">
                                <div class="fleet-features">
                                    <div class="feature">
                                        <i class="bi bi-people"></i>
                                        <span>14 Passengers</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-sliders"></i>
                                        <span>Automatic</span>
                                    </div>
                                    <div class="feature">
                                        <i class="bi bi-luggage"></i>
                                        <span>14 Suitcase</span>
                                    </div>
                                </div>

                                <div class="price">$159.99  <span> / Hourly Rate</span></div>
                                <a href="#">
                                    <button class="btn" title="View Vehicle"><i class="bi bi-eye"></i> View Vehicle</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-btn-div animated fadeIn">
                        <a href="<?php echo $websiteUrl; ?>/#">
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

        <section class="body-div net-bg-bl">
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

        <section class="body-div ambient-bg how-it-works-body-div net-bg-tl">
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

                            <div class="faq-toggle-back">
                                <div class="faq-toggle" id="faq1">
                                    <div class="title-text" onclick="_collapse('faq1')">
                                        <div class="quest-text-div">
                                            <div class="icon-div"><i class="bi-question"></i></div>
                                            <h3>How do I make a reservation?</h3>
                                        </div>
                                        <div class="expand-div" id="faq1num">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                    </div>
                                    <div class="answer-div" id="faq1answer" style="display: none;">
                                        <p>Reservation can be made by calling <strong><a href="tel:1-800-658-5679">(1-800) 658-5679</a></strong> or by clicking on <strong>BOOK A RIDE</strong> for an online reservation.</p>
                                    </div>
                                </div>

                                <div class="faq-toggle" id="faq2">
                                    <div class="title-text" onclick="_collapse('faq2')">
                                        <div class="quest-text-div">
                                            <div class="icon-div"><i class="bi-question"></i></div>
                                            <h3>How far in advance are you required to make a booking?</h3>
                                        </div>
                                        <div class="expand-div" id="faq2num">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                    </div>
                                    <div class="answer-div" id="faq2answer" style="display: none;">
                                        <p>We require at least a minimum of 3 hours in advance for booking airport transportation both for arrival and pickup to the airport and transfers. And a minimum of  12 hours advance reservation for stretch limousines, charter buses, and mini-charter buses.</p>
                                    </div>
                                </div>

                                <div class="faq-toggle" id="faq3">
                                    <div class="title-text" onclick="_collapse('faq3')">
                                        <div class="quest-text-div">
                                            <div class="icon-div"><i class="bi-question"></i></div>
                                            <h3>Can I/We open a corporate or personal account?</h3>
                                        </div>
                                        <div class="expand-div" id="faq3num">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                    </div>
                                    <div class="answer-div" id="faq3answer" style="display: none;">
                                        <p>We offer both corporate and personal accounts. A credit card authorization form will be emailed, and  ID validation and other documentation must be returned along with the signed and completed CC authorization form.  Major corporate accounts may qualify for billing terms, subject to review and approval. Click Account Sign-up to open one</p>
                                    </div>
                                </div>

                                <div class="faq-toggle" id="faq4">
                                    <div class="title-text" onclick="_collapse('faq4')">
                                        <div class="quest-text-div">
                                            <div class="icon-div"><i class="bi-question"></i></div>
                                            <h3>When do we send the driver's info?</h3>
                                        </div>
                                        <div class="expand-div" id="faq4num">
                                            <i class="bi bi-plus"></i>
                                        </div>
                                    </div>
                                    <div class="answer-div" id="faq4answer" style="display: none;">
                                        <p>The driver's information will be sent out together with the 6-hour and 3-hour notifications via email.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-div">
                                <a href="<?php echo $websiteUrl; ?>/#">
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

        <section class="body-div ambient-bg net-bg-tr">
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

                    <div class="blog-back-div">
                        <div class="blog-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="blog-inner-div">
                                <div class="title">General</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl; ?>/uploaded_files/blog/blog-1.webp" alt="Enjoy a Stress-Free Airport Transfer">
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> 22 Aug, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 1,200 VIEWS
                                    </div>

                                    <h3>Enjoy a Stress-Free Airport Transfer</h3>
                                    <p>
                                        Discover reliable airport transportation with professional
                                        chauffeurs, timely pickups, and comfortable rides to your
                                        destination...
                                    </p>

                                    <div class="btn-div">
                                        <button class="btn" title="Book Now">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-up" data-aos-duration="1300">
                            <div class="blog-inner-div">
                                <div class="title">General</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl; ?>/uploaded_files/blog/blog-2.jpeg" alt="24/7 Airport Pickup & Drop-off – Premium Chauffeured Service">
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> 22 Aug, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 1,200 VIEWS
                                    </div>

                                    <h3>24/7 Airport Pickup & Drop-off – Premium Chauffeured Service</h3>
                                    <p>
                                        Discover reliable airport transportation with professional
                                        chauffeurs, timely pickups, and comfortable rides to your
                                        destination...
                                    </p>

                                    <div class="btn-div">
                                        <button class="btn" title="Book Now">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-up" data-aos-duration="1400">
                            <div class="blog-inner-div">
                                <div class="title">General</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl; ?>/uploaded_files/blog/blog-3.jpeg" alt="Monterey Airport Limo and Black Car Service">
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi-calendar3"></i> 22 Aug, 2026
                                        <span>|</span>
                                        <i class="bi-eye-fill"></i> 1,200 VIEWS
                                    </div>

                                    <h3>Monterey Airport Limo and Black Car Service</h3>
                                    <p>
                                        Discover reliable airport transportation with professional
                                        chauffeurs, timely pickups, and comfortable rides to your
                                        destination...
                                    </p>

                                    <div class="btn-div">
                                        <button class="btn" title="Book Now">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-btn-div animated fadeIn">
                        <a href="<?php echo $websiteUrl; ?>/#">
                        <button class="btn" title="Read More Blogs">
                            Read More Blogs
                            <i class="bi bi-arrow-right-circle"></i>
                        </button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div app-download-body-div">
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