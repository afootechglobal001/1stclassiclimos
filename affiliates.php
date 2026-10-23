<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Affiliate Program - Chauffeur Services</title>
    <meta name="keywords" content="<?php echo $appName ?> affiliate program, chauffeur service affiliate, limousine service affiliate program, luxury transportation partners, transportation referral program, affiliate partnerships, travel affiliate program, airport transportation referrals, corporate travel partners, luxury car service, private chauffeur services, Bay Area transportation, Napa Valley wine tours, Sonoma wine tours" />

    <meta name="description" content="Partner with <?php echo $appName ?> through our affiliate program. Discover opportunities to refer customers, promote professional chauffeur services, and connect travelers with luxury transportation, airport transfers, corporate travel, and special event services." />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $appName ?> | Affiliate Program - Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Explore affiliate partnership opportunities with <?php echo $appName ?> and help connect customers with luxury chauffeur services, airport transfers, corporate transportation, and premium travel experiences." />

    <!-- Twitter -->
    <meta name="twitter:title" content="<?php echo $appName ?> | Affiliate Program - Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Discover affiliate opportunities with <?php echo $appName ?> and promote professional chauffeur services, luxury transportation, and convenient airport transfers." />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Our Affiliate',
                'highlight' => 'Networks',
                'description' => '<strong>' . $appName . '</strong> Affiliate Network helps us go from city, state, nation, and worldwide. Become part of our fast-growing limousine transportation network in the world.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Affiliate Networks',
                        'url' => $websiteUrl . '/affiliates',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div ambient-bg2">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>Explore</h3>

                            <div class="related-services-cont" id="relatedServicesCont">
                                <a href="<?php echo $websiteUrl ?>">
                                <div class="services-cont">
                                    <div class="icon">
                                        <i class="bi bi-check2-circle"></i>
                                    </div>

                                    <div class="content">
                                        <h4 title="Our Services">Our Services</h4>  
                                    </div>
                                </div></a>

                                <a href="<?php echo $websiteUrl ?>">
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
                    </div>

                    <div class="left-div">
                        <div class="affiliate-back-div">                         
                            <a href="https://4-seasonslimos.com/" title="4-Seasons Limousine Service" target="_blank">
                            <div class="affiliate-div">
                                <h3>4-Seasons Limousine Service</h3>
                                <p>Walnut Creek, California, USA | info@4-seasonslimos.com</p>            
                            </div></a>

                            <a href="https://blackcareverywhere.com/" title="Black Car Everywhere" target="_blank">
                            <div class="affiliate-div">
                                <h3>Black Car Everywhere</h3>
                                <p>5801 N Northwest Hwy, Chicago, IL 60631 | info@blackcareverywhere.com </p>           
                            </div></a>

                            <a href="https://cityonelimo.com/" title="CityOne Limo Service" target="_blank">
                            <div class="affiliate-div">
                                <h3>CityOne Limo Service</h3>
                                <p>101 California St Suite 2710 San Francisco, CA 94111 | info@cityonelimo.com</p>             
                            </div></a>

                            <a href="https://www.psiclimoservice.com/" title="PSIC Limo Service" target="_blank">
                            <div class="affiliate-div">
                                <h3>PSIC Limo Service</h3>
                                <p>4336 Dulles Dr Fort Worth TX 76155 | info@psiclimoservice.com </p>           
                            </div></a>

                            <p><strong><?php echo $appName?></strong> Worldwide Chauffeured Transportation Service is proud to have an affiliate network in the ground transportation industry. We are very selective in choosing companies to represent us because of how diligently we have worked to earn our reputation. Affiliates are selected based on their ability to perform so our clients can rest assured that although we may not physically be present to transport them, our grand service will surely be passed on through our affiliates.</p>
                            <p>Click on the button below to <strong>call/mail</strong> us to join our affiliate networks.</p>

                            <div class="btn-div" id="affiliateBtn">
                                <script>
                                    generalButtons({
                                        container: "affiliateBtn",
                                        buttons: [{
                                            id: "affiliateBtn",
                                            text: "Join Our Affiliates!",
                                            size: "btn-lg",
                                            icon: "bi bi-people-fill",
                                            link: "<?php echo $websiteUrl ?>/contact-us"
                                        }]
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>