<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Chauffeur Services & Luxury Transportation</title>
    <meta name="keywords" content="Chauffeur Services, Luxury Transportation Services, Limousine Service, Black Car Service, Airport Transportation, Airport Transfers, Corporate Transportation, Executive Car Service, Napa Valley Wine Tours, Sonoma Wine Tours, Bay Area Chauffeur Services, San Francisco Limo Service, Wedding Transportation, Special Event Transportation, Hourly Chauffeur Service, Flat Rate Transportation, Private Chauffeur, Charter Bus Service, Luxury Travel Services" />
    <meta name="description" content="<?php echo $appName ?> offers professional chauffeur services, luxury limousine transportation, airport transfers, corporate travel, Napa Valley and Sonoma wine tours, and reliable transportation for weddings and special events." />

    <meta property="og:title" content="<?php echo $appName ?> | Chauffeur Services & Luxury Transportation" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Explore <?php echo $appName ?> chauffeur services, including luxury transportation, airport transfers, corporate travel, wine tours, and special event transportation." />

    <meta name="twitter:title" content="<?php echo $appName ?> | Chauffeur Services & Luxury Transportation" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Book professional chauffeur services with <?php echo $appName ?> for airport transfers, corporate transportation, wine tours, and luxury travel." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Airport Transportation Limousine Car Service',
                'description' => '<strong>' . $appName . '</strong> Airport Transportation Limousine Service, our easy to use reservation page on our website is quick and easy when you need to plan your ride to the airport or coming back home from a trip. Our dispatchers are also always on call to help with any last minute plans or time-sensitive car rides that are needed.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Services',
                        'url' => $websiteUrl . '/airport-transportation-limousine-car-service',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-bl ambient-bg">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Our Services</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>Luxury Services Designed Around Your Journey</h2>
                            <p>Discover our luxury vehicle rentals and professional chauffeur services, tailored to deliver comfort, convenience, and a first-class travel experience.</p>
                        </div>
                    </div>

                    <div class="service-wrapper" id="servicePageContent">
                        <script>
                            _getPageList({
                                pageCategory: "SERVICE",
                                pageContainer: "servicePageContent"
                            })
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <?php _whyChooseUsSection('net-bg-tl', $websiteUrl, $appName); ?>

        <?php _howItWorksSection('net-bg-br', 'ambient-bg'); ?>

        <?php _customerReviewSection('net-bg-tr'); ?>

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