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
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/fleet/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/fleet/<?php echo $pageSeoPix?>" />
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
                    <div class="count">
                        <div>
                            <i class="bi bi-people"></i> Passengers:
                            <span><strong id="passengers">Loading...</strong></span>
                        </div>|

                        <div>
                            <i class="bi bi-suitcase-lg"></i> Suitcases:
                            <span><strong id="luggage">Loading...</strong></span>
                        </div>|

                        <div>
                            <i class="bi bi-cash-stack"></i> Price:
                            <span><strong id="price">Loading...</strong></span>
                            Hourly Rate
                        </div>
                    </div>
                    <p class="intro" id="seoDescription">Loading...</p>
                </div>
            </div>
        </div>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div">
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
                                        <h2>Airport Transportation</h2>

                                        <div class="expand-div" id="faq1num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq1answer" style="display: none;">
                                        <p>
                                            The perfect choice of Vehicle for Airport Transfer. Comfortable for business and leisure travelers. Advance reservation required.
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq2">
                                    <div class="inner-title-div" onclick="_collapse('faq2')">
                                        <h2>Point To Point Transfer</h2>

                                        <div class="expand-div" id="faq2num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq2answer" style="display: none;">
                                        <p>
                                            We offer premium point-to-point transportation, known also as transfer service. Our point-to-point service is considered a pickup from one location and drop off at the destination. A stop in between will be considered an extra stop which will attract an additional charge (extra stop charge)
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq3">
                                    <div class="inner-title-div" onclick="_collapse('faq3')">
                                        <h2>Hourly Charter</h2>

                                        <div class="expand-div" id="faq3num">
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq3answer" style="display: none;">
                                        <p>
                                            Hourly charter car or limousine service with 1ST CLASSIC guaranteed a private and enjoyable experience. It takes away the hassle out of traffic and parking, so you can focus on all your to-do lists. You can be assured of our utmost professionalism should you book your next charter car or limo service with us
                                        </p>
                                    </div>
                                </div>

                                <div class="faq-title" id="faq4">
                                    <div class="inner-title-div" onclick="_collapse('faq4')">
                                        <h2>I Have More Questions...</h2>

                                        <div class="expand-div" id="faq4num">   
                                            &nbsp;<i class="bi-plus"></i>&nbsp;
                                        </div>
                                    </div>

                                    <div class="faq-answer-div" id="faq4answer" style="display: none;">
                                        <p>
                                            Sure, no problem, please do not hesitate to contact us at: <a href="tel:18006585679">1800658-5679</a> or by email at <a href="mailto:info@1stclassiclimos.com">info@1stclassiclimos.com</a>, and we will gladly assist you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>OUR SERVICES</h3>

                            <div class="related-post-back-div" id="relatedServicePageContent">
                                <script>
                                    _getPageList({
                                        pageCategory: "SERVICE",
                                        limit: 3,
                                        pageContainer: "relatedServicePageContent"
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
                    pageCategory: "FLEET",
                    pageId: "<?php echo $pageId ?>"
                })
            </script>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Fleet</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Related <strong>Fleet</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_2"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_2"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="fleet-wrapper">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_2">
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