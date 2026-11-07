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

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="nav-title-div">
                        <div class="general-title related-title">
                            <div class="top-title">
                                <i class="bi-car-front-fill"></i>
                                <span><strong>Point Of Service</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Service <strong>Airport</strong></h2>
                            </div>
                        </div>

                        <div class="slide-btn">
                            <button class="btn" title="Previous" id="js-carousel__prev_1"><i class="bi-chevron-double-left"></i></button>
                            <button class="btn" title="Next" id="js-carousel__next_1"><i class="bi-chevron-double-right"></i></button>
                        </div>
                    </div>

                    <div class="airport-wrapper">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_1">
                                <div class="cg-carousel__track js-carousel__track" id="relatedBlogDetailPageContainer">
                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="airport-div">
                                            <div class="image">
                                                <img id="airportPix" src="<?php echo $websiteUrl ?>/uploaded_files/airport-pix/SFO-image.jpg" alt="<?php echo $pageTitle?>" />
                                            </div>

                                            <div class="content">
                                                <h2>San Francisco International Airport (SFO)</h2>
                                                <p><strong>WEBSITE:</strong> <br> https://www.flysfo.com</p>

                                                <div class="btn-div" id="airportBtn">
                                                <script>
                                                    generalButtons({
                                                        container: "airportBtn",
                                                        buttons: [{
                                                            id: "airportBtn",
                                                            text: "VISIT WEBSITE!",
                                                            size: "btn-sm",
                                                            icon: "bi bi-airplane-engines-fill",
                                                            link: "https://www.flysfo.com"
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="airport-div">
                                            <div class="image">
                                                <img id="airportPix" src="<?php echo $websiteUrl ?>/uploaded_files/airport-pix/flyoak_park.jpg" alt="<?php echo $pageTitle?>" />
                                            </div>

                                            <div class="content">
                                                <h2>Oakland International Airport (OAK)</h2>
                                                <p><strong>WEBSITE:</strong> <br> https://www.oaklandairport.com</p>

                                                <div class="btn-div" id="oaklandBtn">
                                                <script>
                                                    generalButtons({
                                                        container: "oaklandBtn",
                                                        buttons: [{
                                                            id: "oaklandBtn",   
                                                            text: "VISIT WEBSITE!",
                                                            size: "btn-sm",
                                                            icon: "bi bi-airplane-engines-fill",
                                                            link: "https://www.oaklandairport.com"
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="airport-div">    
                                            <div class="image">
                                                <img id="airportPix" src="<?php echo $websiteUrl ?>/uploaded_files/airport-pix/sanjos.jpg" alt="<?php echo $pageTitle?>" />
                                            </div>

                                            <div class="content">
                                                <h2>San Jose International Airport (SJC)</h2>
                                                <p><strong>WEBSITE:</strong> <br> https://www.flysjc.com</p>

                                                <div class="btn-div" id="sjcBtn">
                                                <script>
                                                    generalButtons({
                                                        container: "sjcBtn",
                                                        buttons: [{
                                                            id: "sjcBtn",
                                                            text: "VISIT WEBSITE!",
                                                            size: "btn-sm",
                                                            icon: "bi bi-airplane-engines-fill",
                                                            link: "https://www.flysjc.com"
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="airport-div">
                                            <div class="image">
                                                <img id="airportPix" src="<?php echo $websiteUrl ?>/uploaded_files/airport-pix/sacramento.jpeg" alt="<?php echo $pageTitle?>" />
                                            </div>

                                            <div class="content">
                                                <h2>Sacramento International Airport (SMF)</h2>
                                                <p><strong>WEBSITE:</strong> <br> https://www.smfairport.com</p>

                                                <div class="btn-div" id="smfBtn">
                                                <script>
                                                    generalButtons({
                                                        container: "smfBtn",
                                                        buttons: [{
                                                            id: "smfBtn",   
                                                            text: "VISIT WEBSITE!",
                                                            size: "btn-sm",
                                                            icon: "bi bi-airplane-engines-fill",
                                                            link: "https://www.smfairport.com"
                                                        }]
                                                    });
                                                </script>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title airport-title">
                                    <div class="icon">
                                        <i class="bi bi-airplane-engines-fill"></i>
                                    </div>
                                    <p>AVERAGE TRANSFER RATE -- <span>SAN FRANCISCO INTERNATIONAL AIRPORT (SFO)</span></p>
                                </div>
                            </div>

                            <div class="inner-content">
                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr class="tb-col">
                                                <th>sn</th>
                                                <th>Airport</th>
                                                <th>Vehicle Type</th>
                                                <th>Passenger Max Capacity</th>
                                                <th>Transfer Rate. To & Fro</th>
                                            </tr>
                                        </thead>

                                        <tbody id="">
                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>
                                                    San Francisco International Airport (SFO)
                                                </td>
                                                <td>
                                                   Corprate Sedan
                                                </td>
                                                <td>Up to 3 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $110.90
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>2</td>
                                                <td>
                                                    San Francisco International Airport (SFO)
                                                </td>
                                                <td>
                                                   Executive Class SUV
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $171.94
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>3</td>
                                                <td>
                                                    San Francisco International Airport (SFO)
                                                </td>
                                                <td>
                                                   VIP Class Sedan - s550 Benz
                                                </td>
                                                <td>Up to 3 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $207.90
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>     
                    
                    <div class="main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title airport-title">
                                    <div class="icon">
                                        <i class="bi bi-airplane-engines-fill"></i>
                                    </div>
                                    <p>AVERAGE TRANSFER RATE -- <span>OAKLAND INTERNATIONAL AIRPORT (OAK)</span></p>
                                </div>
                            </div>

                            <div class="inner-content">
                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr class="tb-col">
                                                <th>sn</th>
                                                <th>Airport</th>
                                                <th>Vehicle Type</th>
                                                <th>Passenger Max Capacity</th>
                                                <th>Transfer Rate. To & Fro</th>
                                            </tr>
                                        </thead>

                                        <tbody id="">
                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>
                                                    Oakland International Airport (OAK)
                                                </td>
                                                <td>
                                                   Executive Class Sedan
                                                </td>
                                                <td>Up to 3 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $114.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>2</td>
                                                <td>
                                                    Oakland International Airport (OAK)
                                                </td>
                                                <td>
                                                   Executive Class Sedan - s550 Benz
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $207.90
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>3</td>
                                                <td>
                                                    Oakland International Airport (OAK)
                                                </td>
                                                <td>
                                                   	VIP Class SUV
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $183.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title airport-title">
                                    <div class="icon">
                                        <i class="bi bi-airplane-engines-fill"></i>
                                    </div>
                                    <p>AVERAGE TRANSFER RATE -- <span>SAN JOSE INTERNATIONAL AIRPORT (SJC)</span></p>
                                </div>
                            </div>

                            <div class="inner-content">
                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr class="tb-col">
                                                <th>sn</th>
                                                <th>Airport</th>
                                                <th>Vehicle Type</th>
                                                <th>Passenger Max Capacity</th>
                                                <th>Transfer Rate. To & Fro</th>
                                            </tr>
                                        </thead>

                                        <tbody id="">
                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>
                                                    San Jose International Airport (SJC)
                                                </td>
                                                <td>
                                                   Executive Class Sedan
                                                </td>
                                                <td>Up to 3 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $114.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>2</td>
                                                <td>
                                                   San Jose International Airport (SJC)
                                                </td>
                                                <td>
                                                   Executive Class Sedan - s550 Benz
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $207.90
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>3</td>
                                                <td>
                                                   San Jose International Airport (SJC)
                                                </td>
                                                <td>
                                                   	VIP Class SUV
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $183.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title airport-title">
                                    <div class="icon">
                                        <i class="bi bi-airplane-engines-fill"></i>
                                    </div>
                                    <p>AVERAGE TRANSFER RATE -- <span>SACRAMENTO INTERNATIONAL AIRPORT (SMF)</span></p>
                                </div>
                            </div>

                            <div class="inner-content">
                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%">
                                        <thead>
                                            <tr class="tb-col">
                                                <th>sn</th>
                                                <th>Airport</th>
                                                <th>Vehicle Type</th>
                                                <th>Passenger Max Capacity</th>
                                                <th>Transfer Rate. To & Fro</th>
                                            </tr>
                                        </thead>

                                        <tbody id="">
                                            <tr class="tb-row">
                                                <td>1</td>
                                                <td>
                                                    Sacramento International Airport (SMF)
                                                </td>
                                                <td>
                                                   Executive Class Sedan
                                                </td>
                                                <td>Up to 3 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $114.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>2</td>
                                                <td>
                                                   Sacramento International Airport (SMF)
                                                </td>
                                                <td>
                                                   Executive Class Sedan - s550 Benz
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $207.90
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="tb-row">
                                                <td>3</td>
                                                <td>
                                                   Sacramento International Airport (SMF)
                                                </td>
                                                <td>
                                                   	VIP Class SUV
                                                </td>
                                                <td>Up to 6 passengers</td>
                                                <td>
                                                    <div class="text-back-div">
                                                        <div class="text-div">
                                                            <div class="first-class">
                                                                $183.99
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                        400: {
                            slidesPerView: 1,
                        },
                        700: {
                            slidesPerView: 2,
                        },
                        1100: {
                            slidesPerView: 3,
                        },
                        1300: {
                            slidesPerView: 4,
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
                                <span><strong>Fleet Service Options</strong></span>
                            </div>

                            <div class="main-title">
                                <h2>Hourly <strong>Rate</strong></h2>
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

        <section class="body-div net-bg-bl">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="general-title other-title">
                        <div class="top-title">
                            <i class="bi-car-front-fill"></i>
                            <span><strong>Our Airport Arrivals</strong></span>
                        </div>

                        <div class="main-title">
                            <h2>PickUp <strong>Instructions</strong></h2>
                            <p>We monitor all commercial flights, even if its delayed or early you can count on our professionals to be there when you arrive. Each chauffeur is professional, knowledgeable and very familiar with the particular needs of the business traveler. So, while we can't take all the stress away from a business trip, your Chauffeur will make certain you get to and from your destination in the most efficient, timely and comfortable way possible.</p>
                        </div>
                    </div>

                    <div class="pick-up-instructions-wrapper">
                        <div class="pick-up-instructions">
                            <div class="pick-up-info-card">
                                <div class="card-content">
                                    <h3>Reservation Info</h3>

                                    <ul>
                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>3 hours minimum advance reservation required.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Confirmation will be received at the time of booking.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Easy online booking system.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Price is per vehicle.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pick-up-info-card">
                                <div class="card-content">
                                    <h3>Included</h3>

                                    <ul>
                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Private airport transportation.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Friendly and professional chauffeur.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>WiFi onboard.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Bottled water.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pick-up-info-card">
                                <div class="card-content">
                                    <h3>Excluded</h3>

                                    <ul>
                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Meet & Greet Service (by request only).</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Additional stops.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Waiting time.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Chauffeur gratuities (20% recommended).</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="pick-up-info-card">
                                <div class="card-content">
                                    <h3>Upon Arrival</h3>

                                    <ul>
                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Your chauffeur will call you to establish contact.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Then pick you up at the curbside of the baggage claim or arrival level.</span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>
                                                At your request, Meet & Greet with a welcome name sign
                                                at the baggage or custom arrival (Additional charges will apply).
                                            </span>
                                        </li>

                                        <li>
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>
                                                Your airport limousine service chauffeur will know
                                                the trip destination in advance and will not ask you for directions.
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="pick-up-support">
                            <div class="support-info">
                                <div class="support-icon">
                                    <i class="bi bi-headset"></i>
                                </div>

                                <div class="support-text">
                                    <strong>Need Help?</strong>
                                    <span>Our 24/7 support team is always available to assist you.</span>
                                </div>
                            </div>

                            <a href="<?php echo $websiteUrl; ?>/contact-us" class="support-btn">
                                Contact Support
                                <i class="bi bi-arrow-right-circle"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php _customerReviewSection('net-bg-tl', 'ambient-bg'); ?>

        <?php include 'footer.php' ?>
    </section>

</body>

</html>