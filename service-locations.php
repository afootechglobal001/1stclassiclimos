<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Service Locations - Chauffeur Services & Luxury Transportation</title>
    <meta name="keywords" content="<?php echo $appName ?> service locations, chauffeur service areas, luxury transportation locations, Bay Area chauffeur services, San Francisco limo service, San Francisco airport transportation, SFO airport transfers, Oakland airport transportation, OAK airport transfers, San Jose airport transportation, SJC airport transfers, Monterey airport limo, Napa Valley transportation, Sonoma wine tours, California chauffeur services, corporate transportation, private chauffeur services, airport limo service" />
    <meta name="description" content="Explore the service locations covered by <?php echo $appName ?> for professional chauffeur services, luxury transportation, airport transfers, corporate travel, and Napa Valley and Sonoma wine tours. Find transportation options for your destination." />

    <meta property="og:title" content="<?php echo $appName ?> | Service Locations - Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Discover chauffeur service locations served by <?php echo $appName ?>, including airport transfers, luxury transportation, corporate travel, and wine tour destinations." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/service-locations/" />

    <meta name="twitter:title" content="<?php echo $appName ?> | Service Locations - Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Find service locations for <?php echo $appName ?> chauffeur services, airport transportation, corporate travel, and luxury trips across California." />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Limousine And Black Car Transportation',
                'highlight' => 'Service Locations',
                'description' => 'We provide Limousine Service in San Francisco, Napa Valley, Sonoma Valley, Sacramento, the peninsula, Monterey Valley, San Joaquin Valley, and beyond.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Latest Insight & Article',
                        'url' => $websiteUrl . '/blog',
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
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" onkeyup="_filtersPagesWithPagination(this.value, 'siteServiceLocationContent');"
                                    type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <?php _sideHotLinks($websiteUrl); ?>
                    </div>

                    <div class="left-div">
                        <div class="affiliate-back-div service-locations-wrapper" id="siteServiceLocationContent"></div>
                        <div id="serviceLocationContentPaginationControls" class="pagination-div site-pg-div"></div>
                    </div>

                    <script>
                        _getPageList({
                            pageCategory: "SERVICE-LOCATION",
                            pageContainer: "siteServiceLocationContent",
                            paginationContainer: "serviceLocationContentPaginationControls",
                        })
                    </script>  
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>

</body>

</html>