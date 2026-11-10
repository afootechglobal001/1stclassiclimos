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
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/package-deals/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/package-deals/<?php echo $pageSeoPix?>" />
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
                    <a href="<?php echo $websiteUrl ?>/tour-special-package-deals">
                        <li title="Tour Packages Deals">Tour Packages Deals <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <li title="<?php echo $pageTitle?>"><?php echo $pageTitle?></li>
                </ul>
            </div>

            <div class="main-content-back-div">
                <div class="text-content-div">
                    <h1 id="pageTitle">Loading...</h1>
                    <div class="count">
                        <div>
                            <i class="bi bi-people"></i> From:
                            <span><strong id="price">Loading...</strong></span>
                        </div>|

                        <div>
                            <i class="bi bi-suitcase-lg"></i> For:
                            <span><strong id="hourlyRate">Loading...</strong></span>
                        </div>|

                        <div>
                            <i class="bi bi-suitcase-lg"></i> Promo Code:
                            <span><strong id="promoCode">Loading...</strong></span>
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
                            <div class="package-deals-details">
                               <h5>Book Now and Pay Later</h5> 
                               <p>The lowest Price Guaranteed!</p>
                               <p>Secure your spot while staying flexible</p>
                               <p class="secondary-color"><strong>Free Cancellation</strong></p>
                               <p>Up to 24 hours in advance</p>
                            </div>

                            <div class="btn-div" id="bookBtn">
                                <script>
                                    generalButtons({
                                        container: "bookBtn",
                                        buttons: [{
                                            id: "bookBtn",
                                            text: "Make A Reservation Now!",
                                            size: "btn-lg",
                                            icon: "bi bi-car-front-fill",
                                            link: "<?php echo $websiteUrl ?>/bookings"
                                        }]
                                    });
                                </script>
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
                    pageCategory: "PACKAGE_DEAL",
                    pageId: "<?php echo $pageId ?>"
                })
            </script>
        </section>

        <section class="body-div ambient-bg net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Fleet Options For This Tour</strong></span>
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
                    <div class="general-title">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Featured Interest Options</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>Place Of <strong>Interest</strong></h2>
                        </div>
                    </div>

                    <div class="airport-wrapper" id="placeOfInterestContent">
                        <script>
                            _getPlaceOfInterestList({
                                pageContainer: "placeOfInterestContent",
                                pageId: "<?php echo $pageId ?>"
                            })
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Daily Flat Rate</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Related <strong>Package Deals</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_2"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_2"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="tour-packages-back-div">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_2">
                                <div class="cg-carousel__track js-carousel__track" id="relatedPackgaeDealsDetailPageContainer">
                                    <script>
                                        _getPageList({
                                            pageCategory: "PACKAGE_DEAL",
                                            pageContainer: "relatedPackgaeDealsDetailPageContainer"
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