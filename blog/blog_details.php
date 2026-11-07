<?php include '../../config/constants.php'; ?>
<?php include '../../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php'?>
    <title><?php echo $pageTitle?> - <?php echo $appName?></title>
    <meta name="description" content="<?php echo $seoDescription?>" />
    <meta name="keywords" content="<?php echo $seoKeywords?>" />

    <meta property="og:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/blog/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/blog/<?php echo $pageSeoPix?>" />
    <meta name="twitter:description" content="<?php echo $seoDescription?>" />
</head>

<body>
    <?php include '../../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="nav-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/blog">
                        <li title="Latest Insight & Article">Latest Insight & Article <i
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
                            <i class="bi-person"></i> By
                            <span><strong id="createdByName">Loading...</strong></span>
                        </div> |
                       
                        <div>
                            <i class="bi-calendar3"></i> 
                            <span><strong id="updatedTime">Loading...</strong></span>
                        </div> |

                        <div>
                            <i class="bi-eye"></i>
                            <span><strong id="viewCount">Loading...</strong></span>
                        </div> |

                        <div>
                            <i class="bi-clock"></i>
                            <span><strong id="pageContentRead">Loading...</strong></span>
                        </div> |
                        
                        <div>
                            <i class="bi-tag"></i>
                            <span><strong id="categoryName">Loading...</strong></span>
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
                        <div class="page-list-back-div">
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
                    pageCategory: "BLOG",
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
                                <span><strong>Related News</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Related Blog And <strong>Articles</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_1"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_1"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="cg-carousel">
                        <div class="cg-carousel__container" id="js-carousel_1">
                            <div class="cg-carousel__track js-carousel__track" id="relatedBlogDetailPageContainer">
                                <script>
                                    _getPageList({
                                        pageCategory: "BLOG",
                                        pageContainer: "relatedBlogDetailPageContainer"
                                    })
                                </script>   
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
                        700: {
                            slidesPerView: 1,
                        },
                        900: {
                            slidesPerView: 2,
                        },
                        1400: {
                            slidesPerView: 3,
                        }
                    }
                });
            </script>
        </section>

        <?php include '../../footer.php' ?>
    </section>

</body>

</html>