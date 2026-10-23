<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Our Fleet - Luxury Vehicles & Chauffeur Services</title>
    <meta name="keywords" content="<?php echo $appName ?> fleet, luxury vehicle fleet, chauffeur service vehicles, luxury car rental, limousine fleet, executive sedans, luxury SUVs, passenger vans, Mercedes Sprinter, airport transportation vehicles, corporate travel vehicles, private chauffeur cars, wedding transportation, wine tour vehicles, Bay Area luxury transportation, premium chauffeur services" />
    <meta name="description" content="Explore the luxury vehicle fleet at <?php echo $appName ?>, featuring premium sedans, luxury SUVs, and spacious passenger vehicles for airport transfers, corporate travel, wine tours, weddings, and special events." />

    <meta property="og:title" content="<?php echo $appName ?> | Our Fleet - Luxury Vehicles & Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Discover the fleet at <?php echo $appName ?>, with luxury sedans, SUVs, and spacious vehicles for airport transfers, business travel, wine tours, and special occasions." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/fleet/" />

    <meta name="twitter:title" content="<?php echo $appName ?> | Our Fleet - Luxury Vehicles & Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="View the <?php echo $appName ?> fleet of luxury vehicles for airport transfers, corporate transportation, wine tours, and special events." />
</head>


<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Luxury Equipped',
                'highlight' => 'Fleets',
                'description' => 'Our whole fleets are of latest models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, etc. We provide airport transfers, corporate transportation, wine tours, weddings, and other and special events.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Luxury Equipped Fleets',
                        'url' => $websiteUrl . '/fleet',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" id="searchContent"
                                    onkeyup="_filtersPages(this.value, 'fleetPageContent', 'fleet-div');" type="text"
                                    placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <?php _sideHotLinks($websiteUrl); ?>
                    </div>

                    <div class="left-div">
                        <div class="fleet-wrapper page-fleet-wrapper" id="fleetPageContent">
                            <script>
                                _getPageList({
                                    pageCategory: "FLEET",
                                    pageContainer: "fleetPageContent"
                                })
                            </script> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php _howItWorksSection('ambient-bg'); ?>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>