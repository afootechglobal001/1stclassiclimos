<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Frequently Asked Questions - Chauffeur Services</title>
    <meta name="keywords" content="<?php echo $appName ?> FAQ, chauffeur services FAQ, luxury transportation questions, limousine service FAQ, airport transportation FAQ, airport transfer questions, corporate transportation FAQ, private chauffeur services, Napa Valley wine tours, Sonoma wine tours, Bay Area limo service, executive car service, hourly chauffeur service, flat rate transportation, wedding transportation, special event transportation, luxury travel support" />

    <meta name="description" content="Find answers to frequently asked questions about <?php echo $appName ?> chauffeur services. Learn about airport transfers, luxury transportation, booking procedures, vehicle options, corporate travel, wine tours, and special event transportation." />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $appName ?> | Frequently Asked Questions - Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Get answers to common questions about <?php echo $appName ?> luxury transportation, chauffeur bookings, airport transfers, corporate travel, and wine tours." />

    <!-- Twitter -->
    <meta name="twitter:title" content="<?php echo $appName ?> | Frequently Asked Questions - Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Browse our FAQs to learn about <?php echo $appName ?> chauffeur services, reservations, airport transportation, luxury vehicles, and travel options." />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Frequently Asked',
                'highlight' => 'Questions',
                'description' => 'Find answers to common questions about <strong>' . $appName . '</strong> chauffeur services. Learn about our booking process, scheduling, pricing, airport transfers, luxury transportation, corporate travel, wine tours, and special event transportation.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Frequently Asked Questions',
                        'url' => $websiteUrl . '/faq',
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
                                <input class="text_field"
                                    onkeyup="_filtersPages(this.value, 'faqPageContent', 'faq-title');" type="text"
                                    placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <script>
                                    _fetchCategoryList('FAQ', 'faqPageContent');
                                </script>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="general-faq-div" id="faqPageContent">
                            <script>
                                _getFaqList({
                                    pageContainer: "faqPageContent"
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>