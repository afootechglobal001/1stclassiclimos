<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Wine Tasting Tour Transportation Car Service</title>
    <meta name="keywords" content="<?php echo $appName ?> wine tasting tours, wine tour transportation, Napa Valley wine tours, Sonoma wine tours, Russian River Valley wine tours, private wine tasting transportation, luxury wine tour limousine, chauffeur wine tours, California wine country tours, winery transportation, Bay Area wine tours, private vineyard tours, luxury wine country transportation" />
    <meta name="description" content="Enjoy unforgettable wine tasting tours with <?php echo $appName ?>. Experience luxury chauffeur-driven transportation to Napa Valley, Sonoma, Russian River Valley, and California's finest wineries with comfortable private limousine and black car services." />
    <meta property="og:title" content="<?php echo $appName ?> | Wine Tasting Tour Transportation Car Service" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Explore California's beautiful wine country with <?php echo $appName ?>. Enjoy private wine tasting tours, luxury limousine transportation, and professional chauffeur services to Napa Valley, Sonoma, and Russian River Valley wineries." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/wine-tasting-tours/" />

    <meta name="twitter:title" content="<?php echo $appName ?> | Wine Tasting Tour Transportation Car Service" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Book private wine tasting tour transportation with <?php echo $appName ?>. Discover Napa Valley, Sonoma, and Russian River Valley with luxury vehicles and professional chauffeurs." />
</head>


<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Wine Tasting Tour',
                'highlight' => 'Transportation Car Service',
                'description' => 'The Wine Country is a region of Northern California in the United States known as a premium wine-growing region. Viticulture and wine-making have been practiced in the region since the mid-19th century. There are over 400 wineries in the area north of San Francisco, mostly located in the areas valleys, includings <strong>San Francisco to Napa, Sonoma, Livermore and Russian River Vallery</strong>',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Wine Tour',
                        'url' => $websiteUrl . '/wine-country-region-of-northern-california',
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
                                    onkeyup="_filtersPages(this.value, 'wineTourPageContent', 'main-page-wine-tour');" type="text"
                                    placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <?php _sideHotLinks($websiteUrl); ?>
                    </div>

                    <div class="left-div">
                        <div class="service-wrapper" id="wineTourPageContent">
                            <script>
                                _getPageList({
                                    pageCategory: "WINE_TOUR",
                                    pageContainer: "wineTourPageContent"
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