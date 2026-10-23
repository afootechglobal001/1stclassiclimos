<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Chauffeur Services Blog - Travel Tips & Guides</title>
    <meta name="keywords" content="<?php echo $appName ?> blog, chauffeur services blog, luxury transportation tips, limousine service guides, airport transportation tips, corporate travel advice, Napa Valley wine tours, Sonoma wine tours, Bay Area travel guides, luxury travel insights, private chauffeur services, executive transportation, wedding transportation, special event transportation, airport transfer guides, chauffeur industry insights" />
    <meta name="description" content="Explore the <?php echo $appName ?> blog for luxury travel tips, chauffeur service insights, airport transportation guides, corporate travel advice, wine tour recommendations, and expert insights into comfortable, reliable transportation." />

    <meta property="og:title" content="<?php echo $appName ?> | Chauffeur Services Blog - Travel Tips & Guides" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Discover luxury travel tips, airport transfer guides, corporate transportation advice, and wine tour insights from <?php echo $appName ?>." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/blog/" />

    <meta name="twitter:title" content="<?php echo $appName ?> | Chauffeur Services Blog - Travel Tips & Guides" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Read the <?php echo $appName ?> blog for luxury transportation tips, chauffeur service guides, airport travel advice, and wine tour inspiration." />
</head>

<body>
    <?php include '../header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Latest',
                'highlight' => 'Insights & Articles',
                'description' => 'Stay informed with luxury travel tips, chauffeur service insights, airport transportation guides, corporate travel advice, and wine tour recommendations from <strong>' . $appName . '</strong>. Explore helpful articles designed to make every journey comfortable, convenient, and memorable.',
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
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" id="searchContent" onkeyup="_filtersBlog(this.value);"
                                    type="text" placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <script>
                                    _fetchCategoryList('BLOG', 'pageMainBlogPageContainer, allRelatedBlogPageContainer');
                                </script>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="page-list-back-div" id="pageMainBlogPageContainer">
                            <script>
                                _getPageList({
                                    pageCategory: "BLOG",
                                    limit: 3,
                                    pageContainer: "pageMainBlogPageContainer"
                                })
                            </script>   
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Related News</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>Related Blog And <strong>Articles</strong></h2>
                        </div>
                    </div>

                    <div class="blog-back-div" id="allRelatedBlogPageContainer">
                        <script>
                            _getPageList({
                                pageCategory: "BLOG",
                                pageContainer: "allRelatedBlogPageContainer"
                            })
                        </script>   
                    </div>
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>

</body>

</html>