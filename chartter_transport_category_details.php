<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title><?php echo $pageTitle?> - <?php echo $appName?></title>
    <meta name="description" content="<?php echo $seoDescription?>" />
    <meta name="keywords" content="<?php echo $seoKeywords?>" />

    <meta property="og:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/airport-pix/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/airport-pix/<?php echo $pageSeoPix?>" />
    <meta name="twitter:description" content="<?php echo $seoDescription?>" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="nav-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/fleet">
                        <li title="Fleet">Fleet <i
                                class="bi-caret-right-fill"></i></li>
                    </a>
                    <li title="<?php echo $pageTitle?>"><?php echo $pageTitle?></li>
                </ul>
            </div>

            <div class="main-content-back-div">
                <div class="text-content-div">
                    <h1 id="pageTitle">Loading...</h1>
                    <p class="intro" id="seoDescription">Loading...</p>
                </div>
            </div>
        </div>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="left-div">
                        <div class="page-list-back-div fleet-list-back-div">
                            <div class="main-picture-back-div">
                                <div class="main-picture-div gallery-main-picture-div" id="pagePreviewPix">
                                    <img id="seoFlyer" src="<?php echo $websiteUrl ?>/all-images/images/defaultPage.jpg" alt="<?php echo $pageTitle?>" />
                                    <button class="gallery-nav-btn gallery-prev" id="galleryPrevBtn" onclick="_navigateGallery(-1);">
                                        <i class="bi bi-chevron-left"></i>
                                    </button>

                                    <button class="gallery-nav-btn gallery-next" id="galleryNextBtn" onclick="_navigateGallery(1);">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </div>

                                <div class="bottom-img-div">
                                    <div class="inner-img-container">
                                        <div class="inner-img-div" id="fetchPagePictures"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="main-pages-content-div" id="pageContent"></div>

                            <div class="btn-div" id="bookBtn">
                                <script>
                                    generalButtons({
                                        container: "bookBtn",
                                        buttons: [{
                                            id: "bookBtn",
                                            text: "Look Up Rate!",
                                            size: "btn-lg",
                                            icon: "bi bi-car-front-fill",
                                            link: "<?php echo $websiteUrl ?>/bookings"
                                        }]
                                    });
                                </script>
                            </div>

                            <div class="general-faq-div pages-faq-div" id="sitePagesFaqContent">
                                <div class="faq-title" id="faq1">
                                    <div class="inner-title-div" onclick="_collapse('faq1')">
                                        <h2>Why should you book your Airport Transportation Service through 1ST CLASSIC?</h2>

                                        <div class="expand-div" id="faq1num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq1answer" style="display: none;">
                                        <p>
                                            Because we are the premier and affordable, safe, and yet courteous private ground transportation provider around. Our chauffeurs are professionally trained and knowledgeable about the logistical terrain of all the cities and airports we serve, getting you to your destination in comfort and style
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq2">
                                    <div class="inner-title-div" onclick="_collapse('faq2')">
                                        <h2>How far in advance are you required to make a booking?</h2>

                                        <div class="expand-div" id="faq2num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq2answer" style="display: none;">
                                        <p>
                                            We require at least a minimum of 3 hours in advance for booking airport transportation both for arrival and pickup to the airport and transfers. And a minimum of  12 hours advance reservation for stretch limousines, charter buses, and mini-charter buses.
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq3">
                                    <div class="inner-title-div" onclick="_collapse('faq3')">
                                        <h2>Will I be able to cancel past the cancellation time window?</h2>

                                        <div class="expand-div" id="faq3num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq3answer" style="display: none;">
                                        <p>
                                           We strictly follow our cancellation policy. Cancellation can only be made in writing at least 72 hours before the pickup time by sending an email to cancellation@1stclassiclimos.com. A full fare, including a 20% chauffeur gratuity will be billed to the credit card on file for cancellation received less than 72 hours before the scheduled pickup time.  For a detailed cancellation policy, visit our  Terms & Conditions.
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq4">
                                    <div class="inner-title-div" onclick="_collapse('faq4')">
                                        <h2>What will happen if my flight arrives early or late?</h2>

                                        <div class="expand-div" id="faq4num">   
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq4answer" style="display: none;">
                                        <p>
                                            The team and drivers closely monitor the flight arrival times to make sure that we will provide the service to you no what the circumstances are.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RECENT BLOG</h3>

                            <div class="related-post-back-div" id="relatedPageBlogContent">
                                <script>
                                    _getPageList({
                                        pageCategory: "BLOG",
                                        limit: 4,
                                        pageContainer: "relatedPageBlogContent"
                                    })
                                </script>   
                            </div>
                        </div>

                        <?php _sideHotLinks($websiteUrl); ?>
                    </div>
                </div>
            </div>
            <script>
                _getEachPageDetails({
                    pageCategory: "SERVICE",
                    pageId: "<?php echo $pageId ?>"
                })
            </script>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Fleet Service Options</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Hourly <strong>Rate</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_1"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_1"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="fleet-wrapper">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_1">
                                <div class="cg-carousel__track js-carousel__track" id="relatedFleetDetailPageContainer">
                                    <script>
                                        _getPageList({
                                            pageCategory: "FLEET",
                                            pageContainer: "relatedFleetDetailPageContainer"
                                        })
                                    </script>
                                </div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                window['carousel_options_1'] = ({
                    items: 3,
                    margin: 30,
                    loop: true,
                    dots: true,
                    autoplayHoverPause: true,
                    smartSpeed: 650,
                    autoplay: true,
                    breakpoints: {
                        500: {
                            slidesPerView: 1,
                        },
                        1100: {
                            slidesPerView: 2,
                        },
                        1300: {
                            slidesPerView: 3,
                        }
                    }
                });
                _call_carousel(1);
            </script>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Other Transfer Service</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Chartter <strong>Services</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_2"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_2"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="service-wrapper">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_2">
                                <div class="cg-carousel__track js-carousel__track" id="relatedChartterPageContainer">
                                    <script>
                                        _getPageList({
                                            pageCategory: "SERVICE",
                                            pageContainer: "relatedChartterPageContainer"
                                        })
                                    </script>
                                </div>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                window['carousel_options_2'] = ({
                    items: 3,
                    margin: 30,
                    loop: true,
                    dots: true,
                    autoplayHoverPause: true,
                    smartSpeed: 650,
                    autoplay: true,
                    breakpoints: {
                        500: {
                            slidesPerView: 1,
                        },
                        1100: {
                            slidesPerView: 2,
                        },
                        1300: {
                            slidesPerView: 3,
                        }
                    }
                });
                _call_carousel(2);
            </script>
        </section>

        <?php _customerReviewSection('ambient-bg'); ?>

        <?php include 'footer.php' ?>
    </section>

</body>

</html>