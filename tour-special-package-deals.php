<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Tour Packages Special Deals And Offers</title>
    <meta name="keywords" content="<?php echo $appName ?> tour packages, luxury tours California, private guided tours, chauffeur-driven tours, Napa Valley wine tours, Sonoma wine tours, San Francisco sightseeing tours, Monterey tours, California vacation packages, private sightseeing transportation, luxury wine tours, Bay Area tour packages, customized private tours, luxury chauffeur services" />
    <meta name="description" content="Explore exciting tour packages and special offers from <?php echo $appName ?>. Enjoy private chauffeur-driven tours, Napa Valley wine tours, Sonoma wine tours, San Francisco sightseeing, and personalized California travel experiences." />
    <meta property="og:title" content="<?php echo $appName ?> | Tour Packages Special Deals And Offers" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Discover exclusive tour packages and special deals with <?php echo $appName ?>. Explore California's beautiful destinations, wine regions, and attractions with professional chauffeurs and luxury transportation." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/tour-packages/" />

    <meta name="twitter:title" content="<?php echo $appName ?> | Tour Packages Special Deals And Offers" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Explore special tour deals from <?php echo $appName ?>, including private sightseeing tours, Napa Valley wine tours, Sonoma excursions, and personalized chauffeur-driven travel experiences." />
</head>


<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Tour Package',
                'highlight' => '& Special Deals',
                'description' => 'We offer a wide variety of daily flat rate tour Packages & Special deals that will suit any special events and occasion you are planning. With the perfect transportation, you are welcome to choose from one of our featured special packaged deals from Wine country tasting tour to San Francisco city tour and more.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Tour Packages',
                        'url' => $websiteUrl . '/tour-special-package-deals',
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
                                    onkeyup="_filtersPages(this.value, 'tourPackagesPageContainer', 'tour-packages-div');" type="text"
                                    placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <?php _sideHotLinks($websiteUrl); ?>
                    </div>

                    <div class="left-div">
                        <div class="tour-packages-back-div" id="tourPackagesPageContainer">
                            <script>
                                _getPageList({
                                    pageCategory: "TOUR_PACKAGES",
                                    pageContainer: "tourPackagesPageContainer"
                                })
                            </script> 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php _customerReviewSection('ambient-bg'); ?>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>