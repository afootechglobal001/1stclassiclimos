<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Privacy Policy - Chauffeur Services</title>
    <meta name="keywords" content="<?php echo $appName ?> privacy policy, privacy notice, data protection, personal information, customer privacy, information security, data collection, website privacy, chauffeur services privacy, limousine service privacy, transportation booking privacy, customer data protection" />
    <meta name="description" content="Read the Privacy Policy of <?php echo $appName ?> to learn how we collect, use, protect, and manage your personal information when you use our website and chauffeur transportation services." />

    <meta property="og:title" content="<?php echo $appName ?> | Privacy Policy - Chauffeur Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta property="og:description" content="Learn how <?php echo $appName ?> handles personal information, protects customer privacy, and manages data collected through our website and transportation services." />

    <meta name="twitter:title" content="<?php echo $appName ?> | Privacy Policy - Chauffeur Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/1st-classic.jpg" />
    <meta name="twitter:description" content="Discover how <?php echo $appName ?> collects, uses, and protects personal information when you access our website or book chauffeur services." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Privacy',
                'highlight' => 'Policy',
                'description' => 'By using <strong>' . $appName . '</strong> websites, you are accepting all the terms and conditions of this Privacy Policy. Your privacy is important to us. To better protect it, we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. If you don’t agree with the terms and conditions of this Privacy Policy, please refrain from using this website.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Privacy Policy',
                        'url' => $websiteUrl . '/privacy-policy',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div ambient-bg2">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="body-text">
                        <p><strong>The Way We Use Information</strong></p>
                        <p>We use the information you provide about yourself when ordering services only to complete that service order. We do not share this information with any third party except to the extent necessary to complete that services ordered. We use return email addresses to answer the email we receive. Such addresses are not used for any other purpose and are not shared with outside parties. We use non-identifying and aggregate information to better design our website and to share with advertisers. For example, we may tell an advertiser that a total number of individuals visited a certain area on our website, but we would not disclose anything that could be used to identify those individuals. Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.</p>
                        <p><strong>Cookies:</strong></p>
                        <p>Like many other websites, 1st Classic uses cookies to identify members so they don&rsquo;t have to re-enter common information. Cookies also help us improve your experience and display more prominently goods and services that might interest you.</p>
                        <p><strong>Our Commitment to Data Security</strong></p>
                        <p>To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, and managerial procedures to safeguard and secure the information we collect online.</p>
                        <p><strong>Third-Party Service Providers</strong></p>
                        <p>Although we employ respectable Third Parties and their services, 1st Classic will not be accountable and deemed responsible for any information collected by any third party on our website.</p>
                        <p><strong>Obtaining Your Consent</strong></p>
                        <p>By using our website, you give 1st Classic the permission to collect information about the pages served to you as an anonymous user for the purpose of calculating aggregate site statistics. If you register at <strong><?php echo $appName ?></strong>, you authorize <strong><?php echo $appName ?></strong> to use the information you provide to personalize the information we deliver to you and to use your demographic information when calculating aggregate customer data.</p>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
    <!-- Load Google Maps API with Places & call initMap -->
    <script>
        const timestamp = new Date().getTime();
        document.write(`
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNYG0x6xtJOeYx6PTmRjjqBVI9FPgGNSw&libraries=places&callback=initMap&t=${timestamp}">
            <\/script>
        `);
    </script>
</body>

</html>