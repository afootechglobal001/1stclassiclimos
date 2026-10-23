<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Contact Us - Luxury Chauffeur Services</title>
    <meta name="keywords" content="<?php echo $appName ?> contact, 1st Classic contact, chauffeur services contact, luxury transportation USA, limousine service contact, black car service, airport transportation, airport transfer booking, corporate transportation, executive car service, Napa Valley wine tours, Sonoma wine tours, Bay Area chauffeur services, San Francisco limo service, request transportation quote, private chauffeur booking, wedding transportation, special event transportation" />
    <meta name="description" content="Contact <?php echo $appName ?> for professional chauffeur services and luxury transportation. Request a quote, arrange airport transfers, book corporate travel, plan wine tours, or discuss transportation for your next special event." />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $appName ?> | Contact Us - Luxury Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Get in touch with <?php echo $appName ?> to arrange luxury transportation, airport transfers, corporate travel, wine tours, and professional chauffeur services." />

    <!-- Twitter -->
    <meta name="twitter:title" content="<?php echo $appName ?> | Contact Us - Luxury Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Contact <?php echo $appName ?> to request a transportation quote, book airport transfers, arrange corporate travel, or plan your next luxury journey." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Contact',
                'highlight' => 'Us',
                'description' => 'Get in touch with <strong>' . $appName . '</strong> for professional chauffeur services and luxury transportation. Whether you need a quote, want to arrange an airport transfer, book corporate travel, plan a wine tour, or inquire about special event transportation, our team is here to help.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Contact Us',
                        'url' => $websiteUrl . '/contact-us',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="other-pages-main-section">
        <section class="contact-hash-bg">
            <div class="bottom-body-div">
                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/email.png" alt="<?php echo $thename ?> Email Address" /></div>

                        <div class="text">
                            <h2>MAIL US</h2>
                            <div>
                                <a href="mailto:info@1stclassiclimos.com" title="Toll Free">info@1stclassiclimos.com</a>
                            </div>
                            
                            <div>
                                <a href="mailto:support@1stclassiclimos.com" title="Local">support@1stclassiclimos.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/phone.png" alt="<?php echo $thename ?> Phone Number" /></div>

                        <div class="text">
                            <h2>CALL US</h2>
                            <div>
                                <strong>Toll Free:</strong>
                                <a href="tel:1-800-658-5679" title="Toll Free">1-800-658-5679</a>
                            </div>

                            <div>
                                <strong>Local:</strong>
                                <a href="tel:(415) 462-2938" title="Local">(415) 462-2938</a>
                            </div>   
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/location.png" alt="<?php echo $thename ?> Office Address" /></div>

                        <div class="text">
                            <h2>Head Office</h2>
                            <p>San Francisco California, USA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-body-div">
            <div class="map-back-div">
                <iframe allowfullscreen="" class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555103048!2d-122.50764017948534!3d37.75781499657613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2snp!4v1596444244045!5m2!1sen!2snp"></iframe>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="contact-mail-div" data-aos="fade-in" data-aos-duration="800">
                    <div class="inner-div">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/body-pix/contact.webp" alt="Contact" />
                        </div>

                        <div class="div-in">
                            <div class="title">
                                <div class="top-title">
                                    <h4><i class="bi bi-envelope-fill"></i> Send An Enquiry</h4>
                                </div>
                                <div class="bottom-title">
                                    <h3>Tell Us How We Can Help</h3>
                                    <p>Share a few details about your journey and our team will get back to you with the information and assistance you need.</p>
                                </div>
                            </div>

                            <div class="text_field_container" id="fullName_container">
                                <script>
                                    textField({
                                        id: 'fullName',
                                        title: 'Full Name',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="flex-cont">
                                <div class="text_field_container" id="emailAddress_container">
                                    <script>
                                        textField({
                                            id: 'emailAddress',
                                            title: 'Email Address',
                                            type: 'email',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>

                                <div class="text_field_container" id="phoneNumber_container">
                                    <script>
                                        textField({
                                            id: 'phoneNumber',
                                            title: 'Phone Number',
                                            type: 'tel',
                                            onKeyPressFunction: 'isNumberCheck(event);',
                                            applyBorder: true,
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="text_field_container" id="serviceType_container">
                                <script>
                                    selectField({
                                        id: 'serviceType',
                                        title: 'Service Type',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="subject_container">
                                <script>
                                    textField({
                                        id: 'subject',
                                        title: 'Subject',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="text_area_container" id="message_container">
                                <script>
                                    textField({
                                        id: 'message',
                                        title: 'Tell us more about your enquiry',
                                        type: 'textarea',
                                        applyBorder: true,
                                    });
                                </script>
                            </div>

                            <div class="btn-div" id="contactBtn">
                                <script>
                                    generalButtons({
                                        container: "contactBtn",
                                        buttons: [{
                                            id: "submitBtn",
                                            text: "Send Mail!",
                                            icon: "bi-send-check",
                                            width: "btn-full",
                                            size: "btn-lg",
                                            onClick: ""
                                        }]
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>